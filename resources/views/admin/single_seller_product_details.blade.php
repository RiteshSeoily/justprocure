<!-- resources/views/admin/single_seller_rfq_product_details.blade.php -->

@extends('layouts.app') <!-- Assuming you have a master layout file -->

@section('content')
    <div class="container">
        <h1>Product Details for Seller's RFQs</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Selling Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productDetails as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product['product_name'] }}</td>
                                <td>
                                    <img src="{{ asset($product['tbl_image']) }}" style="width: 100px; height: auto;" alt="Product Image">
                                </td>
                                <td>{{ $product['status'] }}</td>
                                <td>{{ $product['tbl_selling_price'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">View</a>
                                    <a href="#" class="btn btn-sm btn-success">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
