<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_product;
use App\Models\Seller;
use App\Models\SellerRfq;
use App\Models\ListRfq;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'gst_number' => 'required|string|max:15',
            'pan_number' => 'required|string|max:10',
        ]);

        $seller = Seller::findOrFail($id);
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone_number = $request->phone_number;
        $seller->gst_number = $request->gst_number;
        $seller->pan_number = $request->pan_number;
       
        $seller->save();

        return redirect()->route('admin.sellers.all')->with('success', 'Seller updated successfully');
    }

    public function getSingleSellerRfqCount($id)
    {
        $rfqCount = SellerRfq::where('seller_id', $id)->count();
    
        if ($rfqCount > 0) {
            return response()->json([
                'success' => true,
                'rfq_count' => $rfqCount
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No RFQs found for this seller'
            ], 404);
        }
    }

    public function getSingleSellerRfqData($id)
    {
        $rfqs = SellerRfq::where('seller_id', $id)
                         ->with('rfq') 
                         ->get();
    
        $rfqData = $rfqs->map(function ($rfq) {
            $typeAIds = array_map('intval', explode(',', $rfq->rfq->type_a_ids));
            $typeBIds = array_map('intval', explode(',', $rfq->rfq->type_b_ids));
            $typeCIds = array_map('intval', explode(',', $rfq->rfq->type_c_ids));
            $productIds = array_unique(array_merge($typeAIds, $typeBIds, $typeCIds));

            $products = tbl_product::whereIn('id', $productIds)
                                  ->pluck('product_name', 'id');

            $productNames = [];
            foreach ($productIds as $productId) {
                if (isset($products[$productId])) {
                    $productNames[] = $products[$productId];
                }
            }
    
            return [
                'rfq_id' => $rfq->rfq_id,
                'rfq_number' => optional($rfq->rfq)->rfq_number,
                'product_count' => count($productNames),
                'product_names' => $productNames,
                'seller_id' => $rfq->seller_id,
            ];
        });
    
        if ($rfqData->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'data' => $rfqData
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No RFQs found for this seller'
            ], 404);
        }
    }

    public function singleselllerrfq($id)
    {
        $rfqs = ListRfq::where('id', $id)->get();

        if ($rfqs->isEmpty()) {
            return view('admin.test', ['message' => 'No RFQs found for the given ID.']);
        }

        $rfqData = [];

        foreach ($rfqs as $rfq) {
            $typeAIds = array_map('intval', explode(',', $rfq->type_a_ids));
            $typeBIds = array_map('intval', explode(',', $rfq->type_b_ids));
            $typeCIds = array_map('intval', explode(',', $rfq->type_c_ids));

            $productIds = array_unique(array_merge($typeAIds, $typeBIds, $typeCIds));

            $products = tbl_product::whereIn('id', $productIds)
                ->pluck('product_name', 'id');

            $productNames = [];
            foreach ($productIds as $productId) {
                if (isset($products[$productId])) {
                    $productNames[] = $products[$productId];
                }
            }

            $rfqData[] = [
                'rfq_id' => $rfq->rfq_id,
                'rfq_number' => $rfq->rfq_number,
                'product_count' => count($productNames),
                'product_names' => $productNames,
                'seller_id' => $rfq->seller_id,
            ];
        }

        return view('admin.single-seller-rfq', ['rfqData' => $rfqData]);
    }



    public function SingleSellereditRfq($id)
    {
        $rfqs = ListRfq::where('id', $id)->get();
    
        if ($rfqs->isEmpty()) {
            return response()->json(['message' => 'No RFQs found for the given ID.'], 404);
        }
    
        $rfqData = [];
    
        foreach ($rfqs as $rfq) {
            $typeAIds = array_map('intval', explode(',', $rfq->type_a_ids));
            $typeBIds = array_map('intval', explode(',', $rfq->type_b_ids));
            $typeCIds = array_map('intval', explode(',', $rfq->type_c_ids));
    
            $productIds = array_unique(array_merge($typeAIds, $typeBIds, $typeCIds));
    
            $products = tbl_product::whereIn('id', $productIds)
                ->pluck('product_name', 'id');
    
            $productNames = [];
            foreach ($productIds as $productId) {
                if (isset($products[$productId])) {
                    $productNames[] = $products[$productId];
                }
            }
    
            $rfqData[] = [
                'rfq_id' => $rfq->rfq_id,
                'rfq_number' => $rfq->rfq_number,
                'product_count' => count($productNames),
                'product_names' => $productNames,
            ];
        }
    
        if (!empty($rfqData)) {
            return response()->json(['success' => true, 'rfqData' => $rfqData], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'No RFQs found for the given ID.'], 404);
        }
    }
    
}
