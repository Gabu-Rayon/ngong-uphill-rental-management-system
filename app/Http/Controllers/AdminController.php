<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Houses;
use App\Models\Tenants;
use App\Models\Payments;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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


        // Calculate total amount per month
        $totalPerMonth = DB::table('payments')
        ->select(DB::raw('SUM(amount) as total_per_month'))
        ->whereMonth('created_at', '=', date('m'))
        ->value('total_per_month');

        // Calculate total amount per year
        $totalPerYear = DB::table('payments')
        ->select(DB::raw('SUM(amount) as total_per_year'))
        ->whereYear('created_at', '=', date('Y'))
        ->value('total_per_year');

        // Fetch data for tables
        $houses = Houses::all(); 
        $tenants = Tenants::all(); 
        $categories = Categories::all();
        $payments = Payments::all();
        $maintainances = MaintenanceRequest::all();

        return view("admin-panel.index", compact('user', 'categoryCount', 'houseCount', 'tenantCount', 'paymentCount', 'houses', 'tenants','categories','payments', 'maintainances','maintainanceCount', 'totalPerMonth', 'totalPerYear'));
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
        // Validate the incoming request data
        $request->validate([
            'house_no' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Find the house by ID
        $house = Houses::findOrFail($request->input('house_id'));

        // Update the house with the new data
        $house->update([
            'house_no' => $request->input('house_no'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        // Redirect back with a success message
        return redirect()->intended('admin/index')->with('success', 'House updated successfully!');
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

    public function createHouse(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'house_no' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Create a new house instance
        $house = new Houses([
            'house_no' => $request->input('house_no'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        // Save the house
        $house->save();

        // Redirect to a success page or wherever you wish
        return redirect()->intended('admin/index')->with('success', 'House added successfully!');
    }
    public function deleteHouse($id)
    {
        // Find the house by ID
        $house = Houses::find($id);

        if (!$house) {
            // If house not found, redirect back with an error message
            return redirect()->back()->with('error', 'House not found!');
        }

        // Delete the house
        $house->delete();

        // Redirect back with a success message
        return redirect()->intended('admin/index')->with('success', 'House deleted successfully!');
    }

    public function addCategory(){
        return view('admin-panel.add-category');
    }

    public function createCategory(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'category' => 'required|string|unique:categories,name',
        ]);

        $category = Categories::create([
            'name' => $request->input('category'),
        ]);
        return redirect()->intended('admin/index')->with('success', 'Category added successfully!');
    }

    public function editCategory($id){
        $category=Categories::findOrFail($id);
        return view("admin-panel.edit-category", compact('category'));
    }


    public function updateCategory(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:categories,id',
            'category' => 'required|string|unique:categories,name,' . $request->id,
        ]);

        $category = Categories::findOrFail($request->id);

        $category->update([
            'name' => $request->input('category'),
        ]);

        return redirect()->intended('admin/index')->with('success', 'Category updated successfully!');
    }


    public function deleteCategory($id)
    {
        $category = Categories::findOrFail($id);

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }



    public function printPayment($id)
    {
        // Find the payment by ID
        $payment = Payments::findOrFail($id);
        $registrationNumber = Str::uuid();
        return view("admin-panel.receipt-for-rent", compact('payment', 'registrationNumber'));
    }
    
}