<?php

namespace App\Http\Controllers;

// use Log;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try{
            Log::info('Attempting to store property', $request->all());
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'neighborhood' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'required|integer',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'contact' => 'required|string',
            'video_link' => 'nullable|url',
        ]);
        // Add bedrooms and bathrooms validation only if type is plot
        // Add bedrooms and bathrooms validation based on property type
        if($request->input('type') !== 'Plot') {
            $request->validate([
                'bedrooms' => 'required|integer',
                'bathrooms' => 'required|integer'
            ]);
            $validated['bedrooms'] = $request->input('bedrooms');
            $validated['bathrooms'] = $request->input('bathrooms');
        } else {
            $validated['bedrooms'] = null;
            $validated['bathrooms'] = null;
        }
        
        $imagePaths = [];
        $fileNames = [];
        
        if ($request->hasFile('images')) {
            Log::info('Processing images');
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                // Store the path string, not the file object
                $path = $image->move('property_images', $filename)->getPathname();
                $imagePaths[] = $path;
                $fileNames[] = $filename;
            }
        }
        $property = Property::create([
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
            'neighborhood' =>$validated['neighborhood'],
            'created_by' => auth()->id(),
            'video_link' => $validated['video_link'],
        ]);
        Log::info('Property created successfully', ['property_id' => $property->id]);

        return back()->with('success', 'Property uploaded successfully.');
    } catch(\Exception $e){
        Log::error('Failed to store property', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        return back()->with('error', 'Error: ' . $e->getMessage())->withInput();
    }
    }
    /**
     * Display the specified resource.
     */
    public function update(Request $request, Property $property)
    {
        // Only allow the creator to update
        if (auth()->id() !== $property->created_by) {
            abort(403, 'Unauthorized action.');
        }
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
            'neighborhood' => 'required|string',
        ]);
    
        $imagePaths = json_decode($property->images, true) ?? [];
        $fileNames = json_decode($property->images_name, true) ?? [];
    
        // If new images are uploaded, add them to existing ones
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $path = $image->move('property_images', $filename)->getPathname();
                $imagePaths[] = $path;
                $fileNames[] = $filename;
            }
        }
    
        $property->update([
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
            'neighborhood' => $validated['neighborhood'],
        ]);
    
        return redirect()->back()->with('success', 'Property updated successfully.');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    public function show_property(Property $property)
    {
        // Logic to show the property details
        // $property = Property::find($property->id);
        return view('property_details', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }

    /**
     * Mark the specified property as sold.
     */
    public function markAsSold(Property $property)
    {
        // Only allow the creator to mark as sold
        if (auth()->id() !== $property->created_by) {
            abort(403, 'Unauthorized action.');
        }
        $property->status = 'Sold';
        $property->save();
        return redirect()->back()->with('success', 'Property marked as sold.');
    }
}
