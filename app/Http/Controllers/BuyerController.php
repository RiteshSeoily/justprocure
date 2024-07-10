<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Buyer;
use App\Models\ListRfq;
use App\Models\Address;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function edit($id)
    {
        $buyer = Buyer::findOrFail($id);
        return view('admin.buyer-edit', compact('buyer'));
    }

    public function update(Request $request, $id)
    {
        $buyer = Buyer::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:buyers,email,' . $buyer->id,
            'phone_number' => 'sometimes|required|string|max:15|unique:buyers,phone_number,' . $buyer->id,
            'pan_number' => 'sometimes|required|string|max:20|unique:buyers,pan_number,' . $buyer->id,
            'password' => 'sometimes|nullable|string|min:8',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        } else {
            unset($validatedData['password']);
        }

        $buyer->update($validatedData);

        return redirect()->route('admin.buyers.show', $buyer->id)
            ->with('success', 'Buyer updated successfully.');
    }

    public function destroy($id)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->delete();

        return response()->json(null, 204);
    }

    public function count()
    {
        $count = Buyer::count();

        return response()->json(['count' => $count]);
    }

    public function allBuyersdata(Request $request)
    {
        $buyers = Buyer::all();

        if ($request->ajax()) {
            return response()->json($buyers);
        }

        return view('admin.all-buyer1', compact('buyers'));
    }

    public function getAddressByUserId($id)
    {
        $addresses = Address::where('buyer_id', $id)->get();
        return view('admin.single-buyer', compact('addresses'));
    }

    public function rfqcountByBuyerId($buyerId)
    {
        $count = ListRfq::where('buyer_id', $buyerId)->count();
        return response()->json(['count' => $count]);
    }

    public function allRfq($buyerId)
    {
        $rfqs = ListRfq::where('buyer_id', $buyerId)->get();
        if ($rfqs->isEmpty()) {
            return response()->json(['error' => 'No RFQs found for the buyer'], 404);
        }
        return response()->json(['data' => $rfqs]);
    }

    public function findListByRfQ($buyerId)
    {
        $listRfqs = ListRfq::where('buyer_id', $buyerId)->get();

        $listRfqs->transform(function ($listRfq) {
            $listRfq->type_a_ids = array_map('intval', explode(',', $listRfq->type_a_ids));
            $listRfq->type_b_ids = array_map('intval', explode(',', $listRfq->type_b_ids));
            $listRfq->type_c_ids = array_map('intval', explode(',', $listRfq->type_c_ids));
            return $listRfq;
        });

        $listRfqs->each(function ($listRfq) {
            if ($listRfq->type_a > 0) {
                $cartItems = Cart::whereIn('id', $listRfq->type_a_ids)->get();
                $listRfq->cartItems = $cartItems;
            }
        });

        return response()->json(['data' => $listRfqs]);
    }

    public function findListByCart($buyerId)
    {
        $listRfqs = Cart::where('buyer_id', $buyerId)->get();
        return response()->json(['data' => $listRfqs]);
    }
}
