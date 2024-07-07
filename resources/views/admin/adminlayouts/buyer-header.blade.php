<div class="dashboardnew-header-outer">
    <!-- header middle -->
     <div class="header_middle pt20 pb20 dn-992 dashboard-newheader-outer">
       <div class="container">
         <div class="row">
           <div class="col-lg-2 col-xxl-2">
             <div class="header_top_logo_home1">
               <div class="logo"><img src="images/images/logo.jpg"></div>
             </div>
           </div>
           <div class="col-lg-5 col-xxl-6">
             <div class="header_middle_advnc_search">
               <div class="search_form_wrapper">
                 <div class="row">
                   <div class="col-auto pr0">
                     <div class="actegory">
                       <select class="selectpicker" id="selectbox_alCategory">
                         <option value="AllCategory">All Categories</option>
                         <option value="Today’sHotDeals">Today’s Hot Deals</option>
                         <option value="Babies&Moms">Babies & Moms</option>
                         <option value="Clothing&Accessories">Clothing & Accessories</option>
                         <option value="Electronics">Electronics</option>
                         <option value="Grocery&Market">Grocery & Market</option>
                         <option value="Health&Beauty">Health & Beauty</option>
                         <option value="Home&Kitchen">Home & Kitchen</option>
                         <option value="Home&Furniture">Home & Furniture</option>
                         <option value="Health&Beauty">Health & Beauty</option>
                         <option value="Sport&Outdoor">Sport & Outdoor</option>
                         <option value="Toy&VideoGames">Toy & Video Games</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-auto p0">
                     <div class="top-search">
                       <form action="#" method="get" class="form-search" accept-charset="utf-8">
                         <div class="box-search pre_line">
                           <input class="form_control" type="text" name="search" placeholder="Search products…">
                           <div class="search-suggestions">
                             <div class="box-suggestions">
                               <ul>
                                 <li>
                                   <div class="thumb">
                                     <img src="images/listing/sf1.png" alt="sf1.png">
                                   </div>
                                   <div class="info-product">
                                     <div class="item_title">Sony DJ Headphones 4334205465, Black, Standard</div>
                                     <div class="price"><span class="sale">$32.50</span></div>
                                   </div>
                                 </li>
                               </ul>
                             </div><!-- /.box-suggestions -->
                           </div><!-- /.search-suggestions -->
                         </div><!-- /.box-search -->
                       </form><!-- /.form-search -->
                     </div><!-- /.top-search -->
                   </div>
                   <div class="col-auto p0">
                     <div class="advscrh_frm_btn">
                       <button type="submit" class="btn search-btn"><span class="color-white"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-lg-5 col-xxl-4 pr0-lg" style="padding-right: 0px;">
             <div class="hm_log_fav_cart_widget justify-content-center">
               <div class="wrapper">
                 <ul class="mb0 dashoard-buyer-name-outer">
                   <!-- <li class="list-inline-item">
                     <a class="header_top_iconbox" href="page-account-wishlist.html">
                       <div class="d-block d-md-flex">
                         <div class="icon"><span>
                           <i class='far fa-heart'></i>
                         </span></div>
                         <div class="details">
                           <p class="subtitle">Wishlist</p>
                           <h5 class="title">My Items</h5>
                         </div>
                       </div>
                     </a>
                   </li> -->
                   <li class="list-inline-item">
                     <a class="header_top_iconbox" href="#" data-bs-toggle="dropdown">
                       <div class="d-block d-md-flex" style="align-items: center;">
                         <div class="icon">
                           
                           <!-- <img src="{{ asset('public/assets_new/images/buyer-dashboard/' . @$udata->profile_img) }}">
                      
                           <img src="{{ asset('public/assets_new/images/buyer-dashboard/dummy-profilee.jpg') }}"> -->
                           <img src="images/buyer-dashboard/client.png">
                         
                                                 </div>
                         <div class="details">
                           <p class="subtitle">Welcome</p>
                           <h5 class="title"><!-- {{Session::get('user_name')}} -->John Mark</h5>
                         </div>
                       </div>
                     </a>
                     <div class="dropdown-menu">
                   <div class="user_setting_content">
                         <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-home mr10"></i>Logout</a>
                         <a class="dropdown-item" href="#"><i class="fa fa-home mr10"></i>Settings</a>
                         
                         <select class="form-control" name="company">
                           <option value="" selected="" disabled="">Select Company</option>
                           <option value="individual">Individual</option>
                          
                             {{-- <option value="{{ $udata->company_name }}">{{ $udata->company_name }}</option>
                            
                                 <option value="{{ $clist->company_name }}">{{ $clist->company_name }}</option> --}}
               
                         </select>
               
                       </div>
                     </div>
                     <div class="dropdown-option-homepage-none">
                       <div class="dropdown-option-homepage">
                         
                       </div>
                     </div>
                   </li>
   
                    
                    <!-- <li class="list-inline-item">
                     <a class="header_top_iconbox signin-filter-btn" href="login.html">
                       <div class="d-block d-md-flex" style="align-items: center;">
                         <div class="icon">
                         
                           <img src="{{ asset('public/assets_new/images/buyer-dashboard/client.png') }}">
                         </div>
                         <div class="details">
                           <p class="subtitle">Welcome</p>
                           <h5 class="title">John Mark</h5>
                         </div>
                       </div>
                     </a>
   
                     <div class="dropdown-menu">
                   <div class="user_setting_content">
                         <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-home mr10"></i>Logout</a>
                         <a class="dropdown-item" href="#"><i class="fa fa-home mr10"></i>Setting</a>
                       </div>
                     </div>
                     
                   </li>
    -->
                 <!--  <li class="user_setting">
     <div class="dropdown">
       <a class="btn dropdown-toggle buyer-dashboard-profile-image-outer" href="#" data-bs-toggle="dropdown">
         <img src="images/buyer-dashboard/client.png" class="buyer-dashboard-profile-image" alt="user.png">
         <h5><b>Mark John</b> <br> Edit Profile</h5>
       </a>
       
       <div class="dropdown-menu dropdown-in-option-outer">
         <div class="user_setting_content">
           <select class="form-control dropdown-in-option" onchange="if (this.value) window.location.href=this.value" size="3">
             <option class="dropdown-in-option-margin" value="#">Login</option>
             <option class="dropdown-in-option-margin" value="#">Logout</option>
             <option class="dropdown-in-option-margin" value="#">Profile</option>
           </select>
         </div>
       </div>
     </div>
   </li> -->
   
   
                 <!--   <li class="list-inline-item">
                    
                       <div class="dropdown-company-name-buyer-dashboard">
               <button class="dropdown-toggle company-dropdown-buyer-dashboard" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Company 
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#">Company One</a>
                   <a class="dropdown-item" href="#"> Company Two</a>
                   <a class="dropdown-item buyer-create-company-button-header" href="#"> Create A New Company</a>
               </div>
           </div>
                  
                   </li>  -->
   
                   <li class="list-inline-item">
       <div class="dropdown-company-name-buyer-dashboard">
           <select id="companySelect" class="company-dropdown-buyer-dashboard">
               <option value="" selected="" disabled="">Select Company</option>
                           <option value=""></option>
                                   <option value="create_new_company" class="buyer-create-company-button-header">Add GST</option>
                       </select>
       </div>
   </li>
   
                   <!-- <li class="list-inline-item">
                     <a class="header_top_iconbox cart-filter-btn" href="#">
                       <div class="d-block d-md-flex">
                         <div class="icon"><span><img src="images/icons/flaticon-shopping-cart-white.svg" alt=""></span><span class="badge">2</span></div>
                         <div class="details">
                           <p class="subtitle">₹200.99</p>
                           <h5 class="title">Total</h5>
                         </div>
                       </div>
                     </a>
                   </li> -->
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Main Header Nav -->
     <header class="header-nav menu_style_home_one main-menu">
       <!-- Ace Responsive Menu -->
       <nav class="posr"> 
         <div class="container posr menu_bdrt1"> 
           <!-- Menu Toggle btn-->
           <div class="menu-toggle">
             <button type="button" id="menu-btn">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
           </div>
           <div class="posr logo1 home1_style">
             <div id="mega-menu">
               <a class="btn-mega" href="#">
                 <img class="me-2" src="images/desktop-nav-menu-white.svg" alt="Desktop Menu Icon">
                 <span class="fw500 fz16 color-white vam">Browse Categories</span>
               </a>
               <ul class="menu">
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class="fa fa-search" aria-hidden="true"></i></span>
                     <span class="menu-title">Today’s Hot Deals</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class="fa fa-cutlery"></i></span>
                     <span class="menu-title">Home & Kitchen</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-bed'></i></span>
                     <span class="menu-title">Home & Furniture</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-desktop' aria-hidden="true"></i></span>
                     <span class="menu-title">Electronics</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-tshirt' aria-hidden="true"></i></span>
                     <span class="menu-title">Clothing & Accessories</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-h-square' aria-hidden="true"></i></span>
                     <span class="menu-title">Health & Beauty</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='far fa-futbol' aria-hidden="true"></i></span>
                     <span class="menu-title">Sport & Outdoor</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                     <span class="menu-title">Grocery & Market</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                        
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-gamepad' aria-hidden="true"></i></span>
                     <span class="menu-title">Toy & Video Games</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
               
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
                 <li>
                   <a class="dropdown" href="#">
                     <span class="menu-icn"><i class='fas fa-baby' aria-hidden="true"></i></span>
                     <span class="menu-title">Babies & Moms</span>
                   </a>
                   <div class="drop-menu">
                     <div class="one-third">
                       <div class="cat-title">Electronics</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All</a></li>
                       </ul>
                       <div class="cat-title">TV & Video</div>
                       <ul class="mb0">
                         <li><a href="#">Shop all TVs</a></li>
                         <li><a href="#">TVs by Size</a></li>
                         <li><a href="#">Smart TVs</a></li>
                         <li><a href="#">Roku TVs</a></li>
                         <li><a href="#">Streaming</a></li>
                         <li><a href="#">TV Mounts & Accessories</a></li>
                         <li><a href="#">DVD & Blu-Ray Players</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Computers</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Computers</a></li>
                         <li><a href="#">Laptops</a></li>
                         <li><a href="#">Chromebook</a></li>
                         <li><a href="#">PC Gaming</a></li>
                         <li><a href="#">Desktops</a></li>
                         <li><a href="#">Monitors</a></li>
                         <li><a href="#">Networking</a></li>
                         <li><a href="#">Computer Accessories</a></li>
                         <li><a href="#">Computer Components</a></li>
                         <li><a href="#">Tax Software</a></li>
                         <li><a href="#">Computer Software</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Cell Phones</div>
                       <ul class="mb0">
                         <li><a href="#">Shop All Cell Phones</a></li>
                         <li><a href="#">Wireless Deals</a></li>
                         <li><a href="#">5G Phones</a></li>
                         <li><a href="#">iPhone</a></li>
                         <li><a href="#">Galaxy Phones</a></li>
                         <li><a href="#">Phone Chargers & Power Banks</a></li>
                         <li><a href="#">Grips & Phone Stands</a></li>
                         <li><a href="#">Phone Cables</a></li>
                         <li><a href="#">Car Mounts</a></li>
                         <li><a href="#">iPhone Accessories</a></li>
                         <li><a href="#">Cell Phone Accessory Deals</a></li>
                       </ul>
                     </div>
                     <div class="one-third">
                       <div class="cat-title">Smart Home</div>
                       <ul class="mb20">
                         <li><a href="#">Shop All Smart Home</a></li>
                         <li><a href="#">Smart Assistants & Hubs</a></li>
                         <li><a href="#">Smart Security</a></li>
                         <li><a href="#">Smart Energy & Lighting</a></li>
                       </ul>
                       <div class="cat-title">Photo Services</div>
                       <ul class="mb0">
                         <li><a href="#">All Photo Services</a></li>
                         <li><a href="#">Same Day Services</a></li>
                         <li><a href="#">Photo Cards</a></li>
                         <li><a href="#">Photo Gifts</a></li>
                       </ul>
                     </div>
                   </div>
                 </li>
               </ul>
             </div>
           </div>
           <!-- Responsive Menu Structure-->
           <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style="horizontal">
             <li class="visible_list"> <a href="index"><span class="title">Home</span></a>
             </li>
             <li class="megamenu_style"> <a href="#"><span class="title">Shop</span></a>
             </li>
             <li class="visible_list"> <a href="about-us"><span class="title">About Us</span></a>
             </li>          
             <li class="visible_list"> <a href="blog"><span class="title">Blog</span></a>
             </li>
             <li class="visible_list"> <a href="contact-us"><span class="title">Contact Us</span></a>
             </li>
           </ul>
           <ul id="respMenu2" class="ace-responsive-menu widget_menu_home2 wa" data-menu-style="horizontal" style="right: 0;">
           <li class="list-inline-item list_c"><a class="become-vendor" href="become-vendor">Raise A New RFQ</a></li>
           </ul>
         </div>
       </nav>
     </header>
   
       <!--for-mobileview-header-start-->
      
       <!-- Body Ovelay Behind Sidebar -->
   
     <!--<div class="hiddenbar-body-ovelay"></div>-->
   
     <!-- Sign In Hiddn SideBar -->
   
     <div class="signin-hidden-sbar">
   
       <div class="hsidebar-header">
   
         <div class="sidebar-close-icon"><span><i class="fa fa-close"></i></span></div>
   
         <h4 class="title">Sign-In</h4>
   
       </div>
   
       <div class="hsidebar-content">
   
         <div class="log_reg_form sidebar_area">
   
           <div class="login_form">
   
             <form action="#">
   
               <div class="mb-2 mr-sm-2">
   
                 <label class="form-label">Username or email address</label>
   
                 <input type="text" class="form-control" placeholder="Ali Tufan">
   
               </div>
   
               <div class="form-group mb5">
   
                 <label class="form-label">Password</label>
   
                 <input type="password" class="form-control" placeholder="Password">
   
               </div>
   
               <div class="custom-control custom-checkbox">
   
                 <input type="checkbox" class="custom-control-input" id="exampleCheck3">
   
                 <label class="custom-control-label" for="exampleCheck3">Remember me</label>
   
                 <a class="btn-fpswd float-end" href="#">Lost your password?</a>
   
               </div>
   
               <button type="submit" class="btn btn-log btn-thm mt20">Login</button>
   
               <p class="text-center mb25 mt10">Don't have an account? <a class="signup-filter-btn" href="#">Create account</a></p>
   
               <div class="hr_content">
   
                 <hr>
   
                 <span class="hr_top_text">or</span>
   
               </div>
   
               <ul class="login_with_social text-center mt30 mb0">
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
   
               </ul>
   
             </form>
   
           </div>
   
         </div>
   
       </div>
   
     </div>
   
     <!--End Sign In Hiddn SideBar -->
   
     <!-- Your Cart Hiddn SideBar -->
   
    <!-- <div class="cart-hidden-sbar">
   
       <div class="hsidebar-header">
   
         <div class="sidebar-close-icon"><span><i class="fa fa-close"></i></span></div>
   
         <h4 class="title">Login / Register</h4>
   
       </div>
   
   
   
       <div class="hsidebar-content">
   
         <div class="log_fav_cart_widget hsidebar_home_page">
   
           <div class="wrapper">
   
             <ul class="cart login-heading">
   
             <li><a><i class="fa fa-user" aria-hidden="true"></i>Login Details</a></li>
   
             </ul>
   
             <ul class="cart login-btns">
   
             <li><a href="/login/seller"><i class="fa fa-sign-in"></i>Login As A Seller</a></li>
   
             <li><a href="/login"><i class="fa fa-sign-in"></i>Login As A Buyer</a></li>
   
             </ul>
   
            </div>
   
   
   
            <div class="wrapper">
   
             <ul class="cart login-heading">
   
             <li><a><i class="fa fa-user" aria-hidden="true"></i>Register Details</a></li>
   
             </ul>
   
             <ul class="cart login-btns">
   
             <li><a href="/register/seller"><i class="fa fa-sign-in"></i>Register As A Seller</a></li>
   
             <li><a href="/register/buyer"><i class="fa fa-sign-in"></i>Register As A Buyer</a></li>
   
             </ul>
   
            </div>
   
   
   
           </div>
   
         </div>-->
   <!-- <div class="cart-hidden-sbar">
       <div class="hsidebar-header">
         <div class="sidebar-close-icon"><span><i class="fa fa-close"></i></span></div>
         <h4 class="title">Your Cart</h4>
       </div>
       <div class="hsidebar-content">
         <div class="log_fav_cart_widget hsidebar_home_page">
           <div class="wrapper">
             <ul class="cart">
               <li class="list-inline-item">
                 <ul class="dropdown_content">
                   <li class="list_content">
                     <div>
                       <img class="float-start mt10" src="{{asset('public/assets_new/images/shop/s1.png')}}" alt="75x75">
                       <p>Apple MacBook Pro with Apple M1 Chip</p>
                       <div class="cart_btn home_page_sidebar mt10">
                         <div class="quantity-block home_page_sidebar">
                           <button class="quantity-arrow-minus home_page_sidebar"><img src="{{asset('public/assets_new/images/icons/minus.svg')}}" alt=""></button>
                           <input class="quantity-num home_page_sidebar" type="number" value="3">
                           <button class="quantity-arrow-plus home_page_sidebar"> <img src="{{ asset('public/assets_new/images/icons/plus.svg') }}" alt="" style="width: 10px;"> </button>
                         </div>
                         <span class="home_page_sidebar price">$3.399</span>
                       </div>
                       <span class="close_icon"><i class="fa fa-close"></i></span>
                     </div>
                   </li>
                   <li class="list_content">
                     <div>
                       <img class="float-start mt10" src="{{asset('public/assets_new/images/shop/s2.png')}}" alt="75x75">
                       <p>Apple MacBook Pro with Apple M1 Chip</p>
                       <div class="cart_btn home_page_sidebar mt10">
                         <div class="quantity-block home_page_sidebar">
                           <button class="quantity-arrow-minus2 home_page_sidebar"><img src="{{asset('public/assets_new/images/icons/minus.svg')}}" alt=""></button>
                           <input class="quantity-num2 home_page_sidebar" type="number" value="3">
                           <button class="quantity-arrow-plus2 home_page_sidebar"> <img src="{{ asset('public/assets_new/images/icons/plus.svg') }}" alt="" style="width: 10px;"></button>
                         </div>
                         <span class="home_page_sidebar price">$3.399</span>
                       </div>
                       <span class="close_icon"><i class="fa fa-close"></i></span>
                     </div>
                   </li>
                   <li class="list_content_total_price">
                     <h5>Total: <span class="total_price float-end">$6.225.98</span></h5>
                   </li>
                 </ul>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <div class="hsidebar_footer_content">
         <div class="list_last_content">
           <div class="lc">
             <p class="para">Buy $98.00 more to enjoy FREE Shipping</p>
             <div class="uilayout_range home1_style">
               <div class="sidebar_range_slider mb30 mt25">
                 <input class="range-example-km" value="80" type="text">
               </div>
             </div>
             <a href="#" class="cart_btns btn btn-white">View Cart</a>
             <a href="#" class="checkout_btns btn btn-thm">Get a quote</a>
           </div>
         </div>
       </div>
     </div> -->
   
     <!--End Your Cart Hiddn SideBar -->
   
     <!-- Sign Up Hiddn SideBar -->
   
     <div class="signup-hidden-sbar">
   
       <div class="hsidebar-header">
   
         <div class="sidebar-close-icon"><i class="fa fa-close"></i></div>
   
         <h4 class="title">Create Your Account</h4>
   
       </div>
   
       <div class="hsidebar-content">
   
         <div class="log_reg_form sidebar_area">
   
           <div class="sign_up_form">
   
             <form action="#">
   
               <div class="form-group">
   
                 <label class="form-label">Your Name</label>
   
                 <input type="text" class="form-control" placeholder="Ali Tufan">
   
               </div>
   
               <div class="form-group">
   
                 <label class="form-label">Username</label>
   
                 <input type="text" class="form-control" placeholder="alitfn">
   
               </div>
   
               <div class="form-group">
   
                 <label class="form-label">Your Email</label>
   
                 <input type="email" class="form-control" placeholder="abc@gmail.com">
   
               </div>
   
               <div class="form-group mb20">
   
                 <label class="form-label">Password</label>
   
                 <input type="password" class="form-control" placeholder="******************">
   
               </div>
   
               <button type="submit" class="btn btn-signup btn-thm">Create Account</button>
   
               <p class="text-center mb25 mt10">Already have an account? <a href="login">Sign in</a></p>
   
               <div class="hr_content">
   
                 <hr>
   
                 <span class="hr_top_text">or</span>
   
               </div>
   
               <ul class="login_with_social text-center mt30 mb0">
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
   
                 <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
   
               </ul>
   
             </form>
   
           </div>
   
         </div>
   
       </div>
   
     </div>
   
     <!--End Sign Up Hiddn SideBar -->
   
     
   
     <!-- Main Header Nav For Mobile -->
   
     <div id="page" class="stylehome1">
   
       <div class="mobile-menu">
   
         <div class="header stylehome1">
   
           <div class="menu_and_widgets">
   
             <div class="mobile_menu_bar float-start">
   
               <a class="menubar" href="#menu"><span></span></a>
   
               <a class="mobile_logo" href="/"><span class="text-thm">
                 <img src="images/images/logo.jpg">
               </span></a>
   
             </div>
   
             <div class="mobile_menu_widget_icons">
   
               <ul class="cart mt15">
                    
                    <li class="list-inline-item">
                     <a class="header_top_iconbox" href="#" data-bs-toggle="dropdown">
                       <div class="d-block d-md-flex" style="align-items: center;">
                         <div class="icon">
                           <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                          <!--  @if(!empty($uid) && !empty($udata->profile_img) )
                           <img src="{{ asset('public/assets_new/images/buyer-dashboard/' . @$udata->profile_img) }}">
                           @else
                           <img src="{{ asset('public/assets_new/images/buyer-dashboard/dummy-profilee.jpg') }}">
                           @endif -->
                           <img src="images/buyer-dashboard/client.png">
                         </div>
                         <!--<div class="details">
                           <p class="subtitle">Welcome</p>
                           <h5 class="title">{{Session::get('user_name')}}</h5>
                         </div>-->
                       </div>
                     </a>
   
                     <div class="dropdown-menu">
                   <div class="user_setting_content">
                         <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-home mr10"></i>Logout</a>
                         <a class="dropdown-item" href="#"><i class="fa fa-home mr10"></i>Settings</a>
                       </div>
                     </div>
                     
                   </li>
   
                 <!--<li class="list-inline-item">
                      <a class="header_top_iconbox cart-filter-btn" href="#">
                       <div class="d-block d-md-flex">
                         <div class="icon"><span><img src="https://justprocure.com/public/assets_new/images/icons/flaticon-shopping-cart-white.svg" alt=""></span><span class="badge">2</span></div>
                       </div>
                     </a>
                 </li>-->
   
                <!-- <li class="list-inline-item">
   
                   <a class="cart_btn" href="/login"><span><i class="fa fa-user" aria-hidden="true"></i></span></a>
   
                 </li>-->
   
               <!--  <li class="list-inline-item">
   
                 <a class="header_top_iconbox" href="#">
                       <div class="d-block d-md-flex">
                         <div class="icon"><span><i class="fa fa-heart" aria-hidden="true"></i></span></div>
                       </div>
                     </a>
   
                 </li>-->
   
               </ul>
   
             </div>
   
           </div>
   
           <div class="mobile_menu_search_widget">
   
             <div class="header_middle_advnc_search">
   
               <div class="container search_form_wrapper">
   
                 <div class="row">
   
                   <div>
   
                     <div class="top-search text-start">
   
                       <form action="#" method="get" class="form-search" accept-charset="utf-8">
   
                         <div class="box-search">
   
                           <input class="form_control search_products" type="text" name="search" placeholder="Search products…">
   
                     <div id="search-results"></div>
   
                           <div class="search-suggestions text-start">
   
                            <!-- <div class="box-suggestions">
   
                               <ul>
   
                                 <li>
   
                                   <div class="thumb">
   
                                     <img src="images/listing/sf1.png" alt="sf1.png">
   
                                   </div>
   
                                   <div class="info-product">
   
                                     <div class="item_title">Sony DJ Headphones 4334205465, Black, Standard</div>
   
                                     <div class="price"><span class="sale">$32.50</span></div>
   
                                   </div>
   
                                 </li>
   
                                 <li>
   
                                   <div class="thumb">
   
                                     <img src="images/listing/sf2.png" alt="sf2.png">
   
                                   </div>
   
                                   <div class="info-product">
   
                                     <div class="item_title">Sony E-Mount Full Frame FE 24-70mm f/2.8 GM II G Master</div>
   
                                     <div class="price"><span class="sale">$32.50</span></div>
   
                                   </div>
   
                                 </li>
   
                                 <li>
   
                                   <div class="thumb">
   
                                     <img src="images/listing/sf3.png" alt="sf3.png">
   
                                   </div>
   
                                   <div class="info-product">
   
                                     <div class="item_title">TV 55" 4-Series 4K UHD smart TV</div>
   
                                     <div class="price"><span class="sale">$32.50</span></div>
   
                                   </div>
   
                                 </li>
   
                                 <li>
   
                                   <div class="thumb">
   
                                     <img src="images/listing/sf4.png" alt="sf4.png">
   
                                   </div>
   
                                   <div class="info-product">
   
                                     <div class="item_title">Hugolog Baby Monitor, 2K Security Camera, PT Cameras for</div>
   
                                     <div class="price"><span class="sale">$32.50</span></div>
   
                                   </div>
   
                                 </li>
   
                                 <li>
   
                                   <div class="thumb">
   
                                     <img src="images/listing/sf5.png" alt="sf5.png">
   
                                   </div>
   
                                   <div class="info-product">
   
                                     <div class="item_title">Apple iPhone Retina 6s Plus 64GB</div>
   
                                     <div class="price"><span class="sale">$32.50</span></div>
   
                                   </div>
   
                                 </li>
   
                               </ul>
   
                             </div>--><!-- /.box-suggestions -->
   
                           </div>
   
                         </div>
   
                       </form>
   
                     </div>
   
                   </div>
   
                   <div>
   
                     <div class="advscrh_frm_btn">
   
                       <button type="submit" class="btn search-btn color-white"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
   
                     </div>
   
                   </div>
   
                 </div>
   
               </div>
   
             </div>
   
           </div>
   
           <div class="posr"><div class="mobile_menu_close_btn"><i class="fa fa-close"></i></div></div>
   
         </div>
   
       </div>
   
       <!-- /.mobile-menu -->
   
       <nav id="menu" class="stylehome1">
   
         <ul>
   
           <li>
   
             <a href="/">Home</a>
   
           </li>
   
           <li><a href="/shop">Shop</a>
   
               </li>
   
               <li><a href="/aboutus">About Us</a>
   
               </li>
   
                <li><a href="blog">Blog</a>
   
                </li>
   
                 <li><a href="/contact">Contact Us</a>
   
                 </li>
   
   
   
                  <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">Departments</li>
   
           <li><span><i class="fa fa-cutlery mr20"></i>Education Institutes</span>
   
             <ul>
   
              <li><a href="https://justprocure.com/product/details/half-sleeves-plain-school-polo-t-shirt">T-Shirt</a></li>
   
               <li><a href="https://justprocure.com/product/details/summer-hosiery-government-school-dress">Govt. School Uniform</a></li>
   
                <li><a href="https://justprocure.com/product/details/blue-pp-satin-plastic-school-belt-feature-:-powerful-pattern">Blue School Belt</a></li>
   
                <li><a href="https://justprocure.com/product/details/packmate-blue-recycled-paper-ball-pens-(pack-of-5)">Recycled Ball Pens</a></li>
   
               <li><a href="https://justprocure.com/product/details/falcon-secure-display-book-with-punchless-clip">Falcon Display Book</a></li>
   
              <li><a href="https://justprocure.com/product/details/cartoon-magnetic-pencil-box-with-built-in-calculator-combo-set-of-moti-pencil-key-chain-geometry-scale-fruit-eraser-and-smiley-sticker">Cartoon Pencil Box</a></li>
   
              <li><a href="https://justprocure.com/product/details/infinizy-basketball">Infinizy Basketball</a></li>
   
             <li><a href="https://justprocure.com/product/details/vicky-lite-blue-poplar-willow-cricket-tennis-bat-with-hotshot-tennis-ball">Lite Cricket Set</a></li>
   
              <li><a href="https://justprocure.com/product/details/forgesy-6-pcs-yellow-rubber-light-weight-cricket-tennis-ball-set">Yellow Cricket Ball Set</a></li>
   
             </ul>
   
           </li>
   
           <li><span><i class='fas fa-tshirt mr20'></i>Hospitality</span>
   
             <ul>
   
              <li><a href="https://justprocure.com/product/details/250ml-onion-shampoo">Onion Shampoo</a></li>
   
                         <li><a href="https://justprocure.com/product/details/dettol-5l-liquid-handwash-can">Dettol Liquid Handwash</a></li>
   
                         <li><a href="https://justprocure.com/product/details/1l-strawberry-liquid-hand-wash-refill">Strawberry Hand Wash Refill</a></li>
   
             </ul>
   
           </li>
   
           <li><span><i class='fas fa-h-square mr20'></i>Medical Equipment</span>
   
             <ul>
   
              <li><a href="https://justprocure.com/product/details/stainless-steel-medical-tray">Medical Stainless Tray</a></li>
   
            <li><a href="https://justprocure.com/product/details/hiv-kit-with-medical-pouch">HIV Testing Kit</a></li>
   
            <li><a href="https://justprocure.com/product/details/stainless-steel-suturing-thread-medical-equipment-kit">Stainless Steel Suturing Kit</a></li>
   
            <li><a href="https://justprocure.com/product/details/25mm-universal-protaper-finishing-hand-file">Universal Hand File</a></li>
   
            <li><a href="https://justprocure.com/product/details/oracura-oc150-pro-smart-white-water-flosser">Oracura Pro Water Flosser</a></li>
   
            <li><a href="https://justprocure.com/product/details/compact-plus-green-rechargeable-water-flosser-with-2-years-warranty">Green Water Flosser</a></li>
   
             <li><a href="https://justprocure.com/product/details/fitness-power-tower-for-pull-up-bar-chinning-push-ups">Fitness Power Tower</a></li>
   
            <li><a href="https://justprocure.com/product/details/iron-silver-fitness-pump-toner-workout-training-machine">Fitness Pump Toner</a></li>
   
            <li><a href="https://justprocure.com/product/details/steel-black-fitness-gym-cable-crossover">Black Gym Cable Crossover</a></li>
   
            <li><a href="https://justprocure.com/product/details/microtips-for-micropipette">Microtips for Micropipette</a></li>
   
            <li><a href="https://justprocure.com/product/details/15ml-borosilicate-test-tube-with-screw-cap">15ml Test Tube</a></li>
   
            <li><a href="https://justprocure.com/product/details/500pcs-cap-plastic-test-tube">Test Tube Set</a></li>
   
            <li><a href="https://justprocure.com/product/details/tubes-a-medico-clinical-centrifuge">Medico/Clinical Centrifuge</a></li>
   
            <li><a href="https://justprocure.com/product/details/bench-top-doctor-centrifuge-with-high-speed-cooper-motor">Benchtop Doctor Centrifuge</a></li>
   
            <li><a href="https://justprocure.com/product/details/iron-leppro-hospital-trolley">Iron Hospital Trolley</a></li>  
   
            <li><a href="https://justprocure.com/product/details/stainless-steel-disposable-surgical-skin-razor-set-for-personal-hygiene">Disposable Surgical Razor Set</a></li>
   
           <li><a href="https://justprocure.com/product/details/dettol-250ml-no-touch-handwash-system">Dettol No Touch Handwash</a></li>
   
           <li><a href="https://justprocure.com/product/details/250ml-neem-tulsi-honey-pealised-type-liquid-hand-wash">Neem, Tulsi & Honey Hand Wash</a></li>
   
             </ul>
   
           </li>
   
           <li><span><i class='fas fa-bed mr20'></i>Corporate & Office</span>
   
             <ul>
   
                <li><a href="https://justprocure.com/product/details/scout-jute-cover-business-diary">Scout Business Diary</a></li>
   
                <li><a href="https://justprocure.com/product/details/stick-plastic-black-ball-pen">Black Plastic Pen</a></li>
   
                <li><a href="https://justprocure.com/product/details/desk-mdf-engineering-wood-black-pen-holder-with-clock-calendar">Desk Pen Holder</a></li>
   
                 <li><a href="https://justprocure.com/product/details/white-medium-glossy-finish-wood-table">White Glossy Table</a></li>
   
                <li><a href="https://justprocure.com/product/details/wood-honey-ambient-study-table">Honey Study Table</a></li>
   
                <li><a href="https://justprocure.com/product/details/duly-painted-double-door-steel-almirah">Painted Steel Almirah</a></li>
   
                <li><a href="https://justprocure.com/product/details/litre-blue-virgin-plastic-dustbin">Blue Plastic Dustbin</a></li>
   
                <li><a href="https://justprocure.com/product/details/disinfectant-toilet-cleaner">Toilet Disinfectant</a></li>
   
                <li><a href="https://justprocure.com/product/details/wet-dry-vacuum-cleaner">Wet/Dry Vacuum</a></li>
   
             </ul>
   
           </li>
   
           <li><span><i class='fas fa-desktop mr20'></i>Construction</span>
   
             <ul>
   
               <li><a href="https://justprocure.com/product/details/3-pcs-chrome-vanadium-steel-plumbing-tool-set">Plumbing Tool Set</a></li>
   
               <li><a href="https://justprocure.com/product/details/multicolour-heavy-duty-sg-iron-drill-clamping-tool">Multicolor Drill Clamp</a></li>
   
                <li><a href="https://justprocure.com/product/details/3-4-inch-straight-turning-tool-bit-holder">Straight Tool Bit Holder</a></li>
   
                <li><a href="https://justprocure.com/product/details/bench-drill-machine">Bench Drill Machine</a></li>
   
                <li><a href="https://justprocure.com/product/details/electric-variable-speed-reversible-drill-machine">Variable Speed Drill</a></li>
   
                <li><a href="https://justprocure.com/product/details/reversible-impact-drill-machine">Reversible Impact Drill</a></li>
   
                <li><a href="https://justprocure.com/product/details/650w-electric-portable-paint-sprayer-machine">Portable Paint Sprayer</a></li>
   
                <li><a href="https://justprocure.com/product/details/abs-blue-orange-corded-paint-spray-machine">Blue & Orange Paint Sprayer</a></li>
   
                <li><a href="https://justprocure.com/product/details/20l-white-ace-exterior-emulsion">White Exterior Emulsion</a></li>
   
             </ul>
   
           </li>
   
           <!--<li><a class="tdu text-thm1 text-capitalize" href="#">See More <i class="far fa-angle-down"></i></a></li>-->
   
           <!-- Only for Mobile View -->
   
         </ul>
   
   
   
             </ul>
   
           </li>
   
       </nav>
   
     </div>
   
   
     <!--for-mobileview-header-end-->
   
     </div>
   
   <body class="full-page-bg-buyer-dashboard" data-spy="scroll">
   
   <div class="wrapper">