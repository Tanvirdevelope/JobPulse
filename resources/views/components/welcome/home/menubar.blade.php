    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- Top Intro Section Start -->

    <div class="top-header d-none d-lg-block">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8">

                    <div class="left-wrapper">
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="news-intro simple-marquee-container">
                            <div id="topHeader" class="scroll-text">
                                <ul>
                                    <li><a href="#">
                                            Building structures are generally constructed on concrete foundations.
                                        </a></li>
                                    <li><a href="#">
                                            The superstructure is constructed once the substructure is complete.
                                        </a></li>
                                    <li><a href="#">
                                            Within this period, any defects found in building must be fixed
                                            and replaced.
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-wrapper">
                        <div class="login-reg">
                            <div class="inner">
                                @if (Route::has('login'))
                                    <div>
                                        @auth
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <span><a href="{{ url('/home') }}">Dashboard</a></span>
                                        @else
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <span><a href="{{ route('login') }}">Login</a></span>
                    
                                            @if (Route::has('register'))
                                                <span>/</span>
                                                <span><a href="{{ route('register') }}">Register</a></span>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- <span><i class="fa-solid fa-user"></i></span>
                    <span>
                        <a href="#">Login</a> / <a href="#">Registration</a>
                    </span> --}}


                </div>
            </div>
        </div>
    </div>

    <!-- Top Intro Section End -->

    <!-- header-area-start -->
    <header id="header-sticky" class="header-intro-version-two-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo-area">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('./assets/img/common/job.png')}}" alt="Roralex"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-6 ">
                    <div class="menu-body">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/jobs') }}">Jobs</a>                                       
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Blogs</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                                            <li><a href="{{ url('/blogs') }}">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="side-menu-icon d-lg-none text-end">
                        <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i
                                class="fal fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- mobile sidebar area start -->
    <div class="mobile-sidebar-area">
        <div class="sidebar__wrapper">
            <div class="sidebar__close">
                <button class="sidebar__close-btn" id="sidebar__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="sidebar__logo mb-20">
                    <a href="index.html">
                        <img src="{{asset('assets/img/common/Logo_Black.png')}}" alt="logo">
                    </a>
                    <p>Trusted Contraction service!</p>
                </div>
                <div class="sidebar__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="Find A Construction Service!">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="sidebar__contact  mb-20">
                    <h4>Contact With US</h4>
                    <div class="sidebar__social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="location-email-intro mobile">
                        <div class="inner-location-email-intro pr-30">
                            <div class="inner">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span class="text">Location</span>
                            </div>
                            <h5 class="text">4043 Riverside Augusta</h5>
                        </div>
                        <div class="inner-location-email-intro pt-5">
                            <div class="inner">
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <span class="text">Get In Touch</span>
                            </div>
                            <h5 class="text">info@roralex.com</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- mobile sidebar area end -->
    <main>