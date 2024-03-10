<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Houses;
use App\Models\Tenants;
use App\Models\Payments;
use App\Models\Categories;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex()
    {
        $user = Auth::user();
        $categoryCount = Categories::count();
        $houseCount = Houses::count();
        $tenantCount = Tenants::count();
        $paymentCount = Payments::count();

        // Fetch data for tables
        $houses = Houses::all(); // Example, you can modify this based on your needs
        $tenants = Tenants::all(); // Example
        $categories = Categories::all();
        $payments = Payments::all();

        return view("admin-panel.index", compact('user', 'categoryCount', 'houseCount', 'tenantCount', 'paymentCount', 'houses', 'tenants','categories','payments'));
    }
    public function adminLogin()
    {
        return view("admin-panel.admin-login");
    }

    public function adminLoginSubmit(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/index');
        }

        // Authentication failed, redirect back with errors
        return redirect()->route('admin-login')->withErrors([
            'username' => 'These credentials do not match our records.',
        ]);

    }

    public function adminLogout()
    {
        Auth::guard('web')->logout(); 
        return redirect('admin/admin-login'); 
    }
}