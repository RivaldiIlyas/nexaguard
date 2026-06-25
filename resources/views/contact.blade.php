@extends('layouts.app')

@section('content')

<div class="py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Contact NexaGuard
        </h1>

        <p class="hero-text mt-3">
            Get in touch with our cyber security team.
        </p>

    </div>

    <div class="row g-4 align-items-center">

        <!-- CONTACT INFO -->

        <div class="col-lg-5">

            <div class="service-card h-100">

                <h3 class="fw-bold mb-4">
                    Contact Information
                </h3>

                <p class="hero-text">
                    📧 contact@nexaguard.com
                </p>

                <p class="hero-text">
                    📞 +62 812 3456 7890
                </p>

                <p class="hero-text">
                    📍 Jakarta, Indonesia
                </p>

                <hr class="text-secondary my-4">

                <p class="text-secondary">
                    NexaGuard provides cyber security,
                    cloud infrastructure, and technology
                    consulting solutions for modern businesses.
                </p>

            </div>

        </div>

        <!-- CONTACT FORM -->

        <div class="col-lg-7">

            <div class="service-card">

                <form>

                    <div class="mb-4">

                        <label class="form-label">
                            Full Name
                        </label>

                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Enter your name">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Email Address
                        </label>

                        <input type="email"
                               class="form-control form-control-lg"
                               placeholder="Enter your email">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Subject
                        </label>

                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Enter subject">

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Message
                        </label>

                        <textarea class="form-control form-control-lg"
                                  rows="5"
                                  placeholder="Write your message"></textarea>

                    </div>

                    <button class="btn btn-primary px-5">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection