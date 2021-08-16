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

        {{-- Fontawesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/fontawesome.min.css') }}">

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

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/homemain') }}"><img src="{{ asset('public/frontend/images/logo.png') }}" alt="Drobal Health Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase font-weight-bold">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/homemain') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front_all_blogs') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/homemain'.'#doctor') }}">Our Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/homemain'.'#contact') }}">Contact</a>
                        </li>
                         @guest
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @else
                            <li>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: initial">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>
                                            @if (Auth::user()->user_type=="1" || Auth::user()->user_type=="2" ||
                                    Auth::user()->user_type=="0")


                                    <a class="dropdown-item" href="{{ route('home') }}">Admin Panel</a>
                                    @endif
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <button class="btn btn-primary">Book Now</button>
                        </li>   
                    </ul>
                </div>
            </div>
        </nav>


    <!-- Page Title -->
    <div class="page-title text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs" style="height: 250px">
                        {{-- <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">The BLogs</a></li>
                        </ul> --}}
                    </div><!-- /.breadcrumbs -->
                    <div class="page-title-heading">
                        {{-- <h1 class="title">The Blogs</h1> --}}
                    </div><!-- /.page-title-captions -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <!-- Blog Posts -->
    <section class="main-content blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="post-wrap">
                        @forelse ($blogs as $blog)
                        @if ($blog->status=="1")
                        <article class="entry format-standard">
                            <div class="feature-post pl-0">
                                <div class="entry-image">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->title}}" style="width: 100%; height:auto;">
                                </div><!-- /.entry-image -->
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="entry-title"><a href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">{{$blog->title}}</a></h2>
                                <div class="entry-meta">
                                    {{-- <span class="date">{{ $blog->created_at->diffForHumans() }}</span> --}}
                                    <span class="author font-weight-bold"><a class="font-weight-bold"
                                            href="{{ url('posted_by/'.Crypt::encrypt($blog->user->id)) }}">{{
                                            $blog->user->name }}</a></span>
                                    {{-- <span class="comment font-weight-bold"><a href="#" class="font-weight-bold">{{ $blog->user->qualification }}</a></span> --}}
                                    <p class="p-0 m-0"><i class="fas fa-user-md pr-1"></i> {{ $blog->user->qualification }}</p>
                                    <p class="p-0 m-0"><i class="fas fa-hospital-alt pr-1"></i> {{ $blog->user->hospital }}</p>
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
                        @empty
                        <p>No results found for query <strong>{{request()->query('search')}}</strong></p>
                        @endforelse

                        {{ $blogs->appends(['search'=>request()->query('search')])->links("frontend.blogpaginate") }}

                    </div>
                </div><!-- /.col-md-9 -->
                <div class="col-lg-3 ">
                    <div class="sidebar">
                        <div class="widget widget-search">
                            <h5 class="widget-title mb-2">Search The Blogs</h5>
                            <form action="{{route('front_all_blogs')}}" id="searchform" method="get">
                                <div>
                                    <input name="search" value="{{request()->query('search')}}" type="text" id="s" class="sss" placeholder="Search blog ... ">
                                    <input type="submit" value="&#xf002;" id="searchsubmit">
                                </div>
                            </form>
                        </div><!-- /.widget-search -->




                        <div class="widget widget-popular-news">
                            <h5 class="widget-title mb-3">Most Read</h5>
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
                        <div class="col-md-6">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <img src="{{ asset('public/frontend/images/logo-footer.png') }}" alt="Drobal Health Footer">
                                    <p class="text-justify">Drobalhealth is the first Blogging website in Bangladesh that is completely focused on providing genuine information about treatment, medicine & health issues. This is an informative and educational website, from our website you can learn about the Healthcare industry. Providing premium content about doctors, medical technology and medicine is our main goal.</p>
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-4 -->

                        <div class="col-md-3">
                            <div class="widget widget_text">
                                <h5 class="widget-title">Branch Office 1: </h5>
                                <div class="textwidget">
                                    <p>
                                        House-02, Road-01, Block-C, Section-02, Mirpur-02, Dhaka-1216<br>

                                        <a href="mailto:drobal.mt@gmail.com" style="color: #858585">Email:
                                            drobal.mt@gmail.com</a>
                                        <br>

                                        <a href="tel:+880132 240 5882" style="color: #858585">Phone: 0132 240 5882-5</a>
                                    </p>
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-3">
                            <div class="widget widget_text">
                                <h5 class="widget-title">Branch Office 2: </h5>
                                <div class="textwidget">
                                    <p>
                                        Suite #357, Level #03, VIP Tower, Kazir Dewri, Chattogram, Bangladesh<br>

                                        <a href="mailto:drobal.mt@gmail.com" style="color: #858585">Email:
                                            drobal.mt@gmail.com</a>
                                        <br>

                                        <a href="tel:+880132 240 5882" style="color: #858585">Phone: 0132 240 5882-5</a>
                                    </p>
                                </div>
                            </div><!-- /.widget -->
                        </div><!-- /.col-md-4 -->

                        {{-- <div class="col-md-4">
                            <div class="widget widget_text">
                                <h5 class="widget-title">Working Hours</h5>
                                <div class="textwidget">
                                    <p>
                                        Monday to Friday: 08:00 AM - 17:00 pm<br>
                                        Saturday: 09:00 AM - 15:00 pm<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div> --}}

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
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-ui-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.fitvids.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/main.js') }}"></script>
</body>

</html>