<?php
// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20|unique:users',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        
        ], [
            'phone.unique' => 'This phone number is already registered.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'agent', // Explicitly set role
            'status' => 'pending', // Default status
        ]);

        // Optional: Send email verification
        

        return redirect()->route('home')
               ->with('success', 'Registration successful! Welcome to our platform.');
    }

    public function login_user(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        if ($user->status !== 'active') {
            return back()->withErrors([
                'email' => 'Your account is not active. Please contact support.',
            ])->onlyInput('email');
        }
        Auth::login($user, $request->remember);
        $request->session()->regenerate();

            // Check user role and redirect accordingly
            $role = auth()->user()->role;
            if ($role === 'admin') {
                return redirect()->intended('/admin_dashboard');
            } elseif ($role === 'agent'){
                return redirect()->intended('/agent_dashboard');
            }
            
            return redirect()->intended('/');
    }

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
public function editUser($id)
{
    $user = User::findOrFail($id);
    return view('auth.edit_user', compact('user'));
}
public function update(Request $request,  $id)
{
    $user = User::findOrFail($id);
    $validated = $request->validate([
        'role' => 'required|in:admin,agent',
        'status' => 'required|in:active,inactive,pending',
    ]);

    $user->update($validated);

    return redirect()->back()->with('success', 'User updated successfully.');
}
}
