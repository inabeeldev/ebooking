<?php

namespace App\Http\Controllers\seller;

use Exception;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('service_provider.auth.register');
    }


    public function storeRegistration(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email|unique:service_providers,email',
        'phone' => 'required',
        'service_type' => 'required',
        'cnic' => 'required',
        'password' => 'required|string|min:8|confirmed',
        'stripeToken' => 'required', // Ensure the stripeToken field is required
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    Stripe::setApiKey(config('services.stripe.secret'));

    try {
        $charge = Charge::create([
            'amount' => 2000, // Amount in cents
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $request->stripeToken,
        ]);

        // Payment successful, create user
        $user = ServiceProvider::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cnic' => $request->cnic,
            'service_type' => $request->service_type,
            'password' => bcrypt($request->input('password')),
        ]);

        // You can send a welcome email here if needed

        return redirect()->route('service-providers-login')->with('success', 'Payment successful. Please Login to continue!');
    } catch (Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}

    public function loginForm()
    {
        return view('service_provider.auth.login');
    }

    public function storeLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');

        if (Auth::guard('seller')->attempt($credentials, $request->has('remember'))) {
            // Redirect to seller home if login is successful
            return redirect()->intended(route('service-providers-home'));
        }

        return redirect()->route('service-providers-login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'Invalid login credentials.']); // Customize the error message
    }

    public function logout(Request $request)
    {
        Auth::guard('seller')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
