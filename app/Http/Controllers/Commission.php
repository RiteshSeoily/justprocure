<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commission extends Controller
{
    
    public function showCommission()
    {
        return view('admin.Commission');
    }
}
