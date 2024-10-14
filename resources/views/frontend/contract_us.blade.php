@extends('frontend.app')
@section('title', 'Contact')

@section('content')
    <div class="banner-section">
        <div class="banner-wrapper">
            {{-- Show Product Banner from Settings --}}
            <img src="{{ asset('img/map/Contact-us-ambalait-software-service -company.webp') }}" alt="Product Banner"
                class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1>Welcome to Ambala IT</h1>
                    <p>Innovative Solutions for a Digital World</p>
                </div>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="bg-grey top ambala-section">
            <div class="row mt-n4">
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card card-style07 py-2-8 px-1-6 bg-white wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-body">
                            <div class="title-box mb-4">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="box-circle-large"></div>
                                <div class="box-circle-small"></div>
                            </div>
                            <p class="mb-3 text-center">Visit Our Office</p>
                            <p class="mb-0 w-100 text-center">202 Mainstreet, 12th Floor</p>
                            <p class="mb-0 w-100 text-center">New York, NY 10013.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="card card-style07 py-2-8 px-1-6 bg-white wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body">
                            <div class="title-box mb-4">
                                <i class="fas fa-comments"></i>
                                <div class="box-circle-large"></div>
                                <div class="box-circle-small"></div>
                            </div>
                            <p class="mb-3 text-center">Let's Talk</p>
                            <p class="mb-0 w-100 text-center">Phone:(+44) 123
                                456 789</p>
                            <p class="mb-0 w-100 text-center">Fax:123 456 789
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-4">
                    <div class="card card-style07 py-2-8 px-1-6 bg-white wow fadeInUp" data-wow-delay=".6s">
                        <div class="card-body">
                            <div class="title-box mb-4">
                                <i class="fas fa-envelope"></i>
                                <div class="box-circle-large"></div>
                                <div class="box-circle-small"></div>
                            </div>
                            <p class="mb-3 text-center">E-mail Us</p>
                            <p class="mb-0 w-100 text-center"><a href="#!">info@yourdomain.com</a></p>
                            <p class="mb-0 w-100 text-center"><a href="#!">hr@yourdomain.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ambala-section">
            <div class="col-12 col-lg-10 wow fadeIn">

                <h3 class=" pt-0 pb-3 ambala_heading text-center">Get in Touch</h3>
                <p class="ambala_paragraph mx-auto mb-0 pb-5">We are available 24/7 by e-mail and phone. You can also
                    ask a question
                    about our services through our contact form.</p>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- start form here -->
                <form action="{{ route('frontend.contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="quform-elements">
                        <div class="row">
                            <!-- Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="name">Your Name <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" id="name" type="text" name="name"
                                            placeholder="Your name here" required />
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="email">Your Email <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Your email here" required />
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" type="text" name="subject"
                                            placeholder="Your subject here" required />
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="phone">Contact Number</label>
                                    <div class="quform-input">
                                        <input class="form-control" id="phone" type="text" name="phone"
                                            placeholder="Your phone number" />
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Textarea element -->
                            <div class="col-md-12">
                                <div class="quform-element form-group">
                                    <label for="message">Message <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us a few words"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- End Textarea element -->

                            <!-- Submit button -->
                            <div class="col-md-12 text-center">
                                <div class="read_more">
                                    <button type="submit" class="font-weight-600 butn very-small"><span>Submit
                                        </span></button>
                                </div>
                                <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                </div>
                            </div>
                            <!-- End Submit button -->
                        </div>
                    </div>
                </form>
                <!-- end form here -->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Hide the success message after 3 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.transition = 'opacity 0.5s ease';
                    successAlert.style.opacity = '0';
                    setTimeout(() => successAlert.remove(), 500);
                }, 3000); // 3000ms = 3 seconds
            }
        });
    </script>
@endsection

<style>
    .card-style07 {
        background: linear-gradient(-45deg, #c1121e23, rgba(19, 20, 20, 0.151)) !important;
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .card-style07:hover {
        background: linear-gradient(-45deg, #c1121e, rgb(19, 20, 20)) !important;
        transform: translateY(-10px);
    }

    .card-style07 i {
        color: #c1121f !important;
        transition: color 0.3s ease;
    }

    .card-style07:hover i {
        color: #ffffff !important;
    }

    .card-body {
        padding: 1rem;
        background-color: rgba(255, 255, 255, 0);
    }

    .quform-element label {
        font-weight: bold;
        color: #d30b0b;
    }

    .quform-submit-inner .butn {
        background-color: #d30b0b;
        color: #ffffff;
        transition: background-color 0.3s ease;
    }

    .quform-submit-inner .butn:hover {
        background-color: #c1121f;
        color: #ffffff;
    }

    .card-body {
        padding: 1rem;
        background-color: #f8f9fa00 !important;
    }

    /* Additional styles to improve mobile responsiveness */
    .text-center {
        text-align: center !important;
    }

    .w-100 {
        width: 100% !important;
    }

    z @media (max-width: 767px) {
        .section-heading {
            font-size: 1.5rem;
        }

        .quform-elements .form-group label {
            font-size: 0.9rem;
        }

        .card-style07 {
            padding: 1rem !important;
        }

        .text-center {
            text-align: center !important;
        }
    }

    .row.justify-content-center {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }
</style>
