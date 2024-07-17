@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit RFQ</h1>
    
    <form action="{{ route('admin.updatebuyersinglerfq', ['rfqId' => $rfqData['rfq_id']]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="rfq_number" class="text-white font-weight-bold">RFQ Number</label>
            <input type="text" id="rfq_number" name="rfq_number" class="form-control" value="{{ $rfqData['rfq_number'] }}" required>
        </div>

        
        
        <div class="form-group">
            <label for="product_names" class="text-white font-weight-bold">Products</label>
            <ul class="list-group">
                @foreach ($rfqData['product_names'] as $id => $name)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $name }}
                        <span class="badge badge-primary badge-pill">{{ $id }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <button type="submit" class="btn btn-primary">Update RFQ</button>
    </form>
</div>
@endsection
