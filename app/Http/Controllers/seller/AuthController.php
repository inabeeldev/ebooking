<?php

namespace App\Http\Controllers\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
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
