<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Job Pulse</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="{{asset('./assets/img/favicon.png')}}" />
    {{-- href="{{asset('')}}" --}}
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('./assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/animationtabs.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/backtotop.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/font-awesome-pro.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/jQueryTab.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/marquee.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/meanmenu.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/owl-carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/spacing.css')}}" />
    <link rel="stylesheet" href="{{asset('./assets/css/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/toastr/toatr.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}" />


</head>

<body>

    <!-- Preloader Start-->
    <div class="preloader">
        <div class="swapping-squares-spinner">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <div>
        @yield('content')
    </div>

    <!-- JS here -->
    <script src="{{asset('./assets/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('./assets/js/vendor/waypoints.js')}}"></script>
    <script src="{{asset('./assets/js/emailjs.js')}}"></script>
    <script src="{{asset('./assets/js/backtotop.js')}}"></script>
    <script src="{{asset('./assets/js/bootstrap-bundle.js')}}"></script>
    <script src="{{asset('./assets/js/counterup.js')}}"></script>
    <script src="{{asset('./assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('./assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.knob.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.scrollbox.js')}}"></script>
    <script src="{{asset('./assets/js/jQueryTab.js')}}"></script>
    <script src="{{asset('./assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('./assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('./assets/js/nice-select.js')}}"></script>
    <script src="{{asset('./assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('./assets/js/parallax.js')}}"></script>
    <script src="{{asset('./assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('./assets/js/wow.js')}}"></script>        
    <script src="{{asset('asset/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('asset/assets/plugins/toastr/toastr.js')}}"></script>
    <script src="{{asset('./assets/js/main.js')}}"></script>

    <script>
        @if (Session::has('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
        
    
    
    </body>
    
    </html>