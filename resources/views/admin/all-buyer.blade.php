@extends('admin.adminlayouts.app')

@section('title', 'All buyers')

@section('content')
    <div class="dashboard_content_wrapper">
        <div class="dashboard dashboard_wrapper pr0-md">
            <div class="dashboard__sidebar">
                <div class="dashboard_sidebar_list">
                    <div class="sidebar_list_item">
                        <a href="buyer-dashboard" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i>
                            Overview</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="rfqs" class="items-center"><i class="fa fa-file-text mr15"></i> Buyer Management</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="buyer-orders" class="items-center"><i class="fa fa-shopping-cart mr15"></i> Seller
                            Management</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="amount-spent" class="items-center"><i class="fa fa-inr mr15"></i> Product Management</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="product-ordered" class="items-center"><i class="fa fa-box mr15"></i>Commission</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="#" class="items-center"><i class="fa fa-box mr15"></i>PO & Invoices List</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="buyer-notifications" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
                    </div>
                    <div class="sidebar_list_item">
                        <a href="buyer-settings" class="items-center"><i class="fa fa-cog mr15"></i>Settings</a>
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
                                <div class="radio-button-admin-dashboard-outer">
                                    <form class="radio-button-admin-dashboard" action="">
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="all" name="all" value="all" checked>
                                            <label class="admin-dashboard-radio-button-label" for="all">All</label>
                                        </div>
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="Individual" name="all" value="Individual">
                                            <label class="admin-dashboard-radio-button-label"
                                                for="Individual">Individual</label>
                                        </div>
                                        <div class="admin-dashboard-radio-button-input">
                                            <input type="radio" id="company" name="all" value="company">
                                            <label class="admin-dashboard-radio-button-label" for="company">Company</label>
                                        </div>
                                    </form>
                                </div>

                                <div class="admin-dashboard-search-bar-outer">
                                    <form class="searchbar-admin-dashboard-outer" action="">
                                        <input type="text" placeholder="Search.." name="search"
                                            class="searchbar-admin-dashboard">
                                        <button class="searchbar-icon-admin-dashboard" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </form>
                                </div>

                                <button class="back-button-for-rfq-buyer" onclick="exportData()" tabindex="-1"
                                    aria-disabled="true">
                                    Export
                                </button>
                            </div>

                            <div class="dashboard_product_list account_user_deails">
                                <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between">
                                </div>
                                <div class="order_table table-responsive">
                                    <table id="buyersTable" class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.
                                                </th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">NAME</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">EMAIL
                                                </th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">PHONE
                                                    NUMBER</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">TYPE</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ
                                                    RAISED</th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDERS
                                                </th>
                                                <th scope="col" class="heading-buyer-dashboard-recent-activity">ACTIONS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="buyersTableBody">
                                            <!-- Data will be populated here via AJAX -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mbp_pagination mt30 text-center">
                                <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <span class="fas fa-angle-left"></span>
                                        </a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            fetchBuyersData();

            function fetchBuyersData() {
                $.ajax({
                    url: "{{ route('admin.buyers.all') }}",
                    method: 'GET',
                    success: function(data) {
                        populateBuyersTable(data);
                    }
                });
            }

            function populateBuyersTable(data) {
                var buyersTableBody = $('#buyersTableBody');
                buyersTableBody.empty();
                $.each(data, function(index, buyer) {
                    var row = `
            <tr class="buyer-dashboard-recent-activity-table-outer">
                    <td class="buyer-dashboard-right-border">${index + 1}</td>
                    <td class="buyer-dashboard-right-border">${buyer.name}</td>
                    <td class="buyer-dashboard-right-border">${buyer.email}</td>
                    <td class="buyer-dashboard-right-border">${buyer.phone_number}</td>
                    <td class="buyer-dashboard-right-border">${buyer.type}</td>
                    <td class="buyer-dashboard-right-border">${buyer.rfq_raised}</td>
                    <td class="buyer-dashboard-right-border">${buyer.orders}</td>
                    <td class="editing_list align-middle">
                    <ul>
                        <li class="list-inline-item mb-1">
                            <a href="all-buyer-detail/${buyer.id}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                        </li>
                        <li class="list-inline-item mb-1">
                            <a href="edit-buyer/${buyer.id}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item mb-1">
                            <a href="delete-buyer/${buyer.id}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>

                `;
                    buyersTableBody.append(row);
                });
            }

            function exportData() {
                // Implement export functionality
                alert('Export button clicked');
            }
        });
    </script>
@endsection
