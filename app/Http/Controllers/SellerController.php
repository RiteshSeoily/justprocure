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


    // public function getSingleSellerRfq($id)
    // {
    //     $rfqs = SellerRfq::where('seller_id', $id)
    //                      ->with('rfq') 
    //                      ->get();
    
    //     $rfqData = $rfqs->map(function ($rfq) {
    //         // Convert comma-separated string fields to arrays of integers and count them
    //         $typeAIds = array_map('intval', explode(',', $rfq->rfq->type_a_ids));
    //         $typeBIds = array_map('intval', explode(',', $rfq->rfq->type_b_ids));
    //         $typeCIds = array_map('intval', explode(',', $rfq->rfq->type_c_ids));
    
    //         // Combine all counts into a single total count
    //         $totalCount = count($typeAIds) + count($typeBIds) + count($typeCIds);
    
    //         return [
    //             'rfq_id' => $rfq->rfq_id,
    //             'rfq_number' => optional($rfq->rfq)->rfq_number,
    //             'product_count' => $totalCount,
              
    //         ];
    //     });
    
    //     if ($rfqData->isNotEmpty()) {
    //         return response()->json([
    //             'success' => true,
    //             'data' => $rfqData
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'No RFQs found for this seller'
    //         ], 404);
    //     }
    // }


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
        // Fetch ListRfq data where id matches $id
        $rfqs = ListRfq::where('id', $id)->get();

        // Check if any RFQs were found
        if ($rfqs->isEmpty()) {
            // Return view with message if no RFQs found
            return view('admin.test', ['message' => 'No RFQs found for the given ID.']);
        }

        // Prepare an array to store final data
        $rfqData = [];

        foreach ($rfqs as $rfq) {
            // Extract type_a_ids, type_b_ids, type_c_ids and convert to array of integers
            $typeAIds = array_map('intval', explode(',', $rfq->type_a_ids));
            $typeBIds = array_map('intval', explode(',', $rfq->type_b_ids));
            $typeCIds = array_map('intval', explode(',', $rfq->type_c_ids));

            // Merge and remove duplicates
            $productIds = array_unique(array_merge($typeAIds, $typeBIds, $typeCIds));

            // Query TblProduct table to get product names
            $products = tbl_product::whereIn('id', $productIds)
                ->pluck('product_name', 'id');

            // Prepare data structure with product names
            $productNames = [];
            foreach ($productIds as $productId) {
                if (isset($products[$productId])) {
                    $productNames[] = $products[$productId];
                }
            }

            // Build RFQ data structure
            $rfqData[] = [
                'rfq_id' => $rfq->rfq_id,
                'rfq_number' => $rfq->rfq_number,
                'product_count' => count($productNames),
                'product_names' => $productNames,
                'seller_id' => $rfq->seller_id,
            ];
        }

        // Return view with RFQ data
        return view('admin.single-seller-rfq', ['rfqData' => $rfqData]);
    }

   
    
}

    


    




  

