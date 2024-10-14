@extends('frontend.app')

@section('title', 'Apply for ' . $job->title)

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">

            <img src="{{ $settings && $settings->apply_banner ? asset($settings->apply_banner) : asset('img/demo/job_banner.webp') }}"
                alt="Career Banner" class="img-fluid">
            <div class="banner-overlay">
                <div class="banner-text">
                    <h1 class="wow animate__animated animate__fadeInDown">Shape the Future with Us</h1>
                    <p class="wow animate__animated animate__fadeInUp">Your Career Journey Begins Here</p>
                    <a href="#openings" class="butn btn-primary wow animate__animated animate__bounceIn">View jobs</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Form Section -->
    <section class="application-form-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Success and Error Messages -->
                    @if (session('success'))
                        <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Application Form -->
                    <div class="application-form-box wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h1 class="form-title">Apply for {{ $job->title }}</h1>
                        <form action="{{ route('frontend.apply.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Important for CSRF protection -->
                            <!-- Hidden Job ID Field -->
                            <input type="hidden" name="job_id" value="{{ $job->id }}">

                            <!-- Full Name -->
                            <div class="form-group mb-3">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="full_name" required>
                            </div>

                            <!-- Email Address -->
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>

                            <!-- Upload Resume -->
                            <div class="form-group mb-3">
                                <label for="resume">Upload Resume</label>
                                <input type="file" class="form-control-file" id="resume" name="resume" required>
                            </div>

                            <!-- Cover Letter -->
                            <div class="form-group mb-3">
                                <label for="coverLetter">Cover Letter</label>
                                <textarea class="form-control" id="coverLetter" name="cover_letter" rows="5" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="butn btn-primary">Submit Application</button>
                        </form>
                    </div>
                </div>
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
