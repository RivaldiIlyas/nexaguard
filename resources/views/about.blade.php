@extends('layouts.app')

@section('content')

<div class="py-5">

    <!-- TITLE -->

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            About NexaGuard
        </h1>

        <p class="hero-text mt-3">
            Innovative cyber security and technology solutions
            for modern businesses.
        </p>

    </div>

    <!-- ABOUT SECTION -->

    <div class="row align-items-center mb-5">

        <div class="col-lg-6 mb-4">

            <img src="{{ asset('assets/images/about.jpg') }}"
                 class="img-fluid rounded-4 shadow-lg">

        </div>

        <div class="col-lg-6">

            <h2 class="fw-bold mb-4">
                Secure Your Digital Business
            </h2>

            <p class="hero-text">
                NexaGuard is a cyber security and technology company
                focused on helping businesses protect their systems,
                data, and digital infrastructure from modern threats.
            </p>

            <p class="hero-text mt-4">
                We provide innovative security solutions,
                cloud infrastructure, IT consulting,
                and digital transformation services
                for companies worldwide.
            </p>

        </div>

    </div>

    <!-- STATS -->

    <div class="row text-center">

        <div class="col-md-4 mb-4">

            <div class="service-card">

                <h1 class="fw-bold text-primary">
                    50+
                </h1>

                <p class="text-secondary mt-3">
                    Business Clients
                </p>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="service-card">

                <h1 class="fw-bold text-primary">
                    100+
                </h1>

                <p class="text-secondary mt-3">
                    Security Projects
                </p>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="service-card">

                <h1 class="fw-bold text-primary">
                    24/7
                </h1>

                <p class="text-secondary mt-3">
                    Technical Support
                </p>

            </div>

        </div>

    </div>

</div>

@endsection