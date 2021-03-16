<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Blogs Page</title>
    <meta name="description"
        content="MediCare is a minimal, clean and modern One Page HTML Template for dental clinics and any other medical and healthcare related businesses, such as hospitals, research centers, or pharmacies.">
    <meta name="keywords"
        content=" appointment, clinic, dentist, doctor, health, health care, hospital, hospitality, laboratory, medical, medicine, patient">
    <meta name="author" content="themesflat.com">

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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">The BLogs</a></li>
                        </ul>
                    </div><!-- /.breadcrumbs -->
                    <div class="page-title-heading">
                        <h1 class="title">The Blogs</h1>
                    </div><!-- /.page-title-captions -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog Posts -->
    <section class="main-content blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="post-wrap">
                        @foreach ($blogs as $blog)
                        @if ($blog->status=="1")
                        <article class="entry format-standard">
                            <div class="feature-post">
                                <div class="type-post">
                                </div><!-- /.type-post -->
                                <div class="entry-image">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                </div><!-- /.entry-image -->
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="entry-title"><a href="blog-single.html">{{$blog->title}}</a></h2>
                                <div class="entry-meta">
                                    <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                    <span class="author"><a
                                            href="{{ url('posted_by/'.Crypt::encrypt($blog->user->id)) }}">{{
                                            $blog->user->name }}</a></span>
                                    <span class="comment"><a href="#">{{ $blog->user->qualification }}</a></span>
                                    {{-- <span class="comment"><a href="#">12</a></span>
                                    <span class="vote"><a href="#">20</a></span> --}}
                                </div><!-- /.entry-meta -->
                                <div class="entry-content">
                                    <p>{!! Str::limit($blog->description, 180, $end='...') !!}<span class="more-link">
                                            <a href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">Read More<i
                                                    class="material-icons">chevron_right</i></a>
                                        </span>
                                    </p>
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post -->
                        </article>
                        @endif
                        @endforeach

                        {{ $blogs->links("frontend.blogpaginate") }}

                    </div>
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
                            <h5 class="widget-title">Most Read</h5>
                            <ul class="popular-news clearfix">
                                @foreach ($limitedBlogs as $blog)
                                @if ($blog->status=="1")
                                <li>
                                    <div class="thumb">
                                        <img src="{{$blog->image}}" alt="{{$blog->title}}">
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
                            <a href="http://themeforest.net/user/vinawebsolutions" target="_blank"> Vina Web Solutions
                                Company.</a> All Rights Reserved.
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