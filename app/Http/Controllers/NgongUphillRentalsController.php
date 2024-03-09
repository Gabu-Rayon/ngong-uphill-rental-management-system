<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class NgongUphillRentalsController extends Controller
{
    public  function index(){
        return view('index');
    }
    public  function about()
    {
        return view('about');
    }
    public  function blogSingle()
    {
        return view('blog-single');
    }
    public  function blog()
    {
        return view('blog');
    }
    public  function contact()
    {
        return view('contact');
    }
    public  function rooms()
    {
        return view('rooms');
    }
    public  function services()
    {
        return view('services');
    }
    public function signUp(){
        return view('sign-up');
    }
    public function signIn()
    {
        return view('sign-in');
    }
    public function userProfile()
    {
        // Get currently authenticated tenant using Laravel's Auth facade
        $tenant = Auth::guard('tenants')->user();

        // If tenant is not retrieved, redirect or handle the error
        if (!$tenant) {
            return redirect()->route('sign-in'); // Or display an error message
        }

        // Optionally, pass the tenant data to the view
        return view('user-profile', compact('tenant'));
    }
    public  function create(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:tenants',
            'email' => 'required|email|max:255|unique:tenants',
            'contact' => 'required|numeric',
            'town' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ];

        // Validation messages
        $messages = [
            // Add custom validation messages if needed
        ];

        // Validate the request
        $request->validate($rules, $messages);

        // Create the user
        $user = Tenants::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'town' => $request->input('town'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('sign-in')->with('registration_alert', 'Registration successful. Please sign in.');
    }
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Manual authentication with Tenants model
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('tenants')->attempt($credentials)) {
            // Successful login, redirect to user profile
            return redirect()->intended('user-profile');  // Replace with actual route name or URL
        }

        // Login failed, return error message
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public  function delete()
    {
     
    }
    public  function update()
    {
        
    }
}