<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <title>Second Home Page</title>
</head>

<body>
    @include('layout/header')
    <div class="">
        <div class="container">
            <div class="row align-items-center container">
                <div class="col-md-6 ">
                    <!-- Button on the left -->
                    <button class="btn btn-danger btn-lg mt-5">Order Now</button>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <!-- Breadcrumb on the right -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Menu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="px-3 py-4  mt-5" style=" border-top: 2px solid black; border-bottom: 2px solid black; ">
            <div class="container">
                <h2 class="mx-5">order details</h2>
                <div class="row flex">
                    {{-- first box --}}
                    <div class="col-xl-8 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <ol class="activity-checkout mb-0 px-4 mt-3">
                                    <!-- First Row -->
                                    <li
                                        class="checkout-item border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="col-auto">
                                                <img src="https://static.tnn.in/thumb/msid-105675192,thumbsize-89532,width-1280,height-720,resizemode-75/105675192.jpg"
                                                    class="img-fluid fade-in-left" style="height: 140px; width: 200px;"
                                                    alt="Chicken Biryani">
                                            </div>
                                            <div class="mx-4 ">
                                                <h6>Chicken Biryani</h6>
                                                <p class="mb-0 mt-2"> 🍽 Rice </i> | 15 min <i class="bi bi-clock"></i>
                                                </p>
                                                <div>
                                                    <input type="number" id="quantity-selector"
                                                        class="form-control form-control-sm mt-3" value="1"
                                                        min="1" max="99" style="width: 50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-lg-0 text-lg-end">
                                            <h6>$15.99</h6>
                                            <div class="d-flex gap-3 mt-5">
                                                <a href="#" class="btn btn-link text-danger p-0">
                                                    <i class="bi bi-trash"></i> Remove
                                                </a>
                                                <a href="#" class="btn btn-link text-secondary p-0">
                                                    <i class="bi bi-heart"></i> Save for later
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Second Row -  -->
                                    <li
                                        class="checkout-item border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="col-auto">
                                                <img src="https://c.ndtvimg.com/2019-02/45dlkeqo_mutton-biryani_625x300_27_February_19.jpg"
                                                    class="img-fluid" style="height: 140px; width: 200px;"
                                                    alt="Chicken Biryani">
                                            </div>
                                            <div class="mx-4">
                                                <h6>Mutton Biryani</h6>
                                                <p class="mb-0 mt-2">🍽 Rice </i> | 15 min <i class="bi bi-clock"></i>
                                                </p>
                                                <div>
                                                    <input type="number" id="quantity-selector"
                                                        class="form-control form-control-sm mt-3" value="1"
                                                        min="1" max="99" style="width: 50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-lg-0 text-lg-end">
                                            <h6>$12.99</h6>
                                            <div class="d-flex gap-3 mt-5">
                                                <a href="#" class="btn btn-link text-danger p-0">
                                                    <i class="bi bi-trash"></i> Remove
                                                </a>
                                                <a href="#" class="btn btn-link text-secondary p-0">
                                                    <i class="bi bi-heart"></i> Save for later
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Third Row  -->
                                    <li
                                        class="checkout-item border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="col-auto">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Mutton_karahi.jpg"
                                                    class="img-fluid" style="height: 140px; width: 200px;"
                                                    alt="Chicken Biryani">
                                            </div>
                                            <div class="mx-4">
                                                <h6>Mutton Karahi</h6>
                                                <p class="mb-0 mt-2"> 🍽 Rice </i> | 15 min <i class="bi bi-clock"></i>
                                                </p>
                                                <div>
                                                    <input type="number" id="quantity-selector"
                                                        class="form-control form-control-sm mt-3" value="1"
                                                        min="1" max="99" style="width: 50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-lg-0 text-lg-end">
                                            <h6>$20.00</h6>
                                            <div class="d-flex gap-3 mt-5">
                                                <a href="#" class="btn btn-link text-danger p-0">
                                                    <i class="bi bi-trash"></i> Remove
                                                </a>
                                                <a href="#" class="btn btn-link text-secondary p-0">
                                                    <i class="bi bi-heart"></i> Save for later
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-4 d-flex ">
                        <div class="card w-100 ">
                            <div class="card-body">
                                <!-- Row 1 -->
                                <div class="row pb-2 border-bottom">
                                    <div class="col text-center">
                                        <h3>Order Summary</h3>
                                    </div>
                                </div>
                                <!-- Row 2 -->
                                <div class="row pb-2 border-bottom">
                                    <div class="col mx-2 mt-2  ">
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">chiken biryani × 1</p>
                                            {{-- <p class="text-sm-center">× 1</p> --}}
                                            <p class="text-sm-end">$15.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">chiken biryani × 1 </p>
                                            {{-- <p class="text-sm-center">× 1</p> --}}
                                            <p class="text-sm-end">$15.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">chiken biryani × 1</p>

                                            <p class="text-sm-end">$15.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row 3 -->
                                <div class="row pb-2 border-bottom">
                                    <div class="col mx-2 mt-2 ">
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">Subtotal </p>

                                            <p class="text-sm-end">$18.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">delivery </p>

                                            <p class="text-sm-end">$10.00</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-sm-start">VAT </p>

                                            <p class="text-sm-end">$6.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row 4 -->
                                <div class="row pb-2 border-bottom">
                                    <div class="col d-flex justify-content-between mx-2 mt-2">
                                        <h4 class="text-start">Total </h4>
                                        <h4 class="text-end">$40</h4>
                                    </div>
                                </div>
                                <!-- Row 5 -->
                                <div class="row pb-2 border-bottom">
                                    <div class="col">
                                        <!-- Coupon Section -->

                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control form-control-sm me-2"
                                                placeholder="Enter discount code">
                                            <button type="button" class="btn btn-primary btn-sm">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row 6 -->
                                <div class="row pb-2">
                                    <div class="col text-center mt-4 mx-2">
                                        <button class="btn btn-dark btn-lg">Check Out</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- end row -->
            <div class="  px-3 py-4  mt-5" style=" border-top: 2px solid black;  ">
                <h2 class="text-center"> you may also like</h2>
                <div class="container my-5">
                    <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1 -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <div class="card position-relative h-100">
                                            <span class="price-tag">$10</span>
                                            <img class="card-img-top img-hover img-fluid fixed-height"
                                                src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Chicken Biryani</h5>
                                                <p class="card-text">Rice 15 min card's content.</p>
                                                <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card position-relative h-100">
                                            <span class="price-tag">$10</span>
                                            <img class="card-img-top img-hover img-fluid fixed-height"
                                                src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Chicken Biryani</h5>
                                                <p class="card-text">Rice 15 min card's content.</p>
                                                <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card position-relative h-100">
                                            <span class="price-tag">$10</span>
                                            <img class="card-img-top img-hover img-fluid fixed-height"
                                                src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Chicken Biryani</h5>
                                                <p class="card-text">Rice 15 min card's content.</p>
                                                <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card position-relative h-100">
                                            <span class="price-tag">$10</span>
                                            <img class="card-img-top img-hover img-fluid fixed-height"
                                                src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Chicken Biryani</h5>
                                                <p class="card-text">Rice 15 min card's content.</p>
                                                <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="contailer">
                                <a class="carousel-control-prev" href="#cardCarousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#cardCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <div class="container">
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3 mb-4">
                                                <div class="card position-relative h-100">
                                                    <span class="price-tag">$10</span>
                                                    <img class="card-img-top img-hover img-fluid fixed-height"
                                                        src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Chicken Biryani</h5>
                                                        <p class="card-text">Rice 15 min card's content.</p>
                                                        <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <div class="card position-relative h-100">
                                                    <span class="price-tag">$10</span>
                                                    <img class="card-img-top img-hover img-fluid fixed-height"
                                                        src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Chicken Biryani</h5>
                                                        <p class="card-text">Rice 15 min card's content.</p>
                                                        <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <div class="card position-relative h-100">
                                                    <span class="price-tag">$10</span>
                                                    <img class="card-img-top img-hover img-fluid fixed-height"
                                                        src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Chicken Biryani</h5>
                                                        <p class="card-text">Rice 15 min card's content.</p>
                                                        <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <div class="card position-relative h-100">
                                                    <span class="price-tag">$10</span>
                                                    <img class="card-img-top img-hover img-fluid fixed-height"
                                                        src="https://img.freepik.com/premium-photo/amazing-delicious-cheese-burger_727939-299.jpg"
                                                        alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Chicken Biryani</h5>
                                                        <p class="card-text">Rice 15 min card's content.</p>
                                                        <a href="#" class="btn btn-info btn-hover">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    @include('layout/footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<style>
    .btn-underline {
        text-decoration: underline;
    }

    .social-icons a {
        color: #bb2721;

        font-size: 32px;

        margin-right: 15px;

    }


    .carousel-control-prev {
        left: -60px;
    }

    .carousel-control-next {
        right: -60px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 20px;
        height: 20px;
    }
</style>
