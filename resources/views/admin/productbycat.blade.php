@extends('admin.adminlayouts.app')

@section('title', 'Products by Category')

@section('content')
<div class="dashboard_content_wrapper">
   <div class="dashboard dashboard_wrapper pr0-md">
      <div class="dashboard__sidebar">
         <div class="dashboard_sidebar_list">
            <div class="sidebar_list_item">
               <a href="{{route('admin.home')}}" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
            </div>
            <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Buyer Management
               <i class="fa fa-caret-down ml10"></i>
            </button>
            <div class="admin-dashboard-sdebar-dropdown-options">
               <a href="{{ route('admin.buyers.all')}}">All Buyers</a>
            </div>
            <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Seller Management
               <i class="fa fa-caret-down ml10"></i>
            </button>
            <div class="admin-dashboard-sdebar-dropdown-options">
               <a href="{{ route('admin.sellers.all')}}">All sellers</a>
            </div>
            <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-inr mr15"></i> Product Management
               <i class="fa fa-caret-down ml10"></i>
            </button>
            <div class="admin-dashboard-sdebar-dropdown-options productdrop"></div>
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
                  <div class="admin-dashboard-searchbar-radio-button-outer">
                     <!-- Search and radio buttons section -->
                  </div>
                  <div class="dashboard_product_list account_user_deails">
                     <div class="order_table table-responsive">
                        <table id="productsTable" class="table">
                           <thead>
                              <tr>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">Product Name</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">Image</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">Selling Price</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">Category Name</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($products as $product)
                              <tr class="buyer-dashboard-recent-activity-table-outer">
                                 <td class="buyer-dashboard-right-border">{{ $product->product_name }}</td>
                                 <td class="buyer-dashboard-right-border">
                                    <img src="{{ asset($product->tbl_image) }}" alt="{{ $product->product_name }}" style="max-width: 100px;">
                                 </td>
                                 <td class="buyer-dashboard-right-border">
                                    @if($product->details->isNotEmpty())
                                    {{ $product->details->first()->tbl_selling_price }}
                                    @else
                                    N/A
                                    @endif
                                 </td>
                                 <td class="buyer-dashboard-right-border">{{ $product->category->category_name }}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
