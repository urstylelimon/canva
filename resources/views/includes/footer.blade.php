<section class="background-img   d-none d-lg-block">

    <!-- Footer -->
    <div class="position-start">
        <footer class="footer p-0 position-relative overflow-hidden">
            <div class="z-index-9 position-right w-100">
                <div class="row footer-text justify-content-center m-0">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 london p-0">
                        <h4 class="text-white mb-3 double-underline">UK Office </h4>
                        <p class="text-white mb-0">Apartment 57, Adlay Apartments</p>
                        <p class="text-white mb-0">3 Millet Place, London, E16 2YE.</p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">London, UK </p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 dhaka p-0">
                        <h4 class="text-white mb-3 double-underline" style="padding-top: 10px;">Bangladesh Office
                        </h4>
                        <p class="text-white mb-0">House-67, Block-Ka, Piciculture</p>
                        <p class="text-white mb-0"> Housing Society, Shyamoli
                        </p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">+8801708408686</p>
                        <p class="text-white mb-0">Dhaka, Bangladesh.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 ghana p-0">
                        <h4 class="text-white mb-3 double-underline">Ghana Office</h4>
                        <p class="text-white mb-0">Adlay Apartments</p>
                        <p class="text-white mb-0">London, E16 2YE.</p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">+8801708408686</p>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <div class="my-5">
        <div class="map row mt-4">
            <div class="col-lg-12 p-0">
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.843635319627!2d90.36650771498168!3d23.752261684588735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf8b3e13d7c1%3A0x17b60c94d8c55b9e!2sAmbala%20IT!5e0!3m2!1sen!2sbd!4v1620733077891!5m2!1sen!2sbd"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe> --}}
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.current-year').textContent = new Date().getFullYear();
    </script>
</section>
<div class="background-img  d-lg-none">
</div>

<div class="d-lg-none">
    <div class="position-start">
        <footer class="footer p-0 position-relative overflow-hidden">
            <div class="z-index-9 position-right w-100">
                <div class="row footer-text justify-content-center m-0">

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 dhaka p-0">
                        <h4 class="text-white mb-3 double-underline" style="padding-top: 10px;">Bangladesh Office
                        </h4>
                        <p class="text-white mb-0">House-67, Block-Ka, Piciculture</p>
                        <p class="text-white mb-0"> Housing Society, Shyamoli
                        </p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">+8801708408686</p>
                        <p class="text-white mb-0">Dhaka, Bangladesh.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 london p-0">
                        <h4 class="text-white mb-3 double-underline">UK Office </h4>
                        <p class="text-white mb-0">Apartment 57, Adlay Apartments</p>
                        <p class="text-white mb-0">3 Millet Place, London, E16 2YE.</p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">London, UK </p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0 ghana p-0">
                        <h4 class="text-white mb-3 double-underline">Ghana Office</h4>
                        <p class="text-white mb-0">Adlay Apartments</p>
                        <p class="text-white mb-0">London, E16 2YE.</p>
                        <p class="text-white mb-0">info@ambalait.com</p>
                        <p class="text-white mb-0">+8801708408686</p>
                    </div>

                </div>
            </div>
        </footer>
    </div>
