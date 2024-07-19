<?php

namespace App\Http\Controllers;


use App\Models\tbl_category;
use App\models\tbl_sub_category;
use App\Models\tbl_brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function allSubCatbyCatId($id)
    {
        // Fetch subcategories by category ID using a join
        $subCategories = DB::table('tbl_categories')
            ->leftJoin('tbl_sub_categories', 'tbl_categories.id', '=', 'tbl_sub_categories.cat_id')
            ->select(
                'tbl_sub_categories.id as sub_cat_id',
                'tbl_sub_categories.sub_category_name',
                'tbl_sub_categories.sub_cat_slug',
                'tbl_sub_categories.tbl_image',
                'tbl_sub_categories.status',
                'tbl_sub_categories.is_approved'
            )
            ->where('tbl_categories.id', $id)
            ->get();

        // Return the results as JSON
        return response()->json([
            'success' => true,
            'subCategories' => $subCategories
        ], 200);
    }



}
