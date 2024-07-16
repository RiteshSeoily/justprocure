<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_product; //
use App\Models\tbl_product_detail; 

class ProductController extends Controller
{
   
    public function allproducts()
    {
        $products = tbl_product::with('details')->get();
        // return response()->json($products);
         return view('admin.all-products', compact('products'));
    }

    public function show($id)
    {
        $product = tbl_product::with('details')->findOrFail($id);
        return view('admin.show-product', compact('product'));
    }

    
    public function destroy($id)
    {
           
    try {
        $product = tbl_product::findOrFail($id);
        $product->delete();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
    }

    public function edit($id)
    {
        $product_detail = tbl_product_detail::findOrFail($id);
        $product = tbl_product::findOrFail($product_detail->product_id);
        return view('admin.edit-product', compact('product', 'product_detail'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tbl_selling_price' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ]);

        $product = tbl_product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->save();

        $product_detail = tbl_product_detail::findOrFail($product->id);
        $product_detail->tbl_selling_price = $request->tbl_selling_price;
        $product_detail->tbl_status = $request->status;
        $product_detail->save();

        return redirect()->route('products.edit', $product->id)->with('success', 'Product details updated successfully.');
    }

      
    
   
}
