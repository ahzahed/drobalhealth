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

    {{-- Fontawesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/fontawesome.min.css') }}">

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
</head>


<body class="header-sticky">
   <!--Left Side Buttons Start-->	
      <div class="sticky-left-container">
        <ul class="sticky-left">
          <li>
              <a href="tel:+880132 240 5882" class="text-white">
            <img width="32" height="32" title="" alt="" src="{{ asset('public/frontend/icon/phone.png') }}"/>
            <p>Phone</p>
            </a>
          </li>
          <li>
              <a href="https://wa.me/+8801322405881" class="text-white">
            <img width="32" height="32" title="" alt="" src="{{ asset('public/frontend/icon/whatsapp.png') }}" />
            <p>Whatsapp</p>
            </a>
          </li>
          <li><a href="https://m.me/drobalhealth" class="text-white">
            <img width="32" height="32" title="" alt="" src="{{ asset('public/frontend/icon/messenger.svg') }}" />
            <p>Messenger</p>
            </a>
        </li>
      </ul>
    </div>
<!--Left Side Buttons End-->

    <!-- Header -->
    <header id="header" class="header style1 clearfix">
        <div class="header-inner">
            <div id="logo" class="logo">
                <a href="{{ url('/homemain') }}" rel="home">
                    <img src="{{ asset('public/frontend/images/logo.png') }}" style="height: 55px; width: 180px"
                        alt="Drobal Health Logo">
                </a>
            </div><!-- /.logo -->
            <div class="nav-wrap">
                <div class="btn-menu open"></div><!-- //mobile menu button -->
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="home">
                            <a href="{{ url('/homemain') }}">Home</a>
                        </li>
                        <li><a href="#blog">Blog</a>
                            <ul class="submenu">
                                <li><a href="{{ route('front_all_blogs') }}">Blogs </a></li>
                            </ul><!-- /.submenu -->
                        </li>
                         <li><a href="{{ url('/homemain'.'#services') }}">Services</a></li>
                        <li><a href="{{ url('/homemain'.'#about') }}">About</a></li>
                        <li><a href="{{ url('/homemain'.'#contact') }}">Contact</a></li>
                        @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login')}}</a>
                        </li>
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
                                @if (Auth::user()->user_type=="1" || Auth::user()->user_type=="2" || Auth::user()->user_type=="0")
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
                    <div class="breadcrumbs" style="height: 250px">
                        <ul>
                            {{-- <li><a href="{{ url('/homemain') }}">Home</a></li>
                            <li><a href="#">Detail BLogs</a></li> --}}
                        </ul>
                    </div><!-- /.breadcrumbs -->
                    <div class="page-title-heading">
                        {{-- <h1 class="title">Detail Blogs</h1> --}}
                    </div><!-- /.page-title-captions -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog Posts -->
    <section class="main-content blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="post-wrap">
                        <article class="entry format-standard">
                            <div class="feature-post">
                                <div class="type-post">
                                </div><!-- /.type-post -->
                                <div class="entry-image">
                                    <img src="{{asset($blog->image)}}" style="height: 380px; width: 100%" alt="image">
                                </div><!-- /.entry-image -->
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="entry-title">
                                    {{$blog->title}}
                                </h2>
                                <div class="entry-meta">
                                    <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                    <span class="author font-weight-bold"><a class="font-weight-bold"
                                            href="{{ url('posted_by/'.Crypt::encrypt($blog->user->id)) }}">{{
                                            $blog->user->name }}</a></span>
                                    <span class="comment font-weight-bold"><a class="font-weight-bold" href="#">{{ $blog->user->qualification }}</a></span>
                                      <p class="p-0 m-0"><i class="fas fa-hospital-alt pr-1"></i> {{ $blog->user->hospital }}</p>
                                </div><!-- /.entry-meta -->

                                <div class="entry-content">
                                    {!! $blog->description !!}
                                </div><!-- /.entry-post -->
                                <div class="clearfix"></div>

                                <div class="wrap-share">
                                    <h5>Share: </h5>
                                    <div class="share-post">
                                        <ul class="flat-socials">
                                            <li class="facebook">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="dribbble">
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li class="camera">
                                                <a href="#"><i class="fa fa-camera-retro"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>


                                </div><!-- /.wrap-share -->
                            </div><!-- /.main-post -->
                        </article>
                    </div><!-- /.post-wrap -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <h5 class="widget-title">Search The Blogs</h5>
                            <form action="#" id="searchform" method="get">
                                <div>
                                    <input type="text" id="s" class="sss" placeholder="Search blog ... ">
                                    <input type="submit" value="&#xf002;" id="searchsubmit">
                                </div>
                            </form>
                        </div><!-- /.widget-search -->

                        <div class="widget widget-popular-news">
                            <h5 class="widget-title">latest posts </h5>
                            <ul class="popular-news clearfix">
                                @foreach ($limitedBlogs as $blog)
                                @if ($blog->status=="1")
                                <li>
                                    <div class="thumb">
                                        <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                    </div>
                                    <div class="text">
                                        <p class="date-popular-news">{{ $blog->created_at->diffForHumans() }}</p>
                                        <h6>
                                            <a
                                                href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">{{$blog->title}}</a>
                                        </h6>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                            </ul><!-- /.popular-news -->
                        </div><!-- /.widget-popular-news -->


                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

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
                                 
                                    <a href="mailto:drobal.mt@gmail.com" style="color: #858585">Email:
                                        drobal.mt@gmail.com</a>
                                    <br>
                               
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
                            <p>Copyright ©2021
                                <a href="https://drobalhealth.com.bd/" target="_blank"> Drobal Marketing & Trading
                                </a> All Rights Reserved.
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