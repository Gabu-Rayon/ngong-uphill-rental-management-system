<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Houses;
use App\Models\Tenants;
use App\Models\Payments;
use App\Models\Categories;
use App\Models\MaintenanceRequest;
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
        $maintainanceCount = MaintenanceRequest::count();

        // Fetch data for tables
        $houses = Houses::all(); 
        $tenants = Tenants::all(); 
        $categories = Categories::all();
        $payments = Payments::all();
        $maintainances = MaintenanceRequest::all();

        return view("admin-panel.index", compact('user', 'categoryCount', 'houseCount', 'tenantCount', 'paymentCount', 'houses', 'tenants','categories','payments', 'maintainances', 'maintainanceCount'));
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
      
    //method to change the maintainance to approved
    public function toggleStatus(Request $request, $id)
    {
        // Find the maintenance request by its ID
        $maintainance = MaintenanceRequest::findOrFail($id);

        // Toggle the status
        $maintainance->status = !$maintainance->status;

        // Save the changes
        $maintainance->save();

        // Redirect back or return a response
        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    //method to change the maintainance to  deletion
    public function maintainanceDelete($id)
    {
        // Find the maintenance request by its ID
        $maintainance = MaintenanceRequest::findOrFail($id);

        // Delete the maintenance request
        $maintainance->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Maintenance request deleted successfully.');
    }

    public function editHouse($id)
    {
        $house = Houses::findOrFail($id);
        $categories = Categories::all();
        
        return view("admin-panel.edit-house", compact('house', 'categories'));
    }
    public function updateHouse(Request $request)
    {
        $request->validate([
            'house_no' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $house = Houses::findOrFail($request->id);

        $house->update([
            'house_no' => $request->house_no,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->intended('admin/index')->with('success', 'House updated successfully.');
    }

    public function adminLogout()
    {
        Auth::guard('web')->logout(); 
        return redirect('admin/admin-login'); 
    }

    public function addHouse(){

        $categories = Categories::all();
        return view("admin-panel.add-house", compact('categories'));
    }

    public function createHouse(){
        

    }
}