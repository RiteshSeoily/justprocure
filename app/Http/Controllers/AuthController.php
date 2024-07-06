<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]);

      
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->intended('/')->with('success', 'Logged in as admin successfully');
            }

          
            if (Auth::guard('web')->attempt($credentials)) {
                return redirect()->intended('/buyer/dashboard')->with('success', 'Logged in as buyer successfully');
            }
            if (Auth::guard('seller')->attempt($credentials)) {
                return redirect()->intended('/seller/dashboard')->with('success', 'Logged in as buyer successfully');
            }

            
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        return view('auth.login');
    }
}
