<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>

</head>

<body data-spy="scroll">

    @include('admin.adminlayouts.buyer-header')

    <main>
        @yield('content')
    </main>

    @include('admin.adminlayouts.buyer-footer')

    <!-- JS files -->
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chart-custome.js') }}"></script>
    <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/range-slider.js') }}"></script>
    <script src="{{ asset('js/dashboard-script.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/SingleSellerRfq.js') }}"></script>

    <!-- Additional JS libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Direct", "Affiliate", "E-mail", "Other"],
                    datasets: [{
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderWidth: 5,
                        borderColor: window.theme.white
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    cutoutPercentage: 70,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn-admin-dashboard-sidebar");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script>
   $(document).ready(function() {
       $('#dataTable').DataTable();
   });
</script>
<script>
    $(document).ready(function() {
        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], { type: 'text/csv' });

            // Download link
            downloadLink = document.createElement('a');

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = 'none';

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }

        function exportTableToCSV(filename) {
            var data = [];
            var rows = document.querySelectorAll('table#dataTable tr');

            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll('td, th');

                for (var j = 0; j < cols.length; j++) {
                    row.push(cols[j].innerText);
                }

                data.push(row.join(","));
            }

            // Create a CSV string from the data array
            var csv = data.join("\n");

            // Download CSV
            downloadCSV(csv, filename);
        }

        // Event listener for the Export button
        document.querySelector(".back-button-for-rfq-buyer").addEventListener("click", function() {
            exportTableToCSV('table_data.csv');
        });
    });
</script>


 <script>
        $(document).ready(function() {
            $.ajax({
                url: '/categories',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        let categories = response.categories;
                        let dropdown = $('.productdrop');

                        // Clear existing content
                        dropdown.empty();

                        // Append categories to the dropdown
                        categories.forEach(category => {
                            dropdown.append(`<a href="all-buyer">- ${category.category_name}</a><br>`);
                        });

                        // Append static links
                        dropdown.append(`
                            <a href="{{ route('admin.seller.brand') }}">- All Brands</a><br>
                            <a href="{{ route('products.allproducts') }}">- All Products</a>
                        `);
                    } else {
                        console.error('Failed to fetch categories:', response.message);
                    }
                },
                error: function(xhr) {
                    console.error('Error fetching categories:', xhr.responseText);
                }
            });
        });
</script> 
</body>

</html>
