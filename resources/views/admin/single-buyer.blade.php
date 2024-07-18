@extends('admin.adminlayouts.app') @section('title', 'All RFQs for Buyer') @section('content')
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
                                        <input type="radio" id="all" name="filter" value="all" checked />
                                        <label class="admin-dashboard-radio-button-label" for="all">All GST</label>
                                    </div>
                                    @foreach($addresses as $index => $address)
                                    <div class="admin-dashboard-radio-button-input">
                                        <input type="radio" id="gst{{ $index + 1 }}" name="filter" value="{{ $index + 1 }}" />
                                        <label class="admin-dashboard-radio-button-label" for="gst{{ $index + 1 }}">GST{{ $index + 1 }}</label>
                                    </div>
                                    @endforeach
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">NAME</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">EMAIL</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">PHONE NUMBER</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">GST</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">PAN</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">ADDRESS</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">STATE</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">RFQ</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER</th>
                                            <th scope="col" class="heading-buyer-dashboard-recent-activity">VALUE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($addresses as $index => $address)
                                        <tr class="buyer-dashboard-recent-activity-table-outer tableadresss" data-gst="{{ $index + 1 }}">
                                            <td class="buyer-dashboard-right-border">{{ $index + 1 }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->contact_name }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->buyer->email }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->buyer->phone_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->gst_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->pan_number }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->location }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->state }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->rfq_status }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->order }}</td>
                                            <td class="buyer-dashboard-right-border">{{ $address->value }}</td>
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
                                                <h2 id="totalRFQCount">0</h2>
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
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'total-value-table')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-coins"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Total Value</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'total-profit-table')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-chart-line"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Total Profit</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buyer-dashboard-icon-section">
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'total-complaints')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-exclamation-circle"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Total Complaints</h5>
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tablinks admin-dashboard-icon-section" onclick="openCity(event, 'remarks')">
                                        <div class="buyer-dashboard-icon-section-box">
                                            <div class="buyer-dashboard-icon-image">
                                                <i class="fa fa-pencil-alt"></i>
                                            </div>
                                            <div class="buyer-dashboard-icon-heading">
                                                <h5>Remarks</h5>
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
                                            <tbody id="rfqListBody">
                                                <!-- RFQ data will be dynamically inserted here -->
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
                        <!--total-value-table-start-->
                        <div class="tabcontent" id="total-value-table">
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
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">02</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">03</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>
                                                <tr class="buyer-dashboard-recent-activity-table-outer">
                                                    <td class="buyer-dashboard-right-border">04</td>
                                                    <td class="buyer-dashboard-right-border">ID77777</td>
                                                    <td class="buyer-dashboard-right-border">RFQ777777</td>
                                                    <td class="buyer-dashboard-right-border">10000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--total-value-table-end-->
                        <!--total-profit-table-start-->
                        <div class="tabcontent" id="total-profit-table">
                            <div class="col-xl-12">
                                <div class="dashboard_product_list account_user_deails">
                                    <div class="order_table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">S. No.</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER ID</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">ORDER VALUE</th>
                                                    <th scope="col" class="heading-buyer-dashboard-recent-activity">COMISSION/PROFIT</th>
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

                    <script>
                        $(document).ready(function () {
                            $("#dataTable").DataTable();
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            $('input[type="radio"]').change(function () {
                                var filterValue = $(this).val();
                                if (filterValue === "all") {
                                    $(".tableadresss").show();
                                } else {
                                    $(".tableadresss").hide();
                                    $('.tableadresss[data-gst="' + filterValue + '"]').show();
                                }
                            });

                            // Function to get the buyer ID from the URL
                            function getBuyerIdFromUrl() {
                                var pathArray = window.location.pathname.split("/");
                                return pathArray[pathArray.length - 1];
                            }

                            // Get the buyer ID
                            var buyerId = getBuyerIdFromUrl();

                            // Fetch the RFQ count
                            $.ajax({
                                url: "/buyer-rfq-count/" + buyerId,
                                method: "GET",
                                dataType: "json",
                                success: function (response) {
                                    $("#totalRFQCount").text(response.count);
                                },
                                error: function (error) {
                                    console.log("Error fetching RFQ count:", error);
                                },
                            });
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            // Function to fetch RFQs for a buyer using AJAX
                            function fetchRFQs(buyerId) {
                                console.log("Fetching RFQs for Buyer ID:", buyerId); // Log buyerId to the console
                                $.ajax({
                                    url: '{{ route("admin.rfq.list", ":buyerId") }}'.replace(":buyerId", buyerId),
                                    method: "GET",
                                    dataType: "json",
                                    success: function (response) {
                                        console.log("Received data:", response); // Log response data to the console
                                        if (response.error) {
                                            alert(response.error);
                                        } else {
                                            displayRFQs(response.data);
                                        }
                                    },
                                    error: function (error) {
                                        console.log("Error fetching RFQs:", error);
                                    },
                                });
                            }

                            // Function to display RFQs in the table
                            function displayRFQs(rfqs) {
                                var tableBody = $("#rfqListBody");
                                tableBody.empty(); // Clear previous entries

                                $.each(rfqs, function (index, rfq) {
                                    var row = `
                   <tr class="buyer-dashboard-recent-activity-table-outer Istrsq">
                       <td class="buyer-dashboard-right-border">${index + 1}</td>
                       <td class="buyer-dashboard-right-border">${rfq.rfq_number ?? ""}</td>
                       <td class="buyer-dashboard-right-border">${rfq.created_at ?? ""}</td>
                       <td class="buyer-dashboard-right-border">${rfq.type_a_ids ? rfq.type_a_ids : ""}</td>
                        <td class="editing_list align-middle">
                              <ul>
                                  <li class="list-inline-item mb-1">
                                     <a href="/singlebuyerrfqview/${rfq.buyer_id}/${rfq.id}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" aria-label="View"><i class="fa fa-eye"></i></a>
                                     </li>
                                 <li class="list-inline-item mb-1">
                                    <a href="/editsinglebuyerrfq/${rfq.buyer_id}/${rfq.id}" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                 </li>
                                 <li class="list-inline-item mb-1">
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="History" data-bs-original-title="History" aria-label="History"><i class="fa fa-history" aria-hidden="true"></i></a>
                                 </li>
                              </ul>
                           </td>
                   </tr>`;
                                    tableBody.append(row);
                                });
                            }

                            // Get the buyer ID from the URL
                            function getBuyerIdFromUrl() {
                                var pathArray = window.location.pathname.split("/");
                                return pathArray[pathArray.length - 1];
                            }

                            // Fetch RFQs for the buyer when the page loads
                            var buyerId = getBuyerIdFromUrl();
                            console.log("Buyer ID from URL:", buyerId); // Log buyer ID to the console
                            fetchRFQs(buyerId);
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            function downloadCSV(csv, filename) {
                                var csvFile;
                                var downloadLink;

                                // CSV file
                                csvFile = new Blob([csv], { type: "text/csv" });

                                // Download link
                                downloadLink = document.createElement("a");

                                // File name
                                downloadLink.download = filename;

                                // Create a link to the file
                                downloadLink.href = window.URL.createObjectURL(csvFile);

                                // Hide download link
                                downloadLink.style.display = "none";

                                // Add the link to DOM
                                document.body.appendChild(downloadLink);

                                // Click download link
                                downloadLink.click();
                            }

                            function exportTableToCSV(filename) {
                                var data = [];
                                var rows = document.querySelectorAll("table#dataTable tr");

                                for (var i = 0; i < rows.length; i++) {
                                    var row = [],
                                        cols = rows[i].querySelectorAll("td, th");

                                    for (var j = 0; j < cols.length; j++) {
                                        row.push(cols[j].innerText);
                                    }

                                    data.push(row.join(","));
                                }

                                // Create a CSV string from the data array
                                var csv = data.join("\n");

                                // Download CSV
                                downloadCSV(csv, filename);
                            }

                            // Event listener for the Export button
                            document.querySelector(".back-button-for-rfq-buyer").addEventListener("click", function () {
                                exportTableToCSV("table_data.csv");
                            });
                        });
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
