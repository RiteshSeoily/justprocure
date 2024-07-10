<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function allBuyersdata(Request $request)
    {
        $sellers = Seller::all();

        if ($request->ajax()) {
            return response()->json($sellers);
        }

        return view('admin.all-Seller', compact('sellers'));
    }

    
    public function destroy($id)
    {
        $buyer = Seller::findOrFail($id);
        $buyer->delete();

        return response()->json(null, 204);
    }
}
