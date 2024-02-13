<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{
    public function index()
    {
        $users = ServiceProvider::all();
        return view('admin.seller.index', compact('users'));
    }

    public function create()
    {
        return view('admin.seller.create');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_providers,email',
            'service_type' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'cnic' => 'required|string|max:255|unique:service_providers,cnic',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  // Pass the validation errors to the view
                ->withInput();           // Pass the old input data to the view
        }

        // Validation passed, so create the service provider
        $serviceProvider = new ServiceProvider();
        $serviceProvider->name = $request->input('name');
        $serviceProvider->email = $request->input('email');
        $serviceProvider->service_type = $request->input('service_type');
        $serviceProvider->cnic = $request->input('cnic');
        $serviceProvider->phone = $request->input('phone');
        $serviceProvider->password = bcrypt($request->input('password')); // Encrypt the password before saving
        $serviceProvider->save();

        return redirect()->route('service-providers-list')->with('success', 'Service provider created successfully');
    }



    public function delete(string $id)
    {
        $user = ServiceProvider::findOrFail($id);

        // Delete the user
        $user->delete();

        return redirect()->back()->with('success', 'Service Provider deleted successfully');
    }

}
