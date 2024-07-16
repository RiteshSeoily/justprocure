@extends('admin.adminlayouts.app')

@section('title', 'Product Details')

@section('content')
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr0-md">
        <div class="dashboard__main pl0-md">
            <div class="dashboard__content bg-color-buyer-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 style="font-size: 18px; color: white;">product Name : {{ $product->product_name }}</h2>
                        <!-- Display other product details here -->
                        @if ($product->details->isNotEmpty())
                            <p class="text-orange" style="font-size: 18px; color: white;"><strong>Category:</strong> {{ $product->details->first()->category }}</p>
                            <p class="text-orange" style="font-size: 18px; color: white;"><strong>Price:</strong> {{ $product->details->first()->tbl_selling_price }}</p>
                            <p class="text-orange" style="font-size: 18px; color: white;"><strong>Status:</strong> {{ $product->details->first()->status }}</p>
                        @else
                            <p class="text-orange" style="font-size: 18px; color: white;">No details available</p>
                        @endif

                        <!-- Example: Display product image or placeholder -->
                        @if ($product->tbl_image)
                            <img src="{{ asset($product->tbl_image) }}" alt="{{ $product->product_name }}" class="img-fluid" />
                        @else
                            <i class="fa fa-image fa-5x text-orange"></i>
                            <p class="text-orange" style="font-size: 18px;">No image available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
