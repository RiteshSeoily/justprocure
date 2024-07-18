@extends('admin.adminlayouts.app')

@section('title', 'All Brands')

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
      <!-- Your sidebar code here -->
      <div class="dashboard__main pl0-md">
         <div class="dashboard__content bg-color-buyer-dashboard">
            <div class="row">
               <div class="col-xl-12">
                  <div class="admin-dashboard-searchbar-radio-button-outer">
                     <!-- Search and radio buttons section -->
                  </div>
                  <div class="dashboard_product_list account_user_deails">
                     <div class="order_table table-responsive">
                        <table id="brandsTable" class="table">
                           <thead>
                              <tr>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">BRAND NAME</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">IMAGE</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">IS TOP</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($brands as $index => $brand)
                              <tr class="buyer-dashboard-recent-activity-table-outer">
                                 <td class="buyer-dashboard-right-border">{{ $index + 1 }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $brand->brand_name }}</td>
                                 <td class="buyer-dashboard-right-border">
                                    <img src="{{ $brand->tbl_image }}" alt="Brand Image" style="max-width: 100px;">
                                 </td>
                                 <td class="buyer-dashboard-right-border">{{ $brand->is_top ? 'Yes' : 'No' }}</td>
                                 <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" aria-label="Edit">
                                                            <i class="fa fa-pen"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="#" class="delete-product" data-id="" data-url="3" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" aria-label="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
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
