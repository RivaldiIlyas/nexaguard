@extends('layouts.app')

@section('content')

<div class="py-5">

    <div class="row align-items-center">

        <div class="col-lg-6">

            <img src="{{ asset('assets/images/service.jpg') }}"
                 class="img-fluid rounded-4 shadow-lg">

        </div>

        <div class="col-lg-6">

            <h1 class="fw-bold mb-4">
                {{ $service->title }}
            </h1>

            <p class="hero-text">
                {{ $service->description }}
            </p>

            <p class="text-secondary mt-4">
                NexaGuard provides professional and reliable
                technology solutions to help businesses
                improve security, infrastructure,
                and digital transformation.
            </p>

            <a href="/services" class="btn btn-primary mt-4">
                Back to Services
            </a>

        </div>

    </div>

</div>

@endsection