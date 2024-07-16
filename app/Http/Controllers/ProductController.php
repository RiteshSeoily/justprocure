<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_product; // 

class ProductController extends Controller
{
   
    public function allproducts()
    {
        $products = tbl_product::all();
        return view('admin.all-products', compact('products'));
        // return response()->json([
        //     'success' => true,
        //     'data' => $products
        // ]);
    }

    public function show($id)
    {
        $product = tbl_product::findOrFail($id);
        return view('products.show', compact('product'));
    }


    public function edit($id)
    {
        $product = tbl_product::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            // Add validation rules for other fields as needed
        ]);

        $product = tbl_product::findOrFail($id);
        $product->product_name = $validatedData['product_name'];
        // Update other fields similarly

        $product->save();

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    
    public function destroy($id)
    {
        $product = tbl_product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully.');
    }
}
