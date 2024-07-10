@extends('admin.adminlayouts.app')
@section('title', 'Edit Buyer')
@section('content')

<div style="margin-bottom: 200px; width: 50%; margin-left: auto; margin-right: auto;">
    <h2 style="font-size: 1.5em; color: #333; margin-bottom: 20px;">Edit Buyer</h2>
    <form method="POST" action="{{ route('admin.buyers.update', $buyer->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group mt-3">
            <label for="name" style="font-size: 1.2em; color: #333;">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $buyer->name) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="email" style="font-size: 1.2em; color: #333;">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $buyer->email) }}" readonly>
        </div>
        
        <div class="form-group mt-3">
            <label for="phone_number" style="font-size: 1.2em; color: #333;">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $buyer->phone_number) }}" readonly>
        </div>
        
        <div class="form-group mt-3">
            <label for="pan_number" style="font-size: 1.2em; color: #333;">PAN Number</label>
            <input type="text" class="form-control" id="pan_number" name="pan_number" value="{{ old('pan_number', $buyer->pan_number) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="buyer_type" style="font-size: 1.2em; color: #333;">Buyer Type</label>
            <input type="text" class="form-control" id="buyer_type" name="buyer_type" value="{{ old('buyer_type', $buyer->buyer_type) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="rfq_raised" style="font-size: 1.2em; color: #333;">RFQ Raised</label>
            <input type="text" class="form-control" id="rfq_raised" name="rfq_raised" value="{{ old('rfq_raised', $buyer->rfq_raised) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="orders" style="font-size: 1.2em; color: #333;">Orders</label>
            <input type="text" class="form-control" id="orders" name="orders" value="{{ old('orders', $buyer->orders) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3" style="background-color: #007bff; border-color: #007bff;">Update</button>
    </form>

    <div class="mt-4">
        <p style="font-size: 0.9em; color: #666;">Please review all details before updating the buyer's information. Once updated, the changes will reflect immediately.</p>
    </div>
</div>

@endsection
