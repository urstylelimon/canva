<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/4nE2sw5N2Dpz5Q4LCeLzrbZB1e3z4fNp8FD0N4" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding-top: 70px;
            /* Adjusts for the navbar */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <!-- Add other navigation links here -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1>Welcome to Laravel</h1>
        <p>This page is styled with Bootstrap 5 components.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-Q0qC25uaANbtz40aP6sH/7MAwXaw0ES6TB6h3sx5e2fI5/YLFgFMxj5Gm5b/EPpU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9b4SHr7c6BPH5fPUp1Zj0bskPHsjnMXxwXrNDu1Qq8f8V22T5B6Y5Jv" crossorigin="anonymous">
    </script>

</body>

</html>
