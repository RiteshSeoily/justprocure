<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function show($id)
    {
        $buyer = buyer::findOrFail($id);
        return response()->json($buyer);
    }

    public function update(Request $request, $id)
    {
        $buyer = buyer::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:buyers,email,' . $buyer->id,
            'phone_number' => 'sometimes|required|string|max:15|unique:buyers,phone_number,' . $buyer->id,
            'pan_number' => 'sometimes|required|string|max:20|unique:buyers,pan_number,' . $buyer->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        $buyer->update($validatedData);
        return response()->json($buyer);
    }

    public function destroy($id)
    {
        $buyer = buyer::findOrFail($id);
        $buyer->delete();
        return response()->json(null, 204);
    }

    public function count()
    {
        $count = buyer::count();
        return response()->json(['count' => $count]);
    }

    public function allBuyersdata()
    {
        $buyers = buyer::all();
        return response()->json($buyers);
    }
}
