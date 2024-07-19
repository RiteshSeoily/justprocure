<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_product;
use App\Models\tbl_product_detail; 
use App\Models\tbl_category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
    public function allproducts()
    {
        
        $products = tbl_product::with(['details', 'category'])->get();

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
        // Log the request data for debugging
        \Log::info('Request Data:', $request->all());
    
        // Validate the request data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'tbl_selling_price' => 'required|string|max:255',
            'tbl_mrp' => 'nullable|string|max:255',
            'status' => 'required|string|max:255'
        ]);
    
        // Retrieve product detail and log it
        $product_detail = tbl_product_detail::findOrFail($id);
        \Log::info('Product Detail Retrieved:', $product_detail->toArray());
    
        // Update product details
        $product_detail->tbl_selling_price = $request->tbl_selling_price;
        $product_detail->tbl_mrp = $request->tbl_mrp;
        $product_detail->status = $request->status;
        $product_detail->save();
    
        // Log the updated product detail
        \Log::info('Updated Product Detail:', $product_detail->toArray());
    
        // Retrieve product using the foreign key from product detail and log it
        $product = tbl_product::findOrFail($product_detail->product_id);
        \Log::info('Product Retrieved:', $product->toArray());
    
        // Update the product
        $product->product_name = $request->product_name;
        $product->save();
    
        // Log the updated product
        \Log::info('Updated Product:', $product->toArray());
    
        // Redirect back with success message
        return redirect()->route('products.allproducts')->with('success', 'Product details updated successfully.');
    } 
   

    public function getProductsByCategory($categoryName)
    {
     
        $category = tbl_category::where('category_name', $categoryName)->first();

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

       
        $products = tbl_product::with(['details', 'category'])
            ->where('cat_id', $category->id)
            ->get();

            return view('admin.productbycat', compact('products'));
    }
}
