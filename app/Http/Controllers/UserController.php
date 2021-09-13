<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            return redirect('/dashboard');
          }
          else{
            return view('login.login');
          }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('error','Invalid User');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route(('login')));
    }
}
