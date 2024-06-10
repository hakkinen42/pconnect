@extends('layouts.front')

@section("title", __('messages.title.about'))

@push("css")
@endpush
@section('body')
<div class="container col-md-6 my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('home.user.detail') }}</div>
                <div class="card-body">
                    <p>{{ __('home.user.name',['name' => $user ? ucwords($user->name) :'']) }}</p>
                    <p>{{ __('home.user.mail',['mail' => $user ? $user->email :'']) }}</p>
                    <a href="{{route('index')}}" class="btn btn-success my-2 float-end">
                        {{ __('home.home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection