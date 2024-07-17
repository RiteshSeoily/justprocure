@extends('admin.adminlayouts.app')

@section('title', 'Product Details')

@section('content')
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr0-md">
        <div class="dashboard__main pl0-md">
            <div class="dashboard__content bg-color-buyer-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title" style="color: white;">Product Details</h2>
                            </div>
                            <div class="card-body">
                                <h4 class="card-subtitle mb-2">Product Name: {{ $product->product_name }}</h4>

                                <!-- Display other product details here -->
                                @if ($product->details->isNotEmpty())
                                    <div class="mb-3">
                                        <strong>Category:</strong> {{ $product->details->first()->category }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Selling Price:</strong> {{ $product->details->first()->tbl_selling_price }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>MRP Price:</strong> {{ $product->details->first()->tbl_mrp }}
                                    </div>
                                    <div class="mb-3">
                                        <strong>Status:</strong> {{ $product->details->first()->status }}
                                    </div>
                                @else
                                    <p class="text-orange">No details available</p>
                                @endif

                                <!-- Example: Display product image or placeholder -->
                                @if ($product->tbl_image)
                                    <img src="{{ asset($product->tbl_image) }}" alt="{{ $product->product_name }}" class="img-fluid mt-3" style="max-width: 100%;">
                                @else
                                    <i class="fa fa-image fa-5x text-orange mt-3"></i>
                                    <p class="text-orange">No image available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
