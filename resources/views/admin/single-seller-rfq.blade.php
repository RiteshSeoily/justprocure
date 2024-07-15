@extends('layouts.app')

@section('title', 'RFQ Data')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">RFQ Data</h1>

        @if (!empty($rfqData))
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>RFQ Number</th>
                            <th>Product Count</th>
                            <th>Product Names</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rfqData as $index => $rfq)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $rfq['rfq_number'] }}</td>
                                <td>{{ $rfq['product_count'] }}</td>
                                <td>
                                    <ul class="list-unstyled">
                                        @foreach ($rfq['product_names'] as $productName)
                                            <li>
                                                @php
                                                    $extension = pathinfo($productName, PATHINFO_EXTENSION);
                                                @endphp
                                                @if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'bmp']))
                                                    <img src="{{ asset($productName) }}" class="img-thumbnail" alt="Product Image" style="max-width: 100px; max-height: 100px; margin-bottom: 10px;">
                                                @else
                                                    {{ $productName }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    @foreach ($rfq['product_names'] as $productName)
                                        @php
                                            $extension = pathinfo($productName, PATHINFO_EXTENSION);
                                        @endphp
                                        @if (in_array($extension, ['png', 'jpg', 'jpeg', 'pdf', 'csv', 'xlsx']))
                                            <a href="#" onclick="downloadFile('{{ asset($productName) }}', '{{ basename($productName) }}')" class="btn btn-sm btn-primary">Download {{ strtoupper($extension) }}</a>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info mt-4" role="alert">
                No RFQs found for the given ID.
            </div>
        @endif
    </div>

    <script>
        function downloadFile(fileUrl, fileName) {
            // Create a temporary anchor element
            var link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileName;
            link.style.display = 'none';

            // Append the anchor to the body
            document.body.appendChild(link);

            // Trigger the click event on the anchor
            link.click();

            // Clean up
            document.body.removeChild(link);
        }
    </script>
@endsection
