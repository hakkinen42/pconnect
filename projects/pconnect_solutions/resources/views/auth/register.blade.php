@extends("layouts.front")
@section('title', __('messages.title.register'))
@push('css') @endpush


@section('body')
    <div class="container px-4 py-5 mb-4">
        <div class="mb-4 d-flex justify-content-between">
            <a href="/" class="mb-2"><span>[p]</span>connect Solutions GmbH</a>
            <h5 class="d-inline-block text-muted fw-normal mb-4 ">{{__('messages.account.create')}}</h5>
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
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="{{ __('messages.register.mail') }}" value="{{ old('email') }}">
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
                <a href="{{ route('login.socialite', ['driver' => 'google']) }}"
                    class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-google mb-1" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                    </svg>
                    {{ __('messages.register.google') }}
                </a>
            </div>
            <a href="{{ route('login') }}" class="d-block mt-3 text-muted">{{ __('messages.buton.login') }}</a>
        </form>
    </div>
@endsection

@push('js')
    
@endpush