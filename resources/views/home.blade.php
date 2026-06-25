@extends('layouts.app')

@section('content')

<!-- HERO -->

<section class="hero">

    <div class="row align-items-center">

        <div class="col-lg-6">

            <h1 class="hero-title">
                Secure Your
                <br>
                Digital Future
            </h1>

            <p class="hero-text mt-4">
                NexaGuard provides innovative cyber security,
                cloud infrastructure, and technology solutions
                for modern businesses worldwide.
            </p>

            <div class="mt-4">

                <a href="/services" class="btn btn-primary me-3">
                    Explore Services
                </a>

                <a href="/contact" class="btn btn-outline-light">
                    Contact Us
                </a>

            </div>

        </div>

        <div class="col-lg-6 text-center">

            <img src="{{ asset('assets/images/about.jpg') }}"
                 class="img-fluid rounded-4 shadow-lg w-75">

        </div>

    </div>

</section>

<!-- FEATURES -->

<section class="py-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">
            Our Core Solutions
        </h2>

        <p class="hero-text mt-3">
            Advanced technology and cyber security services
            for modern digital businesses.
        </p>

    </div>

    <div class="row">

        <!-- FEATURE 1 -->

        <div class="col-lg-4 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    🔒
                </div>

                <h4 class="fw-bold">
                    Cyber Security
                </h4>

                <p class="text-secondary mt-3">
                    Protecting systems and business data
                    from digital threats and cyber attacks.
                </p>

            </div>

        </div>

        <!-- FEATURE 2 -->

        <div class="col-lg-4 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    ☁️
                </div>

                <h4 class="fw-bold">
                    Cloud Infrastructure
                </h4>

                <p class="text-secondary mt-3">
                    Scalable and secure cloud solutions
                    for modern companies and startups.
                </p>

            </div>

        </div>

        <!-- FEATURE 3 -->

        <div class="col-lg-4 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    ⚡
                </div>

                <h4 class="fw-bold">
                    IT Consulting
                </h4>

                <p class="text-secondary mt-3">
                    Strategic technology consulting
                    and digital transformation solutions.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="py-5 text-center">

    <div class="service-card">

        <h2 class="fw-bold">
            Ready to Secure Your Business?
        </h2>

        <p class="hero-text mt-3">
            Contact NexaGuard today and discover
            modern technology solutions for your company.
        </p>

        <a href="/contact" class="btn btn-primary mt-4">
            Get Started
        </a>

    </div>

</section>

@endsection