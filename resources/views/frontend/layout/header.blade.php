<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">Askco</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo me-auto">
            <img src="assets/img/logo.png" alt="" class="img-fluid">
        </a> --}}

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto @yield('home_menu_active')" href="{{ route('home_page') }}">Home</a></li>
                <li><a class="nav-link scrollto @yield('about_menu_active')" href="{{ route('about_us_page') }}">About us</a></li>
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Service 1</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="#">Service 2</a></li>
                        <li><a href="#">Service 3</a></li>
                        <li><a href="#">Service 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Our Clients</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a> --}}

    </div>
</header>
