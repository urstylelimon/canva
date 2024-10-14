@extends('frontend.app')
@section('title', 'Careers')

@section('content')
    <!-- Banner Section -->
    <div class="banner-section">
        <div class="banner-wrapper">

            <img src="{{ $settings && $settings->career_banner ? asset($settings->career_banner) : asset('img/demo/banner_career.webp') }}"
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
    <section class="career container">
        <div class="image-group career-top ambala-section wow animate__animated animate__zoomIn">
            @foreach (['career_image_1', 'career_image_2', 'career_image_3', 'career_image_4'] as $imageField)
                @if ($content && $content->{$imageField})
                    <div class="image-item image-item-{{ str_replace('career_image_', '', $imageField) }}">
                        <img src="{{ asset($content->{$imageField}) }}"
                            alt="Career Image {{ str_replace('career_image_', '', $imageField) }}"
                            class="img-fluid rounded shadow">
                    </div>
                @endif
            @endforeach
        </div>
        <div class="why-work-with-us-section ambala-section">
            <div class="row text-center g-2">
                <div class="col-md-4">
                    <div class="value-box-1 wow animate__animated animate__bounceIn" data-wow-delay=".2s">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="ambala_heading">Innovative Projects</h3>
                        <p>Work on exciting projects that challenge the status quo and push the boundaries of
                            technology.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box-1 wow animate__animated animate__bounceIn" data-wow-delay=".4s">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="ambala_heading text-nowrap">Collaborative Environment</h3>
                        <p>Join a team of creative and supportive professionals who are passionate about what they do.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box-1 wow animate__animated animate__bounceIn" data-wow-delay=".6s">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="ambala_heading wow">Global Impact</h3>
                        <p>Contribute to projects that make a difference on a global scale, impacting businesses and
                            communities worldwide.</p>
                    </div>
                </div>
            </div>

        </div>
        <div id="openings" class="current-openings ambala-section">
            <div class="">
                <div class="header">
                    <h3 class="ambala_heading wow">
                        "Shape the tech future with us at Workspace Infotech Limited!"
                    </h3>
                    <p class=" ambala_paragraph wow animate__animated animate__fadeInUp">Join our team to empower the
                        next-gen creators.</p>
                </div>

                <!-- Display Jobs -->
                <div class="job-list">
                    @foreach ($jobs as $job)
                        <div class="job-card wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="job-details">
                                <h4>{{ $job->title }}</h4>
                                <div class="job-meta">
                                    <span><i class="fas fa-briefcase"></i> {{ $job->employment_type }}</span>
                                    <div class="job-info">
                                        <p><strong>Vacancy:</strong> {{ $job->vacancy }}</p>
                                        {{-- <p><strong>Deadline:</strong> {{ $job->application_deadline->format('jS F, Y') }} --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="job-action">
                                <a href="{{ route('frontend.jobs.show', $job->slug) }}" class="btn-job-details">Apply
                                    &rarr;</a>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="ambala-section">
            <div class="container">
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <h3 class="ambala_heading wow animate__animated animate__fadeInUp">FAQ</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="accordion" id="faqAccordion">
                            @foreach (json_decode($content->faqs, true) ?? [] as $index => $faq)
                                <div class="accordion-item wow animate__animated animate__fadeInUp"
                                    data-wow-delay=".{{ $index + 2 }}s">
                                    <h2 class="accordion-header" id="faqHeader{{ $index }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq{{ $index }}" aria-expanded="true"
                                            aria-controls="faq{{ $index }}">
                                            {{ $faq['title'] }}
                                        </button>
                                    </h2>
                                    <div id="faq{{ $index }}" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeader{{ $index }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {{ $faq['answer'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var faqAccordion = document.getElementById('faqAccordion');
        var accordionItems = faqAccordion.querySelectorAll('.accordion-button');

        accordionItems.forEach(function(button) {
            button.addEventListener('click', function() {
                var target = document.querySelector(button.getAttribute('data-bs-target'));
                var currentlyActive = faqAccordion.querySelector('.accordion-collapse.show');

                if (currentlyActive && currentlyActive !== target) {
                    currentlyActive.classList.remove('show');
                }

                target.classList.toggle('show');
            });
        });

        // Ensure proper toggle behavior for FAQs and Job Openings
        document.addEventListener('DOMContentLoaded', function() {
            const accordionItems = document.querySelectorAll('.accordion-item .accordion-button');

            accordionItems.forEach(button => {
                button.addEventListener('click', function() {
                    const target = document.querySelector(button.getAttribute('data-bs-target'));
                    const currentlyActive = document.querySelector('.accordion-collapse.show');

                    if (currentlyActive && currentlyActive !== target) {
                        currentlyActive.classList.remove('show');
                    }

                    target.classList.toggle('show');
                });
            });

            // Animate on scroll
            new WOW().init();
        });
    </script>
@endsection
