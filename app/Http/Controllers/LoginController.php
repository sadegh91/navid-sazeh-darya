<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(): Factory|View|Application
    {
        return view('login.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $remember = $request->has('remember');

        if (Auth::attempt(['national_code' => $request->input('national_code'), 'password' => $request->input('password')], $remember)) {

            return redirect()->route('panel.dashboard.index');

        }
        return redirect()->back()->with('loginError', 'نام کاربری یا رمز عبوز اشتباه است');

    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('loginPage');
    }
}
