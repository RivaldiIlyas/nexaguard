@extends('layouts.app')

@section('content')


<section class="py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Our Services
        </h1>

        <p class="hero-text mt-3">
            Professional cyber security solutions
            for modern businesses.
        </p>

    </div>

</section>


<section id="services" class="py-">

    <div class="row">

    @foreach($services as $service)

    <div class="col-lg-4 mb-4">

        <div class="service-card d-flex flex-column h-100">

            <div class="service-icon mb-3">
                🛡️
            </div>

            <h4 class="fw-bold">
                {{ $service->title }}
            </h4>

            <p class="text-secondary mt-3 flex-grow-1">
                {{ $service->description }}
            </p>

            <a href="/services/{{ $service->id }}"
               class="btn btn-primary mt-3 align-self-start">

                Learn More

            </a>

        </div>

    </div>

    @endforeach

</div>

</section>


<section class="py-5">

    <div class="text-center mb-3">

        <h2 class="fw-bold">
            Why Choose NexaGuard
        </h2>

        <p class="hero-text mt-3">
            Trusted technology and cyber security solutions
            for modern businesses.
        </p>

    </div>

    <div class="row">


        <div class="col-lg-3 col-md-6 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    🔒
                </div>

                <h4 class="fw-bold">
                    Advanced Security
                </h4>

                <p class="text-secondary mt-3">
                    Protecting digital infrastructure
                    with modern cyber security systems.
                </p>

            </div>

        </div>


        <div class="col-lg-3 col-md-6 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    ☁️
                </div>

                <h4 class="fw-bold">
                    Cloud Solutions
                </h4>

                <p class="text-secondary mt-3">
                    Reliable and scalable cloud
                    infrastructure for businesses.
                </p>

            </div>

        </div>


        <div class="col-lg-3 col-md-6 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    ⚡
                </div>

                <h4 class="fw-bold">
                    Fast Support
                </h4>

                <p class="text-secondary mt-3">
                    Quick response and professional
                    technical support services.
                </p>

            </div>

        </div>


        <div class="col-lg-3 col-md-6 mb-4">

            <div class="service-card text-center h-100">

                <div class="service-icon mb-3">
                    🌍
                </div>

                <h4 class="fw-bold">
                    Global Technology
                </h4>

                <p class="text-secondary mt-3">
                    Innovative digital solutions
                    for companies worldwide.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection