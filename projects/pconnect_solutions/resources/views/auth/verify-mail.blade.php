@extends('layouts.front')
@section('title', __('messages.verify.title'))
@push('css') @endpush


@section('body')
    <div class="container col-md-10 px-4 py-5">
        <div class="mb-4 d-flex justify-content-between">
            <a href="/" class="mb-2">Pconnect <span>Solutions</span></a>
            <h5 class="d-inline-block text-muted fw-normal mb-4 ">{{__('messages.verify.welcome')}}</h5>
        </div>

        <form class="forms-sample" id="verifyMailForm" action="{{ route('send-verify-mail') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{__('messages.verify.mail')}}</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="{{__('messages.verify.mail')}}" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white" id="verifyMailForm">{{__('messages.verify.send_mail')}}</button>
            </div>
            <a href="{{ route('register') }}" class="d-block mt-3 text-muted">{{__('messages.account.create')}}</a>
        </form>
    </div>
@endsection

@push('js')

@endpush
