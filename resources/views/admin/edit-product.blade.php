@extends('admin.adminlayouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr0-md">
        <div class="dashboard__main pl0-md">
            <div class="dashboard__content bg-color-buyer-dashboard">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Edit Product</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('products.update', $product_detail->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="form-group">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" id="product_name" name="product_name" class="form-control" value="{{ old('product_name', $product->product_name) }}" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="tbl_selling_price" class="form-label">Selling Price</label>
                                        <input type="text" id="tbl_selling_price" name="tbl_selling_price" class="form-control" value="{{ old('tbl_selling_price', $product_detail->tbl_selling_price) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="tbl_mrp" class="form-label">MRP</label>
                                        <input type="text" id="tbl_mrp" name="tbl_mrp" class="form-control" value="{{ old('tbl_mrp', $product_detail->tbl_mrp) }}" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="text" id="status" name="status" class="form-control" value="{{ old('status', $product_detail->status) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
