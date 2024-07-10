<!-- resources/views/admin/adminlayouts/sidebar.blade.php -->

<div class="dashboard_sidebar_list">
    <div class="sidebar_list_item">
        <a href="{{ url('admin-dashboard') }}" class="items-center -is-active"><i class="fa fa-tachometer mr15"></i> Overview</a>
    </div>
    <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Buyer Management
        <i class="fa fa-caret-down ml10"></i>
    </button>
    <div class="admin-dashboard-sdebar-dropdown-options">
        <a href="{{ url('all-buyer') }}">- All Buyers</a>
    </div>
    <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-file-text mr15"></i> Seller Management
        <i class="fa fa-caret-down ml10"></i>
    </button>
    <div class="admin-dashboard-sdebar-dropdown-options">
        <a href="{{ url('all-seller') }}">- All Sellers</a>
    </div>
    <button class="dropdown-btn-admin-dashboard-sidebar"><i class="fa fa-inr mr15"></i> Product Management
        <i class="fa fa-caret-down ml10"></i>
    </button>
    <div class="admin-dashboard-sdebar-dropdown-options">
        <a href="#">- Category Lable1</a><br>
        <a href="#">- Category Lable2</a><br>
        <a href="#">- Category Lable3</a><br>
        <a href="#">- All Brands</a><br>
        <a href="#">- All Products</a>
    </div>
    <div class="sidebar_list_item">
        <a href="#" class="items-center"><i class="fa fa-box mr15"></i>Commission</a>
    </div>
    <div class="sidebar_list_item">
        <a href="#" class="items-center"><i class="fa fa-box mr15"></i>PO & Invoices List</a>
    </div>
    <div class="sidebar_list_item">
        <a href="#" class="items-center"><i class="fa fa-bell mr15"></i>Notification</a>
    </div>
    <div class="sidebar_list_item">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdown = document.getElementsByClassName("dropdown-btn-admin-dashboard-sidebar");
        for (var i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        }
    });
</script>
