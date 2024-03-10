<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
    public function payRental()
    {
        // Get the authenticated tenant
        $tenant = Auth::guard('tenants')->user();

        // Check if the tenant is authenticated
        if (!$tenant) {
            return redirect()->route('sign-in');
        }

        // Eager load the house relationship with its category
        $tenant = Tenants::with('house.category')->find($tenant->id);

        // Pass the tenant data to the view
        return view('pay-rental', compact('tenant'));
    }
    public function rentReciept()
    {  // Get the authenticated tenant
        $tenant = Auth::guard('tenants')->user();

        // Check if the tenant is authenticated
        if (!$tenant) {
            return redirect()->route('sign-in');
        }

        // Retrieve the latest payment for the tenant
        $latestPayment = Payments::where('tenant_id', $tenant->id)
            ->latest('created_at')
            ->first();
        // Generate a unique registration number
        $registrationNumber = Str::uuid();
        
        // Pass the latest payment data to the view
        return view('rent-receipt', compact('latestPayment','registrationNumber'));;
    }
    public function rentPayment(Request $request)
    {
        // Retrieve the authenticated tenant
        $tenant = Auth::guard('tenants')->user();

        // Check if the tenant is authenticated
        if (!$tenant) {
            return redirect()->route('sign-in');
        }

        // Define validation rules
        $validationRules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'house_no' => 'required|string',
            'category' => 'required|string',
            'rent_amount' => 'required|numeric',
            'payment_method' => ['required', 'string', Rule::notIn(['#', 'Select Method of Payment'])],
            'card_account_code' => 'nullable|string|required_if:payment_method,credit_card',
            'mpesa_account_code' => 'nullable|string|required_if:payment_method,mpesa',
            'bank_account_code' => 'nullable|string|required_if:payment_method,bank_account',
            'card_holder_name' => 'nullable|string|required_if:payment_method,visa',
            'expiry_date' => 'nullable|date|required_if:payment_method,visa',
            'cvv' => 'nullable|string|required_if:payment_method,visa',
            'last_three_digits' => 'nullable|string|required_if:payment_method,visa',
        ];

        // Validate the incoming request data
        $validator = Validator::make($request->all(), $validationRules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Generate a unique invoice code
        $invoiceCode = 'INV-' . Str::uuid();

        // Create a new Payments instance
        $payment = new Payments([
            'tenant_id' => $tenant->id,
            'amount' => $request->rent_amount,
            'name' => $request->name,
            'email' => $request->email,
            'house_no' => $request->house_no,
            'category' => $request->category,
            'payment_method' => $request->payment_method,
            'credit_account_code' => $request->card_account_code,
            'mpesa_account_code' => $request->mpesa_account_code,
            'bank_account_code' => $request->bank_account_code,
            'card_holder_name' => $request->card_holder_name,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'visa_last_three_digits' => $request->last_three_digits,
            'invoice' => $invoiceCode,
        ]);

        // Save the payment data to the database
        $payment->save();

        // Redirect or return a response as needed
        return redirect()->route('rent-receipt')->with('success', 'Payment Succesful.Your Have Paid your Rental.');
    }

   
}