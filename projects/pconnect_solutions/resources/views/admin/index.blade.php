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
                    <p><b>{{ __('home.user.name') }}</b>{{ucwords($user->name)}}</p>
                    <p><b>{{ __('home.user.mail') }}</b>{{$user->email}}</p>
                    <a href="{{URL::previous()}}" class="btn btn-primary my-2 float-end">
                        {{ __('home.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection