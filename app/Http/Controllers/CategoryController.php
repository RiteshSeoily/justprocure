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

    public function allSubCatbyCatId($id)
    {
        // inner join
       
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


        return response()->json([
            'success' => true,
            'subCategories' => $subCategories
        ], 200);
    }

    public function getSubSubCategories($categoryId)
    {
        $subSubCategories = DB::table('tbl_sub_sub_categories')
            ->leftJoin('tbl_categories', 'tbl_sub_sub_categories.cat_id', '=', 'tbl_categories.id')
            ->leftJoin('tbl_sub_categories', 'tbl_sub_sub_categories.sub_cat_id', '=', 'tbl_sub_categories.id')
            ->where('tbl_categories.id', $categoryId) // Filter by category ID
            ->select(
                'tbl_sub_sub_categories.id as sub_sub_cat_id',
                'tbl_sub_sub_categories.category_name',
                'tbl_sub_sub_categories.category_slug',
                'tbl_sub_sub_categories.tbl_image',
                'tbl_categories.category_name as category_name',
                'tbl_sub_categories.sub_category_name as sub_category_name'
            )
            ->get();
    
        return response()->json([
            'success' => true,
            'subSubCategories' => $subSubCategories
        ], 200);
    }





    // brand controllers



         

    public function showCreateForm()
    {
        $categories = tbl_category::all();
        $subcategories = tbl_sub_category::all();
        return view('admin.create_brand', compact('categories', 'subcategories'));
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

    public function create(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'is_top' => 'required|boolean',
            'tbl_image' => 'nullable|string|max:255',
            'cat_id' => 'required|exists:tbl_categories,id',
            'sub_cat_id' => 'required|exists:tbl_sub_categories,id', 
        ]);
    
        $brand = tbl_brand::create([
            'brand_name' => $request->input('brand_name'),
            'is_top' => $request->input('is_top'),
            'tbl_image' => $request->input('tbl_image'),
            'cat_id' => $request->input('cat_id'),
            'sub_cat_id' => $request->input('sub_cat_id'),
        ]);
    
        return redirect()->route('admin.seller.brand')->with('success', 'Brand created successfully');
    }
    


    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'is_top' => 'required|boolean',
            'tbl_image' => 'nullable|string|max:255',
        ]);

        $brand = tbl_brand::findOrFail($id);

        $brand->update([
            'brand_name' => $request->input('brand_name'),
            'is_top' => $request->input('is_top'),
            'tbl_image' => $request->input('tbl_image'),
        ]);

        return response()->json([
            'success' => true,
            'brand' => $brand
        ], 200);
    }

   
    public function destroy($id)
    {
        $brand = tbl_brand::findOrFail($id);
        $brand->delete();

        return response()->json([
            'success' => true,
            'message' => 'Brand deleted successfully'
        ], 200);
    }



    public function getBrandCount()
    {
        
        $brandCount = tbl_brand::count();
        return response()->json([
            'success' => true,
            'brand_count' => $brandCount
        ], 200);
    }

 

}
