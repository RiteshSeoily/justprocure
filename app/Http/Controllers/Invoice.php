<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice extends Controller
{
    public function showInvoice()
    {
        return view('admin.invoice');
    }
}
