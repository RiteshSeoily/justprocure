<?php

namespace App\Http\Controllers;


use App\Models\tbl_category;
use App\Models\tbl_brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategoryname()
    {
        // Fetch all categories
        $categories = tbl_category::all();

        // Return categories as JSON
        return response()->json([
            'success' => true,
            'categories' => $categories
        ], 200);
    }

    public function allBrandname()
    {
        // Fetch all brands
        $brands = tbl_brand::all();

        // Return brands as JSON for AJAX request
        if (request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'brands' => $brands
            ], 200);
        }

        // Return the view with the brands
        return view('admin.all_brands', compact('brands'));
    }
}
