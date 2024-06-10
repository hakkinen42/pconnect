@extends("layouts.front")
@section('title', __('messages.title.register'))
@push('css') @endpush


@section('body')
    <div class="container px-4 py-5 mb-4">
        <div class="mb-4 row">
            <div class="col-md-6 mb-2">
                <a href="{{ route('index')}}"class="brand" >
                    <span>[p]</span>
                    <div>
                        <span>connect</span> 
                        <span>Intelligente IT-Lösungen</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 align-content-center text-center">
                <h5 class="d-inline-block text-muted fw-normal">{{__('messages.account.create')}}</h5>
            </div>
        </div>
        
        <form class="forms-sample" action="{{ route('register') }}" method="POST" id="registerForm">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="name" class="form-label"> {{ __('messages.register.name') }} {{ __('messages.register.surname') }}</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" id="name" placeholder="{{ __('messages.register.name') }} {{ __('messages.register.surname') }}" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('messages.register.mail') }}</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="{{ __('messages.register.mail') }}" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('messages.register.password') }}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="{{ __('messages.register.password') }}">
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('messages.register.password_confirm') }}</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="{{ __('messages.register.password_confirm') }}">
                @error('password_confirmation')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="authCheck" name="remember">
                <label class="form-check-label" for="authCheck">
                    {{ __('messages.register.remember_me') }}
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0" id="btnRegister">{{ __('messages.buton.register') }}</button>
            </div>
            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">{{ __('messages.buton.login') }}</a>
        </form>
    </div>
@endsection

@push('js')
    
@endpush