@extends('admin.adminlayouts.app')
@section('title', 'Edit Seller')
@section('content')

<div style="margin-bottom: 200px; width: 100%; display: flex; align-items: center; justify-content: center;">
    
    <form method="POST" action="{{ route('admin.sellers.update', ['id' => $seller->id]) }}" style="min-width: 500px; margin-top: 200px;">
        @csrf
        @method('PUT')
        
        <div class="form-group mt-3">
            <label for="name" style="font-size: 1.2em; color: #fff;">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $seller->name) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="email" style="font-size: 1.2em; color: #fff;">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $seller->email) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="phone_number" style="font-size: 1.2em; color: #fff;">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $seller->phone_number) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="gst_number" style="font-size: 1.2em; color: #fff;">GST Number</label>
            <input type="text" class="form-control" id="gst_number" name="gst_number" value="{{ old('gst_number', $seller->gst_number) }}" required>
        </div>
        
        <div class="form-group mt-3">
            <label for="pan_number" style="font-size: 1.2em; color: #fff;">PAN Number</label>
            <input type="text" class="form-control" id="pan_number" name="pan_number" value="{{ old('pan_number', $seller->pan_number) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

@endsection
