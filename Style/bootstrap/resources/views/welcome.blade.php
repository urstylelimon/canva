<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with Bootstrap</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>


    <a href="{{ route('home') }}">Home</a>
    <button type="button" class="btn btn-primary">Test Button</button>
    <!-- Bootstrap JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
