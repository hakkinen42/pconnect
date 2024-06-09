@extends("layouts.front")

@section("title", __('messages.title.homepage'))
@push("css")
    <link rel="stylesheet" href="app.css">
@endpush

@section("body")

    <div id="body" class="container my-5 p-3 text-center">
        <h1 class="display-4 animate__animated animate__zoomIn">{{ __('messages.welcome', ['username' => $user ? $user->name : '']) }}</h1>
        <p class="lead animate__animated animate__zoomIn animate__delay-1s">{{ __('messages.welcome', ['username' => $user ? $user->name : '']) }}</p>
    </div>
@endsection

@push("js")

@endpush