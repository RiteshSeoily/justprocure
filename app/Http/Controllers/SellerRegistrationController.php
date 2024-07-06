<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerRegistrationController extends Controller
{
    public function show()
    {
        return view('seller.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
            'pan_number' => 'required|string|min:9',
            'phone_number' => 'nullable|string|max:10|min:10',
        ]);

        $admin = new Seller([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'pan_number' => $request->pan_number,
            'password' => Hash::make($request->password),
        ]);
        $admin->save();

        Auth::login($admin);

        return redirect()->route('login')->with('success', 'Admin registered and authenticated successfully. Please login.');
    }
}
