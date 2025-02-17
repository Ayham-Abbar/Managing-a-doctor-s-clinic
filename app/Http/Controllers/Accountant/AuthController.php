<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AccountantLoginRequest;
use App\Models\Accountant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
class AuthController extends Controller
{
    public function login()
    {
        return view('accountant.auth.login');
    }

    public function loginAccountant(AccountantLoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ACCOUNTANT_HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('accountant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('accountant.login');
    }

    public function register()
    {
        return view('accountant.auth.register');
    }
    public function registerAccountant(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Accountant::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password'],
        ]);
        $user = Accountant::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('accountant')->login($user);

        return redirect()->intended(RouteServiceProvider::ACCOUNTANT_HOME);
    }


    public function dashboard()
    {
        return view('accountant.page.dashboard');
    }
}
