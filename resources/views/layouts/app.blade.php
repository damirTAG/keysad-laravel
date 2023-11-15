<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keysad</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')

    <div class="container mt-5">
        @yield('content')
    </div>

    @include('modals.cart')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>