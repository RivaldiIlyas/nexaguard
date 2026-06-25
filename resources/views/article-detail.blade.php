@extends('layouts.app')

@section('content')

<div class="py-5">

    <img src="{{ asset('assets/images/' . $article->image) }}"
         class="img-fluid rounded-4 mb-5">

    <h1 class="fw-bold mb-4">
        {{ $article->title }}
    </h1>

    <p class="hero-text">
        {{ $article->description }}
    </p>

    <a href="/articles" class="btn btn-primary mt-4">
        Back to Articles
    </a>

</div>

@endsection