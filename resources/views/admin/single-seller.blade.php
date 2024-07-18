@extends('admin.adminlayouts.app') @section('title', 'Product Details') @section('content')
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr0-md">
        <div class="dashboard__sidebar">
            <div class="dashboard_sidebar_list">
                <div class="sidebar_list_item">
                    <a href="admin-dashboard" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
                </div>
                <!--  <div class="sidebar_list_item ">
            <a href="rfqs" class="items-center"><i class="fa fa-file-text mr15"></i> Buyer Management</a> -->

                <button class="dropdown-btn-admin-dashboard-sidebar">
                    <i class="fa fa-file-text mr15"></i> Buyer Management
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
                <button class="dropdown-btn-admin-dashboard-sidebar">
                    <i class="fa fa-file-text mr15"></i> Seller Management
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
                <button class="dropdown-btn-admin-dashboard-sidebar">
                    <i class="fa fa-inr mr15"></i> Product Management
                    <i class="fa fa-caret-down ml10"></i>
                </button>
                <div class="admin-dashboard-sdebar-dropdown-options">
                    <a href="all-buyer">- Category Lable1</a><br />
                    <a href="all-buyer">- Category Lable2</a><br />
                    <a href="all-buyer">- Category Lable3</a><br />
                    <a href="all-buyer">- All Brands</a><br />
                    <a href="{{ route('products.allproducts')}}">- All Products</a>
                    <!-- <a href="#">Link 2</a>
         <a href="#">Link 3</a> -->
                </div>
                <div class="sidebar_list_item">
                    <a href="{{ route('admin.commission')}}" class="items-center"><i class="fa fa-box mr15"></i>Commission</a>
                </div>
                <div class="sidebar_list_item">
                    <a href="{{ route('admin.invoice')}}" class="items-center"><i class="fa fa-box mr15"></i>PO & Invoices List</a>
                </div>
                <div class="sidebar_list_item">
                    <a href="#" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
                </div>
                <div class="sidebar_list_item">
                    <a href="#" class="items-center"><i class="fa fa-cog mr15"></i>Settings</a>
                </div>

                <div class="chat-with-us-buyer-dashboard">
                    <div class="chat-with-us-buyer-dashboard-image">
                        <img src="images/buyer-dashboard/client.png" />
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
                        <!--<div class="raise-a-rfq-button-buyer-dashboard-outer">
             <button class="raise-a-rfq-button-buyer-dashboard">
           RAISE A RFQ
           </button>
         </div>-->

                        <div class="admin-dashboard-searchbar-radio-button-outer">
                            <div class="radio-button-admin-dashboard-outer">
                                <form class="radio-button-admin-dashboard" action="">
                                    <div class="admin-dashboard-radio-button-input">
                                        <input type="radio" id="all" name="all" value="all" />
                                        <label class="admin-dashboard-radio-button-label" for="all">ALL SELLER</label>
                                    </div>
                                    <!--<input type="submit" value="Submit"> -->
                                </form>
                            </div>

                            <div class="admin-dashboard-search-bar-outer">
                                <form class="searchbar-admin-dashboard-outer" action="">
                                    <input type="text" placeholder="Search.." name="search" class="searchbar-admin-dashboard" />
                                    <button class="searchbar-icon-admin-dashboard" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <button class="back-button-for-rfq-buyer" onclick="" tabindex="-1" aria-disabled="true">
                                Export
                            </button>

                            <button class="back-button-for-rfq-buyer" onclick="" tabindex="-1" aria-disabled="true"><span class="fa fa-arrow-left"></span> BACK</button>
                        </div>

                        <div class="dashboard_product_list account_user_deails">
                            <div class="row d-block d-sm-flex justify-content-center justify-content-sm-between"></div>
                            <div class="order_table table-responsive">
                                <table class="table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">NAME</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">EMAIL</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">PHONE NUMBER</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">GST</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">PAN</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">ADDRESS</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">COMPANY NAME</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sellers as $index => $seller)
                                        <tr class="buyer-dashboard-recent-activity-table-outer">
                                            <td class="buyer-dashboard-right-border">{{ $index+1 }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->name}}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->email }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->phone_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->gst_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->pan_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->address }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $seller->company_name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row buyerdashboard-overview-page-rfq-box-webview">
                            <div class="col-lg-12">
                                <div class="buyer-dashboard-icon-section" style="margin-bottom: 30px;">
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'rfq-table')" id="defaultOpen">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-file-signature"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Total RFQ</h5>
                                                <h2 id="totalRfqCount">0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'order-table')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Total Orders</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'products-table')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-coins"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Products</h5>
                                                <h2 id="totalProductCount">0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'order-value-table')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-chart-line"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Order Value</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="buyer-dashboard-icon-section">
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'profit-on-order')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-exclamation-circle"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Profit on Orders</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'total-complaints')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-pencil-alt"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Complaints</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'po')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-file-alt"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>PO</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'invoice')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-file-invoice"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Invoice</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="buyer-dashboard-icon-section-box">
                 <div class="buyer-dashboard-icon-image">
                   <i class="fa fa-box"></i>
                 </div>
                 <div class="buyer-dashboard-icon-heading">
                   <h5>Total Orders</h5>
                   <h2>0</h2>
                 </div>
               </div>

               <div class="buyer-dashboard-icon-section-box">
                 <div class="buyer-dashboard-icon-image">
                   <i class="fa fa-piggy-bank"></i>
                 </div>
                 <div class="buyer-dashboard-icon-heading">
                   <h5>Total Order Value</h5>
                   <h2>0</h2>
                 </div>
               </div> -->
                                </div>
                            </div>
                        </div>

                        <!--RFQ-table-start-->
                        <div class="tabcontent" id="rfq-table">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">DATE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">PRODUCTS</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="rfqTableBody">
                                                <!-- Data will be populated here via AJAX -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--RFQ-table-end-->

                        <!--Order-table-start-->
                        <div class="tabcontent" id="order-table">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">TOTAL ITEMS</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER DATE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">DOD</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">DELIVERY STATUS</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">VIEW PO</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">VIEW INVOICE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID777777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">28-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">30-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">Process</td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit">
                                                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History">
                                                                    <i class="fa fa-history" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID777777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">28-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">30-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">Process</td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit">
                                                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History">
                                                                    <i class="fa fa-history" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID777777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">28-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">30-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">Process</td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit">
                                                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History">
                                                                    <i class="fa fa-history" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID777777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">28-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">30-06-2024</td>
                                                    <td class="buyer-dashboard-right-border">Process</td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="buyer-dashboard-right-border">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-download"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="rfqs-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="buyer-rfqs-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit">
                                                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History">
                                                                    <i class="fa fa-history" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--order-table-end-->

                        <!--products-table-start-->
                        <div class="tabcontent" id="products-table">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">PRODUCTS NAME</th>
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
                                                    <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg" /></td>
                                                    <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES&gt;&gt; Stationery&gt;&gt; ...</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">Dropdown</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                                                    <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg" /></td>
                                                    <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES&gt;&gt; Stationery&gt;&gt; ...</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">Dropdown</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                                                    <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg" /></td>
                                                    <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES&gt;&gt; Stationery&gt;&gt; ...</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">Dropdown</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">Summer Hosiery Government...</td>
                                                    <td class="buyer-dashboard-right-border product-image-buyer-rfq-page"><img src="images/buyer-dashboard/product.jpeg" /></td>
                                                    <td class="buyer-dashboard-right-border">EDUCATION INSTITUTES&gt;&gt; Stationery&gt;&gt; ...</td>
                                                    <td class="buyer-dashboard-right-border">100</td>
                                                    <td class="buyer-dashboard-right-border">Dropdown</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--products-table-end-->

                        <!--total-profit-table-start-->
                        <div class="tabcontent" id="order-value-table">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--total-profit-table-end-->

                        <!--profit-on-order-start-->
                        <div class="tabcontent" id="profit-on-order">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">PROFIT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                    <td class="buyer-dashboard-right-border">1000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                    <td class="buyer-dashboard-right-border">1000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                    <td class="buyer-dashboard-right-border">1000</td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                    <td class="buyer-dashboard-right-border">1000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--profit-on-order-end-->

                        <!--total-complaint-table-start-->
                        <div class="tabcontent" id="total-complaints">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">COMPLAINT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--total-complaint-table-end-->

                        <!--po-table-start-->
                        <div class="tabcontent" id="po">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">PO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--po-complaint-table-end-->

                        <!--invoice-table-start-->
                        <div class="tabcontent" id="invoice">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">INVOICE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">01</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">100000</td>
                                                    <td class="editing_list align-middle">
                                                        <ul>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="all-buyer-detail" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-bs-original-title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li class="list-inline-item mb-1">
                                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" data-bs-original-title="Download" aria-label="Download">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--invoice-table-end-->
                    </div>

                    <!--tablinks for our work section start -->

                    <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }
                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                    </script>

                    <!--tablinks for our work section end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
