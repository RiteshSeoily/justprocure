@extends('admin.adminlayouts.app')
@section('title', 'All RFQs for Buyer')
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
            <div class="dashboard__content bg-color-buyer-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="back-and-forward-button-rfqs-page-buyer">
                            <button class="back-button-for-rfq-buyer" tabindex="-1" aria-disabled="true">
                                <span class="fa fa-plus"></span> ADD PRODUCT
                            </button>
                        </div>

                        <div class="dashboard_product_list account_user_deails">
                            <div class="order_table table-responsive">
                                <table class="table" id="productsTable">
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
                                        @foreach ($products as $product)
                                        <tr class="buyer-dashboard-recent-activity-table-outer">
                                            <td class="buyer-dashboard-right-border">{{ $loop->iteration }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $product->product_name }}</td>
                                            <td class="buyer-dashboard-right-border product-image-buyer-rfq-page">
                                                <img src="{{ asset($product->tbl_image ?? 'images/buyer-dashboard/product.jpeg') }}" alt="{{ $product->product_name }}" />
                                            </td>
                                            <td class="buyer-dashboard-right-border">
                                                @if ($product->details->isEmpty())
                                                No details available
                                                @else
                                                @foreach ($product->details as $detail)
                                                {{ $detail->category }}
                                                @endforeach
                                                @endif
                                            </td>
                                            <td class="buyer-dashboard-right-border">
                                                @if ($product->details->isEmpty())
                                                -
                                                @else
                                                @foreach ($product->details as $detail)
                                                {{ $detail->tbl_selling_price }}
                                                @endforeach
                                                @endif
                                            </td>
                                            <td class="buyer-dashboard-right-border">
                                                @if ($product->details->isEmpty())
                                                -
                                                @else
                                                @foreach ($product->details as $detail)
                                                {{ $detail->status }}
                                                @endforeach
                                                @endif
                                            </td>
                                            <td class="editing_list align-middle">
                                                <ul>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('products.show', $product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="{{ route('products.edit', $detail->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" aria-label="Edit">
                                                            <i class="fa fa-pen"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-1">
                                                        <a href="#" class="delete-product" data-id="{{ $product->id }}" data-url="{{ route('products.destroy', $product->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" aria-label="Delete">
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

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#productsTable').DataTable();

        $(document).on('click', '.delete-product', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var url = $(this).data('url');

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
                        url: url,
                        type: 'POST', // Should be 'DELETE'
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your product has been deleted.',
                                    'success'
                                ).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the product.',
                                    'error'
                                );
                            }
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                'An error occurred while deleting the product.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
