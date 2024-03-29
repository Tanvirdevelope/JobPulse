<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Job Pulse</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/assets/img/favicon.jpg')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/toastr/toatr.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/assets/css/style.css')}}">

</head>
<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        <div class="header">
    
            <div class="header-left active">
                <a href="index.html" class="logo"><img src="{{asset('asset/assets/img/logo.png')}}" alt=""></a>
                <a href="index.html" class="logo-small"><img src="{{asset('asset/assets/img/logo-small.png')}}" alt=""></a>
                <a id="toggle_btn" href="javascript:void(0);"></a>
            </div>
    
            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
            </a>
    
            <ul class="nav user-menu">
        
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                        <div class="searchinputs">
                        <input type="text" placeholder="Search Here ...">
                        <div class="search-addon">
                        <span><img src="{{asset('asset/assets/img/icons/closes.svg')}}" alt="img"></span>
                        </div>
                        </div>
                        <a class="btn" id="searchdiv"><img src="{{asset('asset/assets/img/icons/search.svg')}}" alt="img"></a>
                        </form>
                    </div>
                </li>
        
        
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-img"><img src="{{asset('asset/assets/img/profiles/avator1.jpg')}}" alt="">
                    <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                        <div class="profileset">
                        <span class="user-img"><img src="{{asset('asset/assets/img/profiles/avator1.jpg')}}" alt="">
                        <span class="status online"></span></span>
                        <div class="profilesets">
                        <h6>{{ Auth::user()->name }}</h6>
                        </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="{{route('profile.edit')}}"> <i class="me-2" data-feather="user"></i> My Profile</a>
                        <hr class="m-0">
                        <a class="dropdown-item" href="{{ url('/') }}"> <i class="me-2" data-feather="settings"></i> Home Page</a>
                        <hr class="m-0">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item logout pb-0" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <img src="{{asset('asset/assets/img/icons/log-out.svg')}}" class="me-2" alt="img">Logout</a>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
    
    
            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('profile.edit')}}">My Profile</a>
                    <a class="dropdown-item" href="{{ url('/') }}">Home Page</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </div>
    
        </div>
    
        @php
        $role=Auth()->user()->user_role;
        echo $role;
        @endphp
    
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                        <a href="{{ route('home') }}"><img src="{{asset('asset/assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                        </li>
                        <!-- Admin SideBar -->  
                        @if (Auth()->check() && $role == 1)
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/product.svg')}}" alt="img"><span> Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{ route('category-list') }}">Category List</a></li></ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/expense1.svg')}}" alt="img"><span> Companies</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{ route('home') }}">Add Company</a></li>
                            <li><a href="{{ route('company-list') }}">Company List</a></li></ul>
                        </li>

                        <li class="submenu">
                        <a href="{{ route('home') }}"><img src="{{asset('asset/assets/img/icons/purchase1.svg')}}" alt="img"><span> Employee</span></a>
                        </li>

                        <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/expense1.svg')}}" alt="img"><span> Blogs</span> <span class="menu-arrow"></span></a>
                        <ul>
                        <li><a href="{{ route('home') }}">Blogs</a></li>
                        <li><a href="{{ route('home') }}">Blogs List</a></li></ul>
                        </li>


                        <li>
                        <a href="{{ route('home') }}"><i data-feather="layers"></i><span> Pages</span> </a>
                        </li>

                        <li>
                        <a href="{{ route('home') }}"><i data-feather="file"></i><span> Plugins</span> </a>
                        </li>
                        

                        <!-- Company SideBar -->  
                        @elseif (Auth()->check() && $role == 2)

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/expense1.svg')}}" alt="img"><span> Jobs</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{ route('job-create') }}">Add Job</a></li>
                            <li><a href="{{ route('job-list') }}">Job List</a></li></ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/expense1.svg')}}" alt="img"><span> Employee</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="{{ route('company-employee-create') }}">Add Employee</a></li>
                            <li><a href="{{ route('company-employee-list') }}">Employee List</a></li></ul>
                        </li>

                        <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('asset/assets/img/icons/expense1.svg')}}" alt="img"><span> Blogs</span> <span class="menu-arrow"></span></a>
                        <ul>
                        <li><a href="{{ route('home') }}">Categories</a></li>
                        <li><a href="{{ route('home') }}">Posts</a></li></ul>
                        </li>

                        <li>
                        <a href="blankpage.html"><i data-feather="file"></i><span> Plugins</span> </a>
                        </li>
                        <!-- User SideBar -->
                        @elseif (Auth()->check() && $role == 0)

                        <li>
                            <a href="{{ route('job_application_list') }}"><img src="{{asset('asset/assets/img/icons/sales1.svg')}}" alt="img"><span> Job Application</span></a>
                        </li>
                        @endif

                        <li>
                            <a href="{{ route('profile.edit') }}"><img src="{{asset('asset/assets/img/icons/users1.svg')}}" alt="img"><span> Profile Setting</span></a>
                        </li>
                                            
                    </ul>
                </div>
            </div>
        </div>

        <div id="contentRef" class="page-wrapper">
            @yield('content')
        </div>

    </div>


    <script src="{{asset('asset/assets/js/jquery-3.6.0.min.js')}}"></script>    
    <script src="{{asset('asset/assets/js/feather.min.js')}}"></script>    
    <script src="{{asset('asset/assets/js/jquery.slimscroll.min.js')}}"></script>    
    <script src="{{asset('asset/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/assets/js/dataTables.bootstrap4.min.js')}}"></script>    
    <script src="{{asset('asset/assets/js/bootstrap.bundle.min.js')}}"></script>   
    <script src="{{asset('asset/assets/plugins/select2/js/select2.min.js')}}"></script> 
    <script src="{{asset('asset/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('asset/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>
    <script src="{{asset('asset/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('asset/assets/plugins/apexchart/chart-data.js')}}"></script> 
    <script src="{{asset('asset/assets/js/moment.min.js')}}"></script> 
    <script src="{{asset('asset/assets/js/bootstrap-datetimepicker.min.js')}}"></script> 
    <script src="{{asset('asset/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('asset/assets/plugins/toastr/toastr.js')}}"></script> 
    <script src="{{asset('asset/assets/plugins/summernote/summernote-bs4.min.js')}}"></script> 
    <script src="{{asset('asset/assets/js/script.js')}}"></script>



    <script>
        @if (Session::has('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
    </body>
    </html>