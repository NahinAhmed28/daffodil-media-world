<header id="header" class="fixed-top header-scrolled">
    <div class="container d-flex align-items-center justify-content-between">

{{--        <h1 class="logo"><a href="#">Public Side</a></h1>--}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#" class="logo"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid"></a>


        <nav id="navbar" class="navbar">

            <ul>
                <li><a class="nav-link scrollto active" href="{{route('public')}}">Home</a></li>

                <li><a class="nav-link scrollto" href="{{route('public.service')}}">Services</a></li>
                <li class="dropdown"><a href="#"><span>Approach</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('public.about')}}">About</a></li>
                        <li><a href="{{route('public.mission')}}">Mission And Vision</a></li>
                        <li><a href="{{route('public.expertise')}}">Expertise</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="{{route('public.organization')}}">Organization</a></li>
                <li><a class="nav-link scrollto" href="{{route('public.gallery')}}">Gallery</a></li>
                <li><a class="nav-link scrollto" href="{{route('public.contact')}}">Contact</a></li>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <li><a href="{{ url('/home') }}" class="nav-link scrollto">Admin Panel</a></li>
                        @else
                            <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                        @endauth
                    </div>
                @endif

                {{--                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
