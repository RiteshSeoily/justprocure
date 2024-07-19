@extends('admin.adminlayouts.app')

@section('title', 'Edit Brand')

@section('content')
<div class="dashboard_content_wrapper">
   <div class="dashboard dashboard_wrapper pr0-md">
   <div class="dashboard__sidebar">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="{{route('admin.home')}}" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
          </div>
         <!--  <div class="sidebar_list_item ">
            <a href="rfqs" class="items-center"><i class="fa fa-file-text mr15"></i> Buyer Management</a> -->
           
          <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Buyer Management
             <i class="fa fa-caret-down ml10"></i>
         </button>
        <div class="admin-dashboard-sdebar-dropdown-options">
         <a href="{{ route('admin.buyers.all')}}">All Buyers</a>
         <!-- <a href="#">Link 2</a>
         <a href="#">Link 3</a> -->
        </div>

         <!--  </div> -->
          <!-- <div class="sidebar_list_item ">
            <a href="buyer-orders" class="items-center"><i class="fa fa-shopping-cart mr15"></i> Seller Management</a>
          </div> -->
           <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Seller Management
             <i class="fa fa-caret-down ml10"></i>
         </button>
        <div class="admin-dashboard-sdebar-dropdown-options">
        <a href="{{ route('admin.sellers.all')}}">All sellers</a>
         <!-- <a href="#">Link 2</a>
         <a href="#">Link 3</a> -->
        </div>
          <!-- <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="fa fa-inr mr15"></i> Product Management</a>
          </div> -->
          <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-inr mr15"></i> Product Management
             <i class="fa fa-caret-down ml10"></i>
         </button>
        <div class="admin-dashboard-sdebar-dropdown-options productdrop">
         
         <!-- <a href="#">Link 2</a>
         <a href="#">Link 3</a> -->
        </div>
          <div class="sidebar_list_item ">
            <a href="{{ route('admin.commission')}}" class="items-center"><i class="fa fa-box mr15"></i>Commission</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="{{ route('admin.invoice')}}" class="items-center"><i class="fa fa-box mr15"></i>PO & Invoices List</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="#" class="items-center"><i class="fa fa-cog mr15"></i>Settings</a>
          </div> 

          <div class="chat-with-us-buyer-dashboard">
            <div class="chat-with-us-buyer-dashboard-image">
              <img src="images/buyer-dashboard/client.png">
            </div>

            <div class="chat-with-us-buyer-dashboard-text">
              <p>Need support on your order or have any enquiry?</p>
            </div>

            <button class="chat-with-us-button-dashboard">Chat with us</button>
          </div>
        
        </div>
      </div>
      <div class="dashboard__main pl0-md">
         <div class="dashboard__content bg-transparent">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="admin-dashboard-searchbar-radio-button-outer mb-4">
                     <!-- Search and radio buttons section -->
                  </div>
                  <div class="dashboard_product_list account_user_deails bg-light p-4 rounded">
                     <form action="{{ route('admin.brand.update', ['id' => $brand->id]) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- This specifies the PUT method -->
                        <div class="form-group">
                           <label for="brand_name">Brand Name</label>
                           <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $brand->brand_name }}" required>
                        </div>
                        <div class="form-group">
                           <label for="cat_id">Category</label>
                           <select class="form-control" id="cat_id" name="cat_id" required>
                              <option value="">Select Category</option>
                              @foreach($categories as $category)
                                 <option value="{{ $category->id }}" {{ $brand->cat_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                 </option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="sub_cat_id">Subcategory</label>
                           <select class="form-control" id="sub_cat_id" name="sub_cat_id" required>
                              <option value="">Select Subcategory</option>
                              @foreach($subcategories as $subcategory)
                                 <option value="{{ $subcategory->id }}" {{ $brand->sub_cat_id == $subcategory->id ? 'selected' : '' }}>
                                    {{ $subcategory->sub_category_name }}
                                 </option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="is_top">Is Top Brand</label>
                           <select class="form-control" id="is_top" name="is_top" required>
                              <option value="1" {{ $brand->is_top ? 'selected' : '' }}>Yes</option>
                              <option value="0" {{ !$brand->is_top ? 'selected' : '' }}>No</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-warning" style="margin-top : 2rem;">Update Brand</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
