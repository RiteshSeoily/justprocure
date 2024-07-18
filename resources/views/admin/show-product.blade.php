@extends('admin.adminlayouts.app')

@section('title', 'Product Details')

@section('content')
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr0-md">
    <div class="dashboard__sidebar">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="admin-dashboard" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
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
        <div class="admin-dashboard-sdebar-dropdown-options">
         <a href="all-buyer">- Category Lable1</a><br>
         <a href="all-buyer">- Category Lable2</a><br>
         <a href="all-buyer">- Category Lable3</a><br>
         <a href="all-buyer">- All Brands</a><br>
         <a href="{{ route('products.allproducts')}}">- All Products</a>
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
            <div class="dashboard__content bg-color-buyer-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title" style="color: white;">Product Details</h2>
                            </div>
                            <div class="card-body">
                                <h4 class="card-subtitle mb-2">Product Name: {{ $product->product_name }}</h4>

                                <!-- Display other product details here -->
                                @if ($product->details->isNotEmpty())
                                    <div class="mb-3">
                                        <strong>Category:</strong> {{ $product->details->first()->category }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Selling Price:</strong> {{ $product->details->first()->tbl_selling_price }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>MRP Price:</strong> {{ $product->details->first()->tbl_mrp }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Status:</strong> {{ $product->details->first()->status }}
                                    </div>
                                @else
                                    <p class="text-orange">No details available</p>
                                @endif

                                <!-- Example: Display product image or placeholder -->
                                @if ($product->tbl_image)
                                    <img src="{{ asset($product->tbl_image) }}" alt="{{ $product->product_name }}" class="img-fluid mt-3" style="max-width: 100%;">
                                @else
                                    <i class="fa fa-image fa-5x text-orange mt-3"></i>
                                    <p class="text-orange">No image available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
