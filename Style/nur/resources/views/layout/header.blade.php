<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Professional Header</title>
    <style>
        /* Custom styles for dropdown hover behavior */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        /* Adjusts the button for uniform spacing */
        .btn-contact {
            margin-left: 20px;
        }

        /* Adjusts the logo sizing */
        .navbar-brand img {
            max-height: 60px;
            max-width: 140px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid hi"
                        src="https://t4.ftcdn.net/jpg/02/75/70/03/240_F_275700347_09reCCwb7JBxTKiYQXsyri4riMKaHbj8.jpghttps://t4.ftcdn.net/jpg/07/13/16/99/240_F_713169906_tYuBosF3pBKjhh08wn4inVmA7psYjdb1.jpghttps://t3.ftcdn.net/jpg/04/69/99/84/240_F_469998410_dS3rIFPywmpTDYYr7VY6wd1SlV6c7Fa7.jpg"
                        alt="Restaurant Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav mx-5 gap-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">About</a>
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                            <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="reservationDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Reservation</a>
                            <ul class="dropdown-menu" aria-labelledby="reservationDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                            <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="faqsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">FAQs</a>
                            <ul class="dropdown-menu" aria-labelledby="faqsDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                                <li><a class="dropdown-item" href="#">Menu1</a></li>
                                <li><a class="dropdown-item" href="#">Menu2</a></li>
                                <li><a class="dropdown-item" href="#">Menu3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item text-end">
                            <a href="#" class="btn btn-danger btn-contact">Contact Now</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3QtIET9hTX9I5CXSqRGYarOQO8/jIsPVN6s0I4SVoEoEB1Nmr5E63b0vlHwLx+0" crossorigin="anonymous">
    </script>
</body>

</html>
