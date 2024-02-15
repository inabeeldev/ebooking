<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // Count all bookings for the authenticated service provider
        $totalBookings = Booking::count();

        // Count pending bookings for the authenticated service provider
        $pendingBookings = Booking::where('status', 'pending')
                                   ->count();

        // Count completed bookings for the authenticated service provider
        $completedBookings = Booking::where('status', 'completed')
                                     ->count();

        // Count total services for the authenticated service provider
        $totalServices = Service::count();

        return view('admin.home', compact('totalBookings', 'pendingBookings', 'completedBookings', 'totalServices'));
    }
}
