<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginWithRegNumber(Request $request)
    {
        // Validate the form data
        $request->validate([
            'registration_number' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        $credentials = [
            'registration_number' => $request->registration_number,
            'password' => $request->password,
        ];
        $remember = $request->filled('remember');
        if (Auth::attempt($credentials, $remember)) {
            // The user is authenticated, redirect them to the home page
            return redirect()->intended(route('dashboard'));
        }

        // The user is not authenticated, redirect them back to the login page with an error message
        return redirect()->back()->withInput($request->only('registration_number', 'remember'))->withErrors([
            'registration_number' => __('auth.failed'),
        ]);
    }
}
