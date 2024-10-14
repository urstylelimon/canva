<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ambalait | @yield('title')</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/logos/ambalait-fav-logo.png') }}" alt="Ambala IT Logo" />
    <link rel="apple-touch-icon" href="{{ asset('img/logos/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logos/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logos/apple-touch-icon-114x114.png') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/plugins.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('search/search.css') }}">
    <link rel="stylesheet" href="{{ asset('quform/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link href="{{ asset('backend/favicon.ico') }}" rel="icon">
    <link href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/adminlte.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">

    @yield('head-styles')
</head>

<body>
    @include('backend.append.sidebar')
    <main class="main">

        @yield('content')
    </main>


    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.querySelector('.scroll-to-top');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollToTopButton.style.display = 'block';
                } else {
                    scrollToTopButton.style.display = 'none';
                }
            });

            scrollToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- JS files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('search/search.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('quform/js/plugins.js') }}"></script>
    <script src="{{ asset('quform/js/scripts.js') }}"></script>
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>



    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Check if the sidebar state is stored in localStorage and apply it
                if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                    document.body.classList.toggle('sb-sidenav-toggled');
                }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                        'sb-sidenav-toggled'));
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, // Set editor height
                minHeight: null, // Set minimum height of editor
                maxHeight: null, // Set maximum height of editor
                focus: true // Set focus to editable area after initializing summernote
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
