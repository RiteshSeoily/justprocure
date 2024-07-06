<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include any additional CSS or stylesheets here -->
    <style>
        html,
        body {
            height: 100%;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <div class="container mt-5">
        <main>
            <!-- Main content section -->
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <!-- Bootstrap JS and any additional JavaScript files or scripts here -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
