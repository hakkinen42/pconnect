<nav class="navbar navbar-expand-md bg-dark py-1 ">
    <div class="container-fluid bg-warning py-1">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="{{ route('index')}}"><span>[p]</span>connect Solutions GmbH</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("login")}}">{{ __('messages.navbar.login') }}</a>
                </li>
                <li class="nav-item">
                    <a id="cta-button"class="nav-link" href="{{ route("register")}}">{{ __('messages.navbar.register') }}</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home")}}">{{ __('messages.navbar.about') }}</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" onclick="event.preventDefault();document.getElementById('logoutForm').submit()"      class="nav-link">
                        <i class="me-2 icon-md" data-feather="log-out"></i>
                        <span>{{ __('messages.navbar.logout') }}</span>
                    </a>
                    <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                        @csrf
                    </form>
                </li>
                @endauth
                <li class="nav-item dropdown m-e-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" data-bs-toggle="dropdown"     aria-expanded="false">
                        <img class="mx-2" src="{{ asset('/assets/blade-flags/language-'. App::getLocale().'.svg') }}"  width="32"    height="32"/>{{ config('languages.' . App::getLocale()) }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                        @foreach(config('languages') as $lang => $language)
                        @if ($lang!= App::getLocale())
                        <a class="dropdown-item" href="{{ route('change.language',$lang) }}">
                            <img class="mx-2" src="{{ asset('/assets/blade-flags/language-'."$lang".'.svg') }}"width="32"      height="32"/>{{ $language }}
                        </a>
                        @endif

                        @endforeach

                    </div>
                </li>
            </ul>            
        </div> 
    </div>
</nav>

