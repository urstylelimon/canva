@extends('frontend.app')
@section('title', $job->title)

@section('content')

    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">

            <img src="{{ $settings && $settings->job_banner ? asset($settings->job_banner) : asset('img/demo/job_banner.webp') }}"
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

    <!-- Job Details Section -->
    <section class="job-details-section py-5">
        <div class="container">
            <div class="row">
                <!-- Job Summary -->
                <div class="col-lg-8 wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">
                    <div class="job-summary p-5 bg-white rounded shadow-lg position-relative">
                        <h2 class="job-title mb-3">{{ $job->title }}</h2>
                        <p class="job-salary mb-4">{{ $job->salary }} BDT/Month</p>

                        <div class="job-meta d-flex flex-wrap mb-4">
                            <span><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                            <span><i class="fas fa-briefcase"></i> {{ $job->employment_type }}</span>
                            <span><i class="fas fa-users"></i> Vacancy: {{ $job->vacancy }}</span>
                            <span><i class="fas fa-calendar-alt"></i> Deadline:
                                {{ \Carbon\Carbon::parse($job->application_deadline)->format('jS F, Y') }}</span>
                        </div>

                        <div class="job-description">
                            <h3 class="mb-3">Job Summary</h3>
                            <p>{{ $job->job_description }}</p>

                            <h3 class="mt-4 mb-3">Key Responsibilities</h3>
                            <ul>
                                @foreach (explode("\n", $job->responsibilities) as $responsibility)
                                    <li>{{ $responsibility }}</li>
                                @endforeach
                            </ul>

                            <h3 class="mt-4 mb-3">Qualifications</h3>
                            <ul>
                                @foreach (explode("\n", $job->qualifications) as $qualification)
                                    <li>{{ $qualification }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Apply Now Sidebar -->
                <div class="col-lg-4 wow animate__animated animate__fadeInRight" data-wow-delay=".2s">
                    <div class="apply-sidebar p-5 bg-white rounded shadow-xl position-relative">
                        <div class="apply-box text-center mb-4">
                            <p class="font-italic">Ready to apply? We can’t wait to meet you!</p>
                            <a href="{{ route('frontend.apply', ['slug' => $job->slug]) }}"
                                class="btnn text-uppercase">Apply now at
                                Ambala It</a>

                            <p class="apply-note mt-4">Next, you’ll face an assessment to proceed. Apply for one job at a
                                time and prepare well.</p>
                            <p class="apply-privacy mt-2">* By applying for this job listing, you agree to our <a
                                    href="#" class="text-info">Data Privacy Policy</a>.</p>
                        </div>

                        <div class="benefits-box">
                            <h3 class="mb-3">Basics & Benefits</h3>
                            <ul class="benefits-list">
                                <li>Exceptional work culture and environment</li>
                                <li>Free meals, coffee, and snacks</li>
                                <li>Full-size gym to support wellness and fitness</li>
                                <li>Facilities for both indoor and outdoor sports</li>
                                <li>Free shuttle service (subject to route availability)</li>
                                <li>Parking facility (subject to availability)</li>
                                <li>Two festival bonuses</li>
                                <li>Leave encashment</li>
                                <li>Loyalty bonus</li>
                                <li>Maternity and paternity leaves</li>
                                <li>Designated areas for male and female Muslim prayers</li>
                            </ul>
                        </div>

                        <div class="social-share text-start mt-5">
                            <h3 class="mb-4">Share</h3>
                            <a href="#" class="share-icon"><i class="fab fa-xing fa-3x"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-linkedin fa-3x"></i></a>
                            <a href="#" class="share-icon"><i class="fab fa-facebook fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    /* Add your CSS styles here as needed */
</style>

<style>
    /* Banner Section */
    .banner-section {
        position: relative;
        text-align: center;
        color: #fff;
        overflow: hidden;
    }

    .banner-wrapper img {
        width: 100%;
        height: auto;
        max-height: 450px;
        object-fit: cover;
        filter: brightness(0.6);
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .banner-text h1 {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #ffffff;
    }

    .banner-text p {
        font-size: 1.5rem;
        font-weight: 500;
        color: #ffffff;
    }

    /* Job Details Section */
    .job-details-section {
        padding: 70px 0;
        background-color: #f7f9fc;
    }

    .job-title {
        font-size: 2.5rem;
        color: #007bff;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .job-salary {
        font-size: 1.5rem;
        color: #28a745;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .job-meta span {
        font-size: 1rem;
        color: #6c757d;
        margin-right: 15px;
    }

    .job-description h3 {
        margin-top: 40px;
        font-size: 1.8rem;
        color: #343a40;
        font-weight: 600;
    }

    .job-description ul {
        list-style: none;
        padding-left: 0;
    }

    .job-description ul li {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
    }

    .job-description ul li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #007bff;
        font-size: 1.5rem;
    }

    /* Apply Sidebar */
    .apply-sidebar {
        background-color: #ffffff;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .apply-box p {
        font-size: 1rem;
        color: #6c757d;
    }

    .btn-apply {
        display: inline-block;
        background-color: #007bff;
        color: #ffffff;
        padding: 12px 24px;
        border-radius: 30px;
        text-transform: uppercase;
        font-size: 1rem;
        font-weight: 700;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-apply:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .apply-note {
        font-size: 0.9rem;
        color: #6c757d;
        margin-top: 20px;
    }

    .apply-privacy a {
        color: #007bff;
        text-decoration: none;
    }

    .benefits-box h3 {
        font-size: 1.5rem;
        color: #343a40;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .benefits-list {
        list-style: none;
        padding-left: 0;
    }

    .benefits-list li {
        font-size: 1rem;
        color: #495057;
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
    }

    .benefits-list li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #28a745;
        font-size: 1.5rem;
    }

    /* Social Share */
    .social-share {
        text-align: left;
    }

    .btnn {
        display: inline-block;
        border: 1px solid var(--red);
        padding: 14px 18px;
        text-transform: uppercase;
        font-family: 'Noto Sans', sans-serif;
        font-size: 0.9rem;
        letter-spacing: 2px;
        color: var(--white);
        text-decoration: none;
        background: rgba(255, 0, 0, 0.719);
    }

    .btnn:hover {
        display: inline-block;
        border: 1px solid var(--red);
        padding: 14px 18px;
        text-transform: uppercase;
        font-family: 'Noto Sans', sans-serif;
        font-size: 0.9rem;
        letter-spacing: 2px;
        color: var(--white);
        text-decoration: none;
        background: rgba(255, 0, 0, 0.884);
    }


    /* Responsive Styles */
    @media (max-width: 768px) {
        .banner-text h1 {
            font-size: 2.5rem;
        }

        .banner-text p {
            font-size: 1.2rem;
        }

        .job-title {
            font-size: 2rem;
        }

        .job-salary {
            font-size: 1.2rem;
        }

        .job-description h3 {
            font-size: 1.5rem;
        }
    }
</style>
