@extends('admin.adminlayouts.app')

@section('title', 'Create Brand')

@section('content')
<div class="dashboard_content_wrapper">
   <div class="dashboard dashboard_wrapper pr0-md">
      <div class="dashboard__sidebar">
         <!-- Sidebar code here -->
      </div>
      <div class="dashboard__main pl0-md">
         <div class="dashboard__content bg-color-buyer-dashboard">
            <div class="row">
               <div class="col-xl-12">
                  <div class="admin-dashboard-searchbar-radio-button-outer">
                     <!-- Search and radio buttons section -->
                  </div>
                  <div class="dashboard_product_list account_user_deails">
                     <form action="{{ route('admin.brand.create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                           <label for="brand_name">Brand Name</label>
                           <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                        </div>
                        <div class="form-group">
                           <label for="cat_id">Category</label>
                           <select class="form-control" id="cat_id" name="cat_id" required>
                              <option value="">Select Category</option>
                              @foreach($categories as $category)
                                 <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="sub_cat_id">Subcategory</label>
                           <select class="form-control" id="sub_cat_id" name="sub_cat_id" required>
                              <option value="">Select Subcategory</option>
                              @foreach($subcategories as $subcategory)
                                 <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="is_top">Is Top Brand</label>
                           <select class="form-control" id="is_top" name="is_top" required>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="tbl_image">Image URL</label>
                           <input type="text" class="form-control" id="tbl_image" name="tbl_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Brand</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
