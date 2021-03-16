<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Blog Details</title>
    <meta name="description"
        content="MediCare is a minimal, clean and modern One Page HTML Template for dental clinics and any other medical and healthcare related businesses, such as hospitals, research centers, or pharmacies.">
    <meta name="keywords"
        content=" appointment, clinic, dentist, doctor, health, health care, hospital, hospitality, laboratory, medical, medicine, patient">
    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/bootstrap.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/colors/color1.css') }}"
        id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('public/frontend/icon/apple-touch-icon-48-precomposed.png') }}"
        rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{ asset('public/frontend/icon/apple-touch-icon-32-precomposed.png') }}"
        rel="apple-touch-icon-precomposed">
    <link href="{{ asset('public/frontend/icon/favicon.png') }}" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
    <style>
        .product_item .product_details h5 {
            margin-bottom: 5px
        }

        .product_item .product_details h5 a {
            font-size: 16px;
            color: #444
        }

        .product_item .product_details h5 a:hover {
            text-decoration: none
        }

        .card {
            background: #fff;
            margin-bottom: 30px;
            transition: .5s;
            border: 0;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
        }

        .card .body {
            font-size: 14px;
            color: #424242;
            padding: 20px;
            font-weight: 400;
        }
    </style>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6048c4c61c1c2a130d67056d/1f0e41abi';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body class="header-sticky">

    <!-- Header -->
    <header id="header" class="header style1 clearfix">
        <div class="header-inner">
            <div id="logo" class="logo">
                <a href="{{ url('/') }}" rel="home">
                    <img src="{{ asset('public/frontend/images/logo.png') }}" style="height: 55px; width: 180px"
                        alt="Drobal Health Logo">
                </a>
            </div><!-- /.logo -->
            <div class="nav-wrap">
                <div class="btn-menu open"></div><!-- //mobile menu button -->
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="home">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li><a href="#blog">Blog</a>
                            <ul class="submenu">
                                <li><a href="{{ route('front_all_blogs') }}">Blogs </a></li>
                            </ul><!-- /.submenu -->
                        </li>
                        <li><a href="{{ url('/'.'#services') }}">Services</a></li>
                        <li><a href="{{ url('/'.'#about') }}">About</a></li>
                        <li><a href="{{ url('/'.'#contact') }}">Contact</a></li>
                        @guest
                        {{-- <li>
                            <span><a href="{{ route('login') }}">{{ __('Login')}}</a></span>
                        </li> --}}
                        @else
                        <li><a href="#">{{ Auth::user()->name }}</a>
                            <ul class="submenu" style="width: 100%">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                                {{-- @if (Auth::user()->user_type=="0")
                                <a href="#">Home</a> --}}
                                @if (Auth::user()->user_type=="1" || Auth::user()->user_type=="2")
                                <li><a href="{{ route('home') }}">Admin Panel</a></li>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        @endguest
                    </ul><!-- /.menu -->
                </nav><!-- /.mainnav -->
            </div><!-- /.nav-wrap -->
        </div><!-- /.header-inner -->
    </header><!-- /.header -->

    <!-- Page Title -->
    <div class="page-title text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                    <div class="page-title-heading">
                        <h1 class="title">Profile</h1>
                    </div><!-- /.page-title-captions -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <div class="container">
        <div class="row py-5 px-4">
            <div class="col-md-12 mx-auto">
                <!-- Profile widget -->
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 cover">
                        <div class="media align-items-end profile-head">
                            <div class="profile mr-3"><img
                                    src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                    alt="..." width="130" class="rounded mb-2 img-thumbnail"></div>
                            <div class="media-body mb-5 text-white">
                                <h4 class="mt-0 mb-0">{{$user->name}}</h4>
                                <p class="small mb-0 text-dark"> <i
                                        class="fas fa-map-marker-alt mr-2"></i>{{$user->speciality}}</p>
                                <p class="small mb-0 text-dark"> <i
                                        class="fas fa-map-marker-alt mr-2"></i>{{$user->qualification}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-3">
                        <h5 class="mb-0">About</h5>
                        <div class="p-4 rounded shadow-sm bg-light">
                            {!! $user->description !!}
                        </div>
                    </div>
                    <div class="py-4 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Posts</h5>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-6 mb-2 pr-lg-1"><img src="" alt=""
                                    class="img-fluid rounded shadow-sm"></div> --}}
                            <link rel="stylesheet"
                                href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
                            <div class="container">
                                <div class="row clearfix">
                                    @foreach ($blogs as $blog)
                                    @if ($blog->status=="1")
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <a href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">
                                            <div class="card product_item">
                                                <div class="body">
                                                    <div class="cp_img">
                                                        <img src="{{asset($blog->image)}}" alt="{{$blog->name}}"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="product_details">
                                                        <h6 class="pt-1">{{$blog->title}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <div class="textwidget">
                                <img src="{{ asset('public/frontend/images/logo-footer.png') }}" alt="images">
                                <p>Lorem ipsum dolor sit amet, consectetur elit. Pellentesque quis nunc turpis.
                                    Phasellus ut aliquam nisl eleifend risus.</p>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <h5 class="widget-title">Contact us</h5>
                            <div class="textwidget">
                                <p>
                                    Adress: House-1, Road-1, Gate-5, Block-B, Lalmatia, Dhaka.<br>
                                    <a href="mailto:shakhawatkhan8@gmail.com" style="color: #858585">Email:
                                        shakhawatkhan8@gmail.com</a><br>
                                    <a href="mailto:drobal.mt@gmail.com" style="color: #858585">Email:
                                        drobal.mt@gmail.com</a>
                                    <br>
                                    <a href="tel:+8801976355573" style="color: #858585">Phone: +8801976355573</a><br>
                                    <a href="tel:+880132 240 5882" style="color: #858585">Phone: 0132 240 5882-5</a>
                                </p>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <h5 class="widget-title">Working Hours</h5>
                            <div class="textwidget">
                                <p>
                                    Monday to Friday: 08:00 AM - 17:00 pm<br>
                                    Saturday: 09:00 AM - 15:00 pm<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->

        <!-- Go Top -->
        <a class="go-top style1">
            <i class="zmdi zmdi-long-arrow-up"></i>
        </a>

    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                        <p>Copyright ©2016
                            <a href="http://modernwebtemplates.com" target="_blank"> Vina Web Solutions Company.</a>All
                            Rights Reserved.
                        </p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <!-- Go Top -->
    <a class="go-top">
        <i class="zmdi zmdi-long-arrow-up"></i>
    </a>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-ui-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/main.js') }}"></script>
</body>

</html>