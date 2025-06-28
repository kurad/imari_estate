<?php

namespace App\Http\Controllers;

use App\Models\HousePlan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HousePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function show($id)
    {
        $housePlan = HousePlan::findOrFail($id);
        // dd($housePlan);
        return view('house_plan_details', compact('housePlan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd('here');
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'required|integer',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'contact' => 'required|string',
        ]);
        // dd('here');

        if ($request->has('features') && is_string($request->features)) {
            $validated['features'] = array_map('trim', explode(',', $request->features));
        }

        $imagePaths = [];
        $fileNames = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                // Store the path string, not the file object
                $path = $image->move('house_plan_images', $filename)->getPathname();
                $imagePaths[] = $path;
                $fileNames[] = $filename;
            }
        }

        
        HousePlan::create([
            'title' => $validated['title'],
            'type' => $validated['type'],
            'location' => $validated['location'],
            'price' => $validated['price'],
            'bedrooms' => $validated['bedrooms'],
            'bathrooms' => $validated['bathrooms'],
            'size' => $validated['size'],
            'status' => $validated['status'],
            'description' => $validated['description'] ?? null,
            'features' => json_encode($validated['features'] ?? []),
            'images' => json_encode($imagePaths),
            'images_name' => json_encode($fileNames), // Store the original filenames
            'contact' => $validated['contact'],
        ]);

        return back()->with('success', 'House Plan uploaded successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function update(Request $request, HousePlan $housePlan)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'required|integer',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'contact' => 'required|string',
        ]);

        $imagePaths = json_decode($housePlan->images, true) ?? [];
        $fileNames = json_decode($housePlan->images_name, true) ?? [];

        // If new images are uploaded, add them to existing ones
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $path = $image->move('property_images', $filename)->getPathname();
                $imagePaths[] = $path;
                $fileNames[] = $filename;
            }
        }

        $housePlan->update([
            'title' => $validated['title'],
            'type' => $validated['type'],
            'location' => $validated['location'],
            'price' => $validated['price'],
            'bedrooms' => $validated['bedrooms'],
            'bathrooms' => $validated['bathrooms'],
            'size' => $validated['size'],
            'status' => $validated['status'],
            'description' => $validated['description'] ?? null,
            'features' => json_encode($validated['features'] ?? []),
            'images' => json_encode($imagePaths),
            'images_name' => json_encode($fileNames),
            'contact' => $validated['contact'],
        ]);

        return redirect()->back()->with('success', 'Property updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HousePlan $housePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HousePlan $housePlan)
    {
        //
    }
}