</div>
<section id="terms" class="terms dark-background">
    <div class="container p-4 footer-top">
        <div class="row gy-4 footer-second">
            <div class="shadow   rounded col-lg-4 col-md-4 footer-links">
                <h4><u>Useful Links</u></h4>
                <ul>
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('frontend.about') }}">About us</a></li>
                    <li><a href="{{ route('frontend.services') }}">Services</a></li>
                    <li><a href="{{ route('frontend.terms-of-service') }}">Terms of service</a></li>
                    <li><a href="{{ route('frontend.privacy-policy') }}">Privacy policy</a></li>
                </ul>
            </div>

            <div class="shadow   rounded col-lg-4 col-md-4 footer-links">
                <h4><u>Our Services</u></h4>
                <ul>
                    @foreach ($latestServices as $service)
                        <li><a href="#{{ Str::slug($service->name) }}">{{ $service->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class=" rounded col-lg-4 col-md-4  footer-links">
                <h4><u>Our Latest Products</u></h4>
                <ul>
                    @foreach ($latestProducts as $product)
                        <li class="text-nowrap"><a href="#">{{ $product->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <!-- Social Links Section -->
        <div class="row justify-content-center">
            <div class="col-12 text-center p-2">
                @if (isset($main_settings['facebook_url']))
                    <a href="{{ $main_settings['facebook_url'] }}" class="mx-2" target="_blank">
                        <img src="{{ asset('img/icon/facebook.svg') }}" alt="Facebook" style="width: 30px;"
                            class="social-icon">
                    </a>
                @endif
                @if (isset($main_settings['youtube_url']))
                    <a href="{{ $main_settings['youtube_url'] }}" class="mx-2" target="_blank">
                        <img src="{{ asset('img/icon/youtube.svg') }}" alt="YouTube" style="width: 30px;"
                            class="social-icon">
                    </a>
                @endif
                @if (isset($main_settings['instagram_url']))
                    <a href="{{ $main_settings['instagram_url'] }}" class="mx-2" target="_blank">
                        <img src="{{ asset('img/icon/instagram.svg') }}" alt="Instagram" style="width: 30px;"
                            class="social-icon">
                    </a>
                @endif
                @if (isset($main_settings['linkedin_url']))
                    <a href="{{ $main_settings['linkedin_url'] }}" class="mx-2" target="_blank">
                        <img src="{{ asset('img/icon/LinkedIn_icon.svg.png') }}" alt="LinkedIn" style="width: 30px;"
                            class="social-icon">
                    </a>
                @endif
                @if (isset($main_settings['twitter_url']))
                    <a href="{{ $main_settings['twitter_url'] }}" class="mx-2" target="_blank">
                        <img src="{{ asset('img/icon/twitter.svg') }}" alt="Twitter" style="width: 30px;"
                            class="social-icon">
                    </a>
                @endif
            </div>
        </div>
        <!-- Copyright Section -->
        <div class="container copyright text-center mt-0 mb-0">
            <p style="    font-size: .9rem !important">© <span>Copyright</span> <span
                    class="px-1 sitename">{{ $main_settings['site_name'] ?? 'Your Website Name' }}</span>
                <span>All
                    Rights
                    Reserved</span>
            </p>
        </div>
</section>



<style>
    .background-img {
        background-image: url("{{ asset('img/map/ambalait-office-world-map.jpg') }}") !important;
        padding-top: 0px;
        margin-top: 0px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
        padding: 116px !important;
    }

    .footer-text {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    .london,
    .dhaka,
    .ghana {

        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        /* border-radius: 8px; */
        white-space: nowrap;
        margin: 0;
    }

    .london {
        padding-top: 14rem !important;
        padding-bottom: 1rem !important;
        left: 0;
        z-index: 2;
    }

    .ghana {
        padding-top: 14rem !important;
        padding-bottom: 1rem !important;
        right: 0;
    }

    .dhaka {
        padding-bottom: 13rem !important;
        right: 0;
        z-index: 1;
    }

    .double-underline {
        position: relative;
        display: inline-block;
    }

    .double-underline:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        /* Adjust this value to position the second underline */
        width: 100%;
        height: 2px;
        /* Adjust thickness */
        border-bottom: 2px double #fff;
        /* Double underline */
    }

    @media (max-width: 992px) {

        .london,
        .dhaka,
        .ghana {
            padding-top: 8rem !important;
            padding-bottom: 1rem !important;
            margin: 0 auto;
            text-align: center;
        }
    }

    @media (max-width: 768px) {

        .london,
        .dhaka,
        .ghana {
            width: 80%;
            margin: 10px auto;
            text-align: center;
            padding-right: 55px !important;
        }
    }

    @media (max-width: 576px) {

        .london,
        .dhaka,
        .ghana {
            width: 100%;
            margin: 0px auto;
            text-align: center;
            margin-bottom: 0px !important;
            padding-top: 23px !important;
            background-color: rgb(0 0 0 / 94%) !important;

        }

        .background-img {
            background-image: url(http://192.168.1.150/ambalaitweb/nur/public/img/demo/ambalait-office-world-map (1).jpg) !important;
            padding-top: 0px;
            margin-top: 0px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            position: relative;
            padding: 116px !important;
            margin-bottom: 25px;
        }
    }

    .shadow {
        box-shadow: 1px 0rem 0rem rgba(0, 0, 0, 0.15) !important;
    }

    .social-icon {
        width: 45px !important;
        height: 45px !important;
        border-radius: 50% !important;
        object-fit: cover;
        padding: 4px;
        transition: transform 0.3s ease;
        filter: grayscale(100%);
    }

    .social-icon:hover {
        transform: scale(1.1);
        transform: scale(1.1);
        filter: grayscale(0%)
    }
</style>
