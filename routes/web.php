<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\BuyerRegistrationController;
use App\Http\Controllers\SellerRegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Commission;
use App\Http\Controllers\invoice;



// admin registration
Route::prefix('admin')->group(function () {
    Route::get('/register', [AdminRegisterController::class, 'show'])->name('admin.register.form');
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('admin.register');
});

// buyer registration
Route::prefix('buyer')->group(function () {
    Route::get('/register', [BuyerRegistrationController::class, 'show'])->name('buyer.register.form');
    Route::post('/register', [BuyerRegistrationController::class, 'register'])->name('buyer.register');
});

// seller registration
Route::prefix('seller')->group(function () {
    Route::get('/register', [SellerRegistrationController::class, 'show'])->name('seller.register.form');
    Route::post('/register', [SellerRegistrationController::class, 'register'])->name('seller.register');
});

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

Route::middleware('admin.auth')->group(function () {
    Route::get('/', function () {
        return view('admin.admin-dashboard');
    })->name('admin.home');
    
   
    // admin-buyer section 
    Route::get('buyers/{id}/edit', [BuyerController::class, 'edit'])->name('admin.buyers.edit');
    Route::put('buyers/{id}', [BuyerController::class, 'update'])->name('admin.buyers.update');
    Route::delete('buyers/{id}', [BuyerController::class, 'destroy'])->name('admin.buyers.destroy');
    Route::get('buyers-count', [BuyerController::class, 'count'])->name('admin.buyers.count');
    Route::get('all-buyers', [BuyerController::class, 'allBuyersdata'])->name('admin.buyers.all');

    Route::get('/rfq-count', [BuyerController::class, 'rfqcount'])->name('admin.allrfqs');
    Route::get('/all-gst/{id}', [BuyerController::class, 'getAddressByUserId'])->name('admin.addresses.byUserId');
    Route::get('/buyer-rfq-count/{buyerId}', [BuyerController::class, 'rfqcountByBuyerId'])->name('admin.rfq.count');
    Route::get('/buyer-all-rfq/{buyerId}', [BuyerController::class, 'allRfq'])->name('admin.rfq.list');
    


    //admin seller section
    Route::get('all-sellers', [SellerController::class, 'allBuyersdata'])->name('admin.sellers.all');
    Route::delete('sellers/{id}', [SellerController::class, 'destroy'])->name('admin.sellers.destroy');
    Route::get('sellers-count', [SellerController::class, 'count'])->name('admin.sellers.count');
    Route::get('/single-seller/{id}', [SellerController::class, 'findSellerById'])->name('admin.sellers.single-seller');
    Route::get('/sellers/{id}/edit', [SellerController::class, 'edit'])->name('admin.sellers.edit');
    Route::put('/sellers/{id}', [SellerController::class, 'update'])->name('admin.sellers.update');
    Route::get('/seller/{id}/rfq-count', [SellerController::class, 'getSingleSellerRfqCount'])->name('admin.seller.rfq.count');
    Route::get('/seller/{id}/rfq-data', [SellerController::class, 'getSingleSellerRfqData'])->name('admin.seller.rfq.data');
    Route::get('/singlerfqview/{id}', [SellerController::class, 'singleselllerrfq'])->name('admin.single-seller-rfq');



    //admin Product Section
    Route::get('/all-products', [ProductController::class, 'allproducts'])->name('products.allproducts');
    
    
    //commission Controller Section
    Route::get('/commission', [Commission::class, 'showCommission'])->name('admin.commission');
    
    
    //invoice Controller section
    Route::get('/invoice', [Invoice::class, 'showInvoice'])->name('admin.invoice');



});


Route::middleware('buyer.auth')->group(function () {
    Route::get('/buyer/dashboard', function () {
        return view('buyer.welcome');
    })->name('buyer.home');
});

Route::middleware('seller.auth')->group(function () {
    Route::get('/seller/dashboard', function () {
        return view('seller.welcome');
    })->name('seller.home');
});


Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');


Route::get("test",function(){
    return view('admin.seller-edit');
});