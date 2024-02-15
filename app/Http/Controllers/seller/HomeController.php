<?php

namespace App\Http\Controllers\seller;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $service_provider_id = Auth::id();

        // Count all bookings for the authenticated service provider
        $totalBookings = Booking::where('service_provider_id', $service_provider_id)->count();

        // Count pending bookings for the authenticated service provider
        $pendingBookings = Booking::where('service_provider_id', $service_provider_id)
                                   ->where('status', 'pending')
                                   ->count();

        // Count completed bookings for the authenticated service provider
        $completedBookings = Booking::where('service_provider_id', $service_provider_id)
                                     ->where('status', 'completed')
                                     ->count();

        // Count total services for the authenticated service provider
        $totalServices = Service::where('service_provider_id', $service_provider_id)->count();

        return view('service_provider.home', compact('totalBookings', 'pendingBookings', 'completedBookings', 'totalServices'));
    }

    public function profile()
    {
        $sp = auth()->user();
        return view('service_provider.profile', compact('sp'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('service_providers')->ignore(auth()->id()), // Ensure email uniqueness excluding the current user
            ],
            'phone' => 'nullable|string|max:255',
            'cnic' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8', // Keep the password field as nullable
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  // Pass the validation errors to the view
                ->withInput();           // Pass the old input data to the view
        }

        // Update customer information in the database
        $sp = auth()->user();
        $data = $request->except('password'); // Exclude password field if it's null
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password); // Hash the password
        }
        $sp->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


}
