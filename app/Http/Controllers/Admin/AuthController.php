<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function loginAdmin(AdminLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function register()
    {
        return view('admin.auth.register');
    }
    public function registerAdmin(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password'],
        ]);
        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('admin')->login($user);

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    public function dashboard()
    {
        return view('admin.page.dashboard');
    }
}
