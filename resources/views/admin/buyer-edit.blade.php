@extends('layouts.app')  

@section('title', 'buyer edit')


<div class="container mt-5">
    <h2>Edit Buyer</h2>
    <form method="POST" action="{{ route('admin.buyers.update', $buyer->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $buyer->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $buyer->email) }}" readonly>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $buyer->phone_number) }}" readonly>
        </div>
        <div class="form-group">
            <label for="pan_number">PAN Number</label>
            <input type="text" class="form-control" id="pan_number" name="pan_number" value="{{ old('pan_number', $buyer->pan_number) }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password (leave blank if not changing)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>