@extends('admin.adminlayouts.app')
@section('title', 'All Sellers')
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
                        <table id="buyersTable" class="table">
                           <thead>
                              <tr>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">NAME</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">COMPANY NAME</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">TYPE</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">PHONE NUMBER</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">EMAIL</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">PRODUCT MAPPED</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">PENDING FOR APPROVAL</th>
                                 <th scope="col" class="heading-buyer-dashboard-recent-activity">ACTIONS</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($sellers as $index => $seller)
                              <tr class="buyer-dashboard-recent-activity-table-outer">
                                 <td class="buyer-dashboard-right-border">{{ $index + 1 }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->name }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->propitier_name }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->seller_type }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->phone_number }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->email }}</td>
                                 <td class="buyer-dashboard-right-border">{{ $seller->product_mapped }}</td>
                                 <td class="buyer-dashboard-right-border">
                                    <input type="checkbox" class="approve-checkbox" data-id="{{ $seller->id }}" {{ $seller->approve ? 'checked' : '' }}>
                                 </td>
                                 <td class="editing_list align-middle">
                                    <ul>
                                       <li class="list-inline-item mb-1">
                                          <a href="{{ route('admin.sellers.single-seller', ['id' => $seller->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                       </li>
                                       <li class="list-inline-item mb-1">
                                          <a href="{{ route('admin.sellers.edit', ['id' => $seller->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                       </li>
                                       <li class="list-inline-item mb-1">
                                          <button class="delete-buyer-btn" data-id="{{ $seller->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" aria-label="Delete" style="border:none;background:none;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                       </li>
                                    </ul>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="mbp_pagination mt30 text-center">
                     <!-- Pagination section -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
       $('#buyersTable').DataTable();
       
       $('.delete-buyer-btn').click(function() {
           var buyerId = $(this).data('id');
           var row = $(this).closest('tr');
   
           Swal.fire({
               title: 'Are you sure?',
               text: "You won't be able to revert this!",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, delete it!'
           }).then((result) => {
               if (result.isConfirmed) {
                   $.ajax({
                       url: '/sellers/' + buyerId,
                       type: 'DELETE',
                       data: {
                           _token: '{{ csrf_token() }}'
                       },
                       success: function(result) {
                           row.remove();
                           Swal.fire(
                               'Deleted!',
                               'Buyer has been deleted.',
                               'success'
                           );
                       },
                       error: function(xhr, status, error) {
                           Swal.fire(
                               'Error!',
                               'An error occurred while deleting the buyer.',
                               'error'
                           );
                       }
                   });
               }
           });
       });
              


       $('.approve-checkbox').change(function() {
    var sellerId = $(this).data('id');
    var isApproved = $(this).is(':checked') ? 1 : 0;

    $.ajax({
        url: '/admin/sellers/' + sellerId + '/approve', // Update URL as per your routes
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            approve: isApproved
        },
        success: function(response) {
            if (response.success) {
                Swal.fire(
                    'Success!',
                    response.message,
                    'success'
                );
            } else {
                Swal.fire(
                    'Error!',
                    response.message,
                    'error'
                );
            }
        },
        error: function(xhr, status, error) {
            Swal.fire(
                'Error!',
                'An error occurred while updating the approval status.',
                'error'
            );
        }
    });
});

     
   });
</script>
@endsection
