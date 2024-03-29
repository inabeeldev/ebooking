<?php

namespace App\Http\Controllers\seller;

use Mail;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\BookingCompleted;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function allBooking()
    {
        $bookings = Booking::where('service_provider_id', Auth::user()->id)
                        ->with('service') // eager loading
                        ->get();

        return view('service_provider.booking.all', compact('bookings'));
    }

    public function pendingBooking()
    {
        $bookings = Booking::where('service_provider_id', Auth::user()->id)->where('status', 'pending')
                        ->with('service') // eager loading
                        ->get();

        return view('service_provider.booking.pending', compact('bookings'));
    }

    public function completedBooking()
    {
        $bookings = Booking::where('service_provider_id', Auth::user()->id)->where('status', 'completed')
                        ->with('service') // eager loading
                        ->get();;

        return view('service_provider.booking.completed', compact('bookings'));
    }

    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->input('status');
        $booking->save();

        // Check if the status is "completed"
        if ($booking->status === 'completed') {
            // Send email notification
            Mail::to($booking->email)->send(new BookingCompleted($booking));
        }

        return redirect()->back(); // Redirect back to the previous page
    }


    public function delete(string $id)
    {
        $booking = Booking::findOrFail($id);

        // Delete the user
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully');
    }


}
