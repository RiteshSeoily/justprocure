@extends('admin.adminlayouts.app')
@section('title', 'All RFQs for Buyer')
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
         <a href="all-buyer">- All Products</a>
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

              <div class="back-and-forward-button-rfqs-page-buyer">
                      <button class="back-button-for-rfq-buyer" tabindex="-1" aria-disabled="true"> 
                        <span class="fa fa-plus"></span>ADD PRODUCT
                      </button>
                      
                    </div>

              <div class="dashboard_product_list account_user_deails">
                <div class="order_table table-responsive">
                  <table class="table">
                    <thead>
                <tr>
                <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
              <th scope="col" class="heading-buyer-dashboard-recent-activity">PRODUCT NAME</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">IMAGE</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">CATEGORY</th>
                    <th scope="col" class="heading-buyer-dashboard-recent-activity">PRICE</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">STATUS</th>
                  <th scope="col" class="heading-buyer-dashboard-recent-activity">ACTIONS</th>
                </tr>
                    </thead>
                    <tbody>
                      <tr class="buyer-dashboard-recent-activity-table-outer">
                        <td class="buyer-dashboard-right-border">01</td>
                         <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                        <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg"></td>          
                        <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES>> Stationery>> lable 3</td>
                        <td class="buyer-dashboard-right-border">200-300</td>
                       <td class="buyer-dashboard-right-border">DROPDOWN</td>
                       <td class="editing_list align-middle">
                         <ul>
                            <li class="list-inline-item mb-1">
                              <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </li>
                          </ul>
                        </td>
                      </tr>

                      <tr class="buyer-dashboard-recent-activity-table-outer">
                        <td class="buyer-dashboard-right-border">02</td>
                         <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                        <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg"></td>          
                        <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES>> Stationery>> lable 3</td>
                        <td class="buyer-dashboard-right-border">200-300</td>
                       <td class="buyer-dashboard-right-border">DROPDOWN</td>
                       <td class="editing_list align-middle">
                         <ul>
                            <li class="list-inline-item mb-1">
                              <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </li>
                          </ul>
                        </td>
                      </tr>

                      <tr class="buyer-dashboard-recent-activity-table-outer">
                        <td class="buyer-dashboard-right-border">03</td>
                         <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                        <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg"></td>          
                        <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES>> Stationery>> lable 3</td>
                        <td class="buyer-dashboard-right-border">200-300</td>
                       <td class="buyer-dashboard-right-border">DROPDOWN</td>
                       <td class="editing_list align-middle">
                         <ul>
                            <li class="list-inline-item mb-1">
                              <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item mb-1">
                              <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </li>
                          </ul>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>

              </div>
            

              <div class="mbp_pagination mt30 text-center">
                  <ul class="page_navigation">
                    <li class="page-item">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fas fa-angle-left"></span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                    </li>
                  </ul>
                </div>

            </div>



@endsection