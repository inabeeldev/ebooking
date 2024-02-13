<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop.index');
    }

    public function stadium()
    {
        $stadiums = Service::where('service_type', 'stadium')->get();
        return view('shop.stadium', compact('stadiums'));
    }

    public function hotel()
    {
        $hotels = Service::where('service_type', 'hotel')->get();
        return view('shop.hotel', compact('hotels'));
    }

    public function cinema()
    {
        $cinemas = Service::where('service_type', 'cinema')->get();
        return view('shop.cinema', compact('cinemas'));
    }

    public function car()
    {
        $cars = Service::where('service_type', 'car')->get();
        return view('shop.car', compact('cars'));
    }

    public function table()
    {
        $tables = Service::where('service_type', 'table')->get();
        return view('shop.table', compact('tables'));
    }

    public function event()
    {
        $events = Service::where('service_type', 'event')->get();
        return view('shop.event', compact('events'));
    }

    public function bookNow($id)
    {
        $service = Service::where('id', $id)->first();
        return view('shop.book' ,compact('service'));
    }


    public function completeBooking(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'contact_through' => 'required|string|in:email,phone,whatsapp',
            'message' => 'nullable|string|max:1000',
            'service_id' => 'required|exists:services,id', // Assuming you have a 'services' table
            'service_provider_id' => 'required|exists:service_providers,id', // Assuming you have a 'service_providers' table
        ];

        // Create a new validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, create a new booking record
        $booking = new Booking();
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->contact_through = $request->input('contact_through');
        $booking->message = $request->input('message');
        $booking->service_id = $request->input('service_id');
        $booking->service_provider_id = $request->input('service_provider_id');
        $booking->save();

        return redirect()->route('thank-you');
    }

    public function thankYou()
    {
        return view('shop.thank-you');
    }


}
