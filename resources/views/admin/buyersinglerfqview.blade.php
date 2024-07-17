<!-- rfqview.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFQ Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>RFQ Details</h2>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>RFQ Number</th>
                            <th>Product Count</th>
                            <th>Product Names</th>
                            <th>Seller ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rfqData as $index => $rfq)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $rfq['rfq_number'] }}</td>
                                <td>{{ $rfq['product_count'] }}</td>
                                <td>
                                    @foreach($rfq['product_names'] as $productId => $productName)
                                        {{ $productName }}@if (!$loop->last), @endif
                                    @endforeach
                                </td>
                                <td>{{ $rfq['seller_id'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
