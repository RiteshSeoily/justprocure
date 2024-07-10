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
   
    public function count()
    {
        $count = Seller::count();

        return response()->json(['count' => $count]);
    }

    public function findSellerById($id)
    {
        $sellers = Seller::where('id', $id)->get();
        return view('admin.single-seller', compact('sellers'));
    }
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        return view('admin.seller-edit', compact('seller'));
    }


    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'gst_number' => 'required|string|max:15',
            'pan_number' => 'required|string|max:10',
            
        ]);

        // Find the Seller instance by ID
        $seller = Seller::findOrFail($id);

        // Update Seller instance with validated data
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone_number = $request->phone_number;
        $seller->gst_number = $request->gst_number;
        $seller->pan_number = $request->pan_number;
       
       
        $seller->save();

        // Redirect back with a success message
        return redirect()->route('admin.sellers.all')->with('success', 'Seller updated successfully');
    }
}



  

