<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
        /* Removes the margin gap so the menu appears instantly */
    }
</style>
</head>

<body>

    <!-- Header with Navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://assets.materialup.com/uploads/037337c8-32b3-45f8-9e42-68b8e67bbc2a/preview.jpg"
                    alt="Restaurant Logo" class="d-inline-block align-text-top"
                    style="max-height: 70px; max-width: 150px;">
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-5 gap-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="reservationDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Reservation
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="reservationDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="faqsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            FAQs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="faqsDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item" href="#">Menu1</a></li>
                            <li><a class="dropdown-item" href="#">Menu2</a></li>
                            <li><a class="dropdown-item" href="#">Menu3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-danger ms-7 gap-5">Contact Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    @include('layout/header')
    <!-- search bar -->
    <main class=" mt-5 text-center">
        <h1>Organic Foods made <br> Easy & Healthy </h1>
        <div class="container mt-5">
            <form class="d-flex" role="search">

                <input class="form-control form-control-sm me-2" type="search" placeholder="Search your food here"
                    aria-label="Search">

                <button class="btn btn-sm btn-dark" type="submit">
                    <i class="bi bi-search"></i> Search
                </button>

            </form>
        </div>
        {{-- four images --}}
        <div class="container mt-5">
            <div class="d-flex justify-content-center">

                <div class="text-center mx-5">
                    <img src="https://cdn-icons-png.freepik.com/256/992/992700.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                        class="img-fluid animate__animated animate__fadeInDown" alt="Smile"
                        style="max-width: 40px; max-height: 40px">
                    <p class="mt-1">24/7 Fresh Food</p>
                </div>

                <div class="text-center mx-5">
                    <img src="https://cdn-icons-png.freepik.com/256/5684/5684158.png?semt=ais_hybrid"
                        class="img-fluid animate__animated animate__fadeInDown" alt="Location"
                        style="max-width: 40px; max-height: 40px">
                    <p class="mt-1">Nature First</p>
                </div>

                <div class="text-center mx-5">
                    <img src="https://t4.ftcdn.net/jpg/00/97/00/07/240_F_97000769_R4zepLTgmf8G22W7G2o8JA1HeiVK2CkK.jpg"
                        class="img-fluid animate__animated animate__fadeInDown" alt="Heart"
                        style="max-width: 40px; max-height: 40px">
                    <p class="mt-1">Home Service</p>
                </div>

                <div class="text-center mx-5">
                    <img src="https://cdn-icons-png.freepik.com/256/12047/12047373.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                        class="img-fluid animate__animated animate__fadeInDown" alt="House"
                        style="max-width: 40px; max-height: 40px">
                    <p class="mt-1">Free Delivery</p>
                </div>
            </div>
        </div>
        {{-- border div  --}}
        <div class=" mt-5">
            <div class="px-3 py-4" style="border-top: 2px solid black; border-bottom: 2px solid black;">

                <div class="row g-3 align-items-center">

                    <div class="col-md-auto mx-5">
                        <h5 class="mb-0">Book a Table</h5>
                    </div>

                    <div class="col-md mx-5">
                        <input type="date" class="form-control" placeholder="pick your date">
                    </div>

                    <div class="col-md mx-5">
                        <select class="form-select">
                            <option value="" selected>Select Time</option>
                            <option value="1">Option 1A</option>
                            <option value="2">Option 1B</option>
                        </select>
                    </div>

                    <div class="col-md mx-5">
                        <select class="form-select">
                            <option value="" selected>Select Peoples</option>
                            <option value="1">Option 2A</option>
                            <option value="2">Option 2B</option>
                        </select>
                    </div>
                    <div class="col-md-auto mx-5 position-relative">
                        <button class="btn btn-dark" id="bookButton" onclick="toggleLock()">Book Now</button>
                        <div id="unlockIcon" class="icon-overlay fas fa-unlock" style="display: none;"></div>
                        <div id="lockIcon" class="icon-overlay fas fa-lock" style="display: none;"></div>
                    </div>

                    <script>
                        function toggleLock() {
                            var button = document.getElementById('bookButton');
                            var unlockIcon = document.getElementById('unlockIcon');
                            var lockIcon = document.getElementById('lockIcon');

                            unlockIcon.style.display = 'block';
                            unlockIcon.style.opacity = '1';

                            setTimeout(function() {
                                unlockIcon.style.opacity = '0';
                                setTimeout(function() {
                                    unlockIcon.style.display = 'none';
                                    lockIcon.style.display = 'block';
                                    lockIcon.style.opacity = '1';
                                    button.disabled = true;
                                }, 1000);
                            }, 1500);
                        }
                    </script>

                </div>
            </div>
        </div>
        {{-- second text --}}
        <div class="text-center mt-5">
            <h1>Choose & Enjoy</h1>
            <h6>Inspire by Recipe and creation of worlds best chefs</h6>
        </div>
        {{-- card and images --}}
        <div class="container mt-5 ">
            <div class="row g-4 ">
                <div class="col-md-3 animate__animated animate__fadeInLeft">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$10</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                            alt="Cheeseburger">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Biryani</h5>
                            <p class="card-text">Rice, 15 min</p>
                            <a href="#" class="btn btn-primary btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$8</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVsaWNpb3VzJTIwZm9vZHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Delicious Food">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Tikka</h5>
                            <p class="card-text">Grilled chicken</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.4s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$10</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                            alt="Cheeseburger">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Biryani</h5>
                            <p class="card-text">Rice, 15 min</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.6s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$8</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVsaWNpb3VzJTIwZm9vZHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Delicious Food">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Tikka</h5>
                            <p class="card-text">Grilled chicken</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-4">
                <div class="col-md-3 animate__animated animate__fadeInLeft">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$10</span>
                        <img class="card-img-top img-fluid fixed-height "
                            src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                            alt="Cheeseburger">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Biryani</h5>
                            <p class="card-text">Rice, 15 min</p>
                            <a href="#" class="btn btn-primary btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.2s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$8</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVsaWNpb3VzJTIwZm9vZHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Delicious Food">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Tikka</h5>
                            <p class="card-text">Grilled chicken</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.4s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$10</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                            alt="Cheeseburger">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Biryani</h5>
                            <p class="card-text">Rice, 15 min</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 animate__animated animate__fadeInLeft" style="animation-delay: 0.6s;">
                    <div class="card position-relative h-100">
                        <span class="price-tag">$8</span>
                        <img class="card-img-top img-fluid fixed-height"
                            src="https://images.unsplash.com/photo-1551024601-bec78aea704b?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVsaWNpb3VzJTIwZm9vZHxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Delicious Food">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Tikka</h5>
                            <p class="card-text">Grilled chicken</p>
                            <a href="#" class="btn btn-info btn-hover">Order Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- view all button --}}
        <div class="text-center mt-5">
            <button class="btn btn-dark">VIEW ALL</button>
        </div>
        <div class="px-3 py-4  mt-5" style=" border-top: 2px solid black; border-bottom: 2px solid black; ">

            <div class="row align-items-center">
                <div class="col-md-6 pr-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="text-start">Special Offer</h5>
                            <h1 class="text-start">50% OFF</h1>
                            <h6 class="text-start">some some some some some some some some<br>some some some some some
                                some some some some</h6>
                            <h5 class="text-start">Use Coupon: 500OFF</h5>
                            <div class="col-md-6 offset-md-3 text-center">
                                <a href="#" class="btn btn-info btn-animated">Order Now</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3Vwd2s2MTY2MTU3Ny13aWtpbWVkaWEtaW1hZ2Uta293YXBlZWouanBn.jpg"
                        class="img-fluid smaller-image" alt="Responsive image">
                </div>
            </div>

        </div>
        <div class="px-3 py-4  mt-5" style="  border-bottom: 2px solid black; ">
            <div class="text-center">
                <h1>Why Choose Us ?</h1>
                <div class=" mt-5">

                    <div class="d-flex justify-content-center">

                        <div class="text-center mx-5">
                            <img src="https://cdn-icons-png.freepik.com/256/10403/10403003.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                                class="img-fluid" alt="Smile" style="max-width: 50px; max-height: 50px">
                            <p class="mt-1">10 + years experience</p>
                        </div>

                        <div class="text-center mx-5">
                            <img src="https://cdn-icons-png.freepik.com/256/709/709699.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                                class="img-fluid" alt="Location" style="max-width: 50px; max-height: 50px">
                            <p class="mt-1">200+ professional Chefs</p>
                        </div>

                        <div class="text-center mx-5">
                            <img src="https://cdn-icons-png.freepik.com/256/33/33308.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                                class="img-fluid" alt="Heart" style="max-width: 50px; max-height: 50px">
                            <p class="mt-1">5000+ Happy Customers</p>
                        </div>

                        <div class="text-center mx-5">
                            <img src="https://cdn-icons-png.freepik.com/256/2595/2595083.png?ga=GA1.1.169077460.1715069367&semt=ais_hybrid"
                                class="img-fluid" alt="House" style="max-width: 50px; max-height: 50px">
                            <p class="mt-1">Awards</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- review slider  --}}
        <div class="px-3 py-4 mt-5" style="border-bottom: 2px solid black;">
            <section>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center animate__animated animate__fadeInUp">
                        <h2 class="mb-4">Customer Reviews</h2>
                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                            Hear what our happy customers say about our services. Their experiences highlight our
                            commitment to delivering outstanding results and quality support.
                        </p>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-4 mb-5 mb-md-0 animate__animated animate__zoomIn"
                        style="animation-delay: 0.5s;">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                class="rounded-circle shadow-1-strong" width="150" height="150" />
                        </div>
                        <h5 class="mb-3">Maria Samantha</h5>
                        <h6 class="text-primary mb-3">Web Developer</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>Partnering with this team transformed our online
                            presence. Their tailored solutions significantly improved our site's performance and user
                            engagement.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star-half-alt fa-sm text-warning"></i></li>
                        </ul>
                    </div>

                    <div class="col-md-4 mb-5 mb-md-0 animate__animated animate__zoomIn"
                        style="animation-delay: 0.7s;">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                class="rounded-circle shadow-1-strong" width="150" height="150" />
                        </div>
                        <h5 class="mb-3">Lisa Cudrow</h5>
                        <h6 class="text-primary mb-3">Graphic Designer</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>Their creative approach has brought fresh ideas to
                            our marketing campaigns, significantly boosting our brand's visibility and customer
                            engagement.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i the="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0 animate__animated animate__zoomIn"
                        style="animation-delay: 0.7s;">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                class="rounded-circle shadow-1-strong" width="150" height="150" />
                        </div>
                        <h5 class="mb-3">Lisa Cudrow</h5>
                        <h6 class="text-primary mb-3">Graphic Designer</h6>
                        <p class="px-xl-3">
                            <i class="fas fa-quote-left pe-2"></i>Their creative approach has brought fresh ideas to
                            our marketing campaigns, significantly boosting our brand's visibility and customer
                            engagement.
                        </p>
                        <ul class="list-unstyled d-flex justify-content-center mb-0">
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li><i the="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                    </div>



                </div>
            </section>


        </div>
    </main>
    <!-- Footer -->
    {{-- <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mb-3 text-white text-decoration-underline">Popular Page</h4>
                    <p>home</p>
                    <p>about us </p>
                    <p>menu</p>
                    <p>lorem</p>
                    <p>lorem</p>

                </div>
                <div class="col-md-3">
                    <h4 class="mb-3 text-white text-decoration-underline">Popular Category</h4>
                    <p>biriyanui</p>
                    <p>burger</p>
                    <p>pizza</p>
                    <p>chiken fry</p>
                    <p>sweets</p>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-3 text-white text-decoration-underline">Reach Us</h4>
                    <p>089032457654</p>
                    <p>343253555445</p>
                    <p>345345325345</p>
                    <p>353565454546</p>
                    <p>545465466664</p>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-3 text-white text-decoration-underline">Contact With Us</h4>

                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2024 Restaurant Name. All Rights Reserved.</p>
                    <p class="mb-0">
                        <a href="#" class="text-white text-decoration-none">Privacy Policy</a> |
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer> --}}
    @include('layout/footer')
    <!-- Bootstrap 5 JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    .price-tag {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 16px;
    }

    .card-img-top:hover,
    .btn-hover:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .fixed-height {
        height: 300px;

    }

    .btn-dark {
        background-color: black;
        color: white;
    }

    .smaller-image {
        max-width: 70%;

        height: auto;
        display: block;
        margin: 0 auto;

    }

    .carousel-item {
        display: flex;
    }

    .card {
        margin: 0 auto;

    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .btn-animated {
        animation: pulse 1s infinite;


    }

    .icon-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        /* Adjust to your needs */
        color: white;
        /* Set the appropriate color */
        pointer-events: none;
        /* Prevents interaction */
        opacity: 0;
        /* Start hidden */
        transition: opacity 1s ease;
        /* Smooth 1-second fade-in/out */
    }
</style>
