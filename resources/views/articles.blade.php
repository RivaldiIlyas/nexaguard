@extends('layouts.app')

@section('content')

<div class="py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">
            Latest Articles
        </h1>

        <p class="hero-text mt-3">
            Insights and updates from the cyber security world.
        </p>

    </div>

    <div class="row">

        @foreach($articles as $article)

        <div class="col-lg-4 mb-4">

            <div class="service-card">

                <img src="{{ asset('assets/images/' . $article->image) }}"
                     class="img-fluid rounded-4 mb-4">

                <h4 class="fw-bold">
                    {{ $article->title }}
                </h4>

                <p class="text-secondary mt-3">
                    {{ $article->description }}
                </p>

                <a href="/articles/{{ $article->id }}"
                   class="btn btn-primary mt-3">

                    Read More

                </a>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection