@php use Illuminate\Support\Facades\Route; @endphp

<!-- ================= HEADER ================= -->
<header class="marathon-header-fixed header-fixed">
    <a href="#" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="top-panel">
        <div class="container">
            <a href="/" class="logo"><img src="{{ asset('frontend/img/logo-white.svg') }}" alt="logo"></a>
            <ul class="social-list">
                <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="header-nav-cover">
                <nav class="nav-menu menu">
                    <ul class="nav-list">
                        <li class="active-page"><a href="/">Home</a></li>
                        <li><a href="#about">about us</a></li>
                        <li><a href="#schedule">schedule</a></li>
                        <li><a href="#location">location</a></li>
                        <li><a href="#register">register</a></li>
                        <li><a href="#news">news</a></li>
                    </ul>
                </nav>
                <a href="#register" class="btn btn-white"><span>registration</span></a>
                @if(Route::has('filament.admin.auth.login'))
                    @auth()
                        <a href="{{ route('filament.admin.pages.dashboard') }}" target="_blank"
                           class="btn btn-white"><span>dashboard</span></a>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}"
                           target="_blank"
                           class="btn btn-white"
                        >
                            <span>login</span>
                        </a>
{{--                        <a href="{{ route('filament.admin.auth.register') }}"--}}
{{--                           target="_blank"--}}
{{--                           class="btn btn-white"--}}
{{--                        >--}}
{{--                            <span>register</span>--}}
{{--                        </a>--}}
                    @endauth
                @endif
            </div>
        </div>
    </div>
</header>
<!-- =============== HEADER END =============== -->
