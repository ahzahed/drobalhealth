<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Drobal Health</title>
    <meta name="description"
        content="MediCare is a minimal, clean and modern One Page HTML Template for dental clinics and any other medical and healthcare related businesses, such as hospitals, research centers, or pharmacies.">
    <meta name="keywords"
        content=" appointment, clinic, dentist, doctor, health, health care, hospital, hospitality, laboratory, medical, medicine, patient">
    <meta name="drobalhealth" content="https://drobalhealth.com.bd/">

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

<body class="page-template-front-page header-sticky home">
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    <!-- Boxed -->
    <div class="boxed">

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
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
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
                                    @if (Auth::user()->user_type=="1" || Auth::user()->user_type=="2" ||
                                    Auth::user()->user_type=="0")
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

        <!-- Slider -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{ asset('public/frontend/images/slides/1.jpg') }}" alt="slider-image" />

                        <div class="tp-caption sfl flat-title-slider" data-x="15" data-y="276" data-speed="1000"
                            data-start="1000" data-easing="Power3.easeInOut">Achiteve Your <br> Desired Perfect
                            <br>Smile
                        </div>

                        <div class="tp-caption sfl flat-content-slider" data-x="15" data-y="580" data-speed="1000"
                            data-start="1500" data-easing="Power3.easeInOut">A full range of cosmetic dentistry
                            treatment <br>to improve Your smile!</div>

                        <div class="tp-caption sfl flat-button" data-x="15" data-y="682" data-speed="1000"
                            data-start="2000" data-easing="Power3.easeInOut"><a href="#">Appointment<i
                                    class="material-icons">edit</i></a></div>

                        <div class="tp-caption flat-scroll-btn animated bounce" data-x="585" data-y="953"><i
                                class="icon-mouse icons"></i></div>

                    </li>

                    <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000"
                        data-saveperformance="on">
                        <img src="{{ asset('public/frontend/images/slides/2.jpg') }}" alt="slider-image" />

                        <div class="tp-caption sfb flat-subtitle-slider" data-x="15" data-y="322" data-speed="1000"
                            data-start="1000" data-easing="Power3.easeInOut">Improve Your </div>

                        <div class="tp-caption sft flat-title-slider style1" data-x="15" data-y="382" data-speed="1000"
                            data-start="1500" data-easing="Power3.easeInOut">
                            DENTAL HEALTH</div>

                        <div class="tp-caption sfl flat-content-slider style1" data-x="15" data-y="518"
                            data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">The Latest Trends In
                            Esthetic Dental Care</div>

                        <div class="tp-caption sfl flat-button" data-x="15" data-y="596" data-speed="1000"
                            data-start="2500" data-easing="Power3.easeInOut"><a href="#">Appointment<i
                                    class="material-icons">edit</i></a></div>

                        <div class="tp-caption flat-scroll-btn animated bounce" data-x="585" data-y="953"><i
                                class="icon-mouse icons"></i></div>

                    </li>

                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000"
                        data-saveperformance="on">
                        <img src="{{ asset('public/frontend/images/slides/3.jpg') }}" alt="slider-image" />

                        <div class="tp-caption sfl flat-subtitle-slider3" data-x="390" data-y="366" data-speed="1000"
                            data-start="1000" data-easing="Power3.easeInOut">High Quality Of Dantal Care</div>

                        <div class="tp-caption sfl flat-title-slider3" data-x="210" data-y="422" data-speed="1000"
                            data-start="1500" data-easing="Power3.easeInOut">Welcome to <span>Medicare</span></div>

                        <div class="tp-caption sfl flat-button border-white" data-x="400" data-y="603" data-speed="1000"
                            data-start="2000" data-easing="Power3.easeInOut"><a href="#">view detail<i
                                    class="material-icons">chevron_right</i></a></div>

                        <div class="tp-caption sfr flat-button border-white" data-x="589" data-y="603" data-speed="1000"
                            data-start="2000" data-easing="Power3.easeInOut"><a href="#">Appointment<i
                                    class="material-icons">edit</i></a></div>

                        <div class="tp-caption flat-scroll-btn animated bounce" data-x="585" data-y="953"><i
                                class="icon-mouse icons"></i></div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Entry Page -->
        <div class="entry-page">

            <!-- About -->
            <section id="about" class="flat-row row-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="flat-divider d6px"></div>
                            <div class="singleimages-border">
                                <img src="{{ asset('public/frontend/images/blog/about.jpg') }}" alt="images">
                            </div>
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-7">
                            <div class="about-wrap padding-left61px">
                                <div class="title-box">
                                    <h4 class="sub-title">Welcome to DrobalHealth</h4>
                                    <h2 class="main-title">What we do</h2>
                                </div><!-- /.title-box -->
                                <p class="text-justify">Drobal International Healthcare Pvt. Ltd is a Healthcare based
                                    marketing company which is located in Chennai and having offices in Siliguri, West
                                    Bengal & Dhaka Bangladesh. Directors of the company are Doctors, Doctorate in
                                    pharmacy and Healthcare Professional with a decade Experience in Medical Tourism
                                    with success. We already conducted so many National and International OPD campaign,
                                    CME and Exhibitions. On this long period of journey in Healthcare we made excellent
                                    tie-ups and associate in every required location. Our team is providing excellent
                                    results in Healthcare marketing to our clients.</p>
                                <p>
                                <div class="flat-divider d26px"></div>
                                <a class="flat-button" href="#">Our Team
                                    <i class="material-icons">supervisor_account</i></a>
                            </div><!-- /.about-wrap -->
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->

                    <div class="row margin-top93px">
                        <div class="col-md-3">
                            <div class="flat-counter">
                                <div class="icon-counter">
                                    <i class="zmdi zmdi-male-female"></i>
                                </div>
                                <div class="content-counter">
                                    <div class="numb-count" data-to="3928" data-speed="2000" data-waypoint-active="yes">
                                        3928</div>
                                    <div class="name-count">Happy Clients</div>
                                </div>
                            </div><!-- /.flat-counter -->
                        </div>

                        <div class="col-md-3">
                            <div class="flat-counter ">
                                <div class="icon-counter">
                                    <i class="material-icons">healing</i>
                                </div>
                                <div class="content-counter">
                                    <div class="numb-count" data-to="650" data-speed="2000" data-waypoint-active="yes">
                                        650</div>
                                    <div class="name-count">Equipment</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="flat-counter ">
                                <div class="icon-counter">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content-counter facebook-like">
                                    <div class="numb-count" data-to="15" data-speed="2000" data-waypoint-active="yes">15
                                    </div>
                                    <div class="name-count">Facebook Likes</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="flat-counter ">
                                <div class="icon-counter">
                                    <i class="material-icons">favorite_border</i>
                                </div>
                                <div class="content-counter">
                                    <div class="numb-count" data-to="55" data-speed="2000" data-waypoint-active="yes">55
                                    </div>
                                    <div class="name-count">Our Doctor</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>

            <!-- Latest Blogs -->
            <section id="blog" class="flat-row row-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section">
                                <h1 class="title" data-text="B">Our <span>Blogs</span></h1>
                            </div><!-- /.title-section -->
                        </div><!-- /.col-md-12 -->
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                        @if ($blog->status=="1")
                        <div class="col-md-6">
                            <div class="flat-latest-blog">
                                <article class="entry format-standard">
                                    <div class="feature-post">
                                        <div class="type-post">
                                        </div><!-- /.type-post -->
                                        <div class="entry-image">
                                            <img src="{{$blog->image}}" style="height: 350px; width: 100%"
                                                alt="{{ $blog->title }}">
                                        </div><!-- /.entry-image -->
                                    </div><!-- /.feature-post -->

                                    <div class="main-post">
                                        <h2 class="entry-title"><a
                                                href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">{{
                                                $blog->title }}</a></h2>
                                        <div class="entry-meta">
                                            <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                            <span class="author"><a
                                                    href="{{ url('posted_by/'.Crypt::encrypt($blog->user->id)) }}">{{
                                                    $blog->user->name }}</a></span>
                                            <span class="comment"><a href="#">{{ $blog->user->qualification
                                                    }}</a></span>
                                            {{-- <span class="vote"><a href="#">20</a></span> --}}
                                        </div><!-- /.meta-post -->
                                        <div class="entry-content">
                                            <p>{!! Str::limit($blog->description, 180, $end='...') !!}
                                                {{-- <span>[...]</span> --}}
                                                <span class="more-link">
                                                    <a href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">Read
                                                        More<i class="material-icons">chevron_right</i></a>
                                                </span>
                                            </p>
                                        </div><!-- /.entry-post -->
                                    </div><!-- /.main-post -->
                                </article>
                            </div><!-- /.flat-latest-blog -->
                        </div><!-- /.col-md-6 -->
                        @endif
                        @endforeach

                    </div>
                    {{ $blogs->links("frontend.paginate") }}
                </div><!-- /.container -->
            </section>



            <!-- IconBox -->
            <section id="services" class="flat-row nopad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-nopad">
                            <div class="single-images">
                                <img src="{{ asset('public/frontend/images/blog/services.jpg') }}" alt="images">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="flat-divider d100px"></div>
                            <div class="title-section desc">
                                <h1 class="title" data-text="S">Our<span>Services</span></h1>
                                <div class="desc">Lorem ipsum dolor sit amet sed tincidunt suscipit id malesuada.</div>
                            </div><!-- /.title-section -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flat-iconbox icon-right">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon1.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Oral Surgery</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Teleconsultation with Best Indian
                                                Specialist Doctors</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon2.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Dental Care</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Treatment Guidance from Professional
                                                Doctors</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon3.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Cosmetic Dentistry</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Regular follow up by Local doctors
                                            </h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon3.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Cosmetic Dentistry</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Follow up consultation with Indian
                                                doctors after procedure</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon3.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Cosmetic Dentistry</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Multilingual Translator services
                                            </h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->
                                </div>

                                <div class="col-md-6">
                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon4.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Teeth Cleaning</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Visa invitation, Visa & Ticketing
                                                services</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon5.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Oral Hygienist</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Stay arrangements</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon6.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Care Advice</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Local sightseeing arrangements</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon6.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Care Advice</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Medicine from India</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon6.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Care Advice</div> --}}
                                            <h6><i class="fas fa-check-double"></i> Family members/attender's whole body
                                                checkup</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        {{-- <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon6.png') }}"
                                                alt="images">
                                        </span> --}}
                                        <div>
                                            {{-- <div class="title">Care Advice</div> --}}
                                            <h6><i class="fas fa-check-double"></i> 24*7 support services</h6>
                                        </div>
                                    </div><!-- /.flat-icon-box -->
                                </div>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div>
                </div>
            </section>
            {{-- <section id="services" class="flat-row nopad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-nopad">
                            <div class="single-images">
                                <img src="{{ asset('public/frontend/images/blog/services.jpg') }}" alt="images">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="flat-divider d100px"></div>
                            <div class="title-section desc">
                                <h1 class="title" data-text="S">Our<span>Services</span></h1>
                                <div class="desc">Lorem ipsum dolor sit amet sed tincidunt suscipit id malesuada.</div>
                            </div><!-- /.title-section -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="flat-iconbox icon-right">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon1.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Oral Surgery</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon2.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Dental Care</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-right">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon3.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Cosmetic Dentistry</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->
                                </div>

                                <div class="col-md-6">
                                    <div class="flat-iconbox icon-left">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon4.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Teeth Cleaning</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon5.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Oral Hygienist</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->

                                    <div class="flat-iconbox icon-left">
                                        <span class="icon">
                                            <img src="{{ asset('public/frontend/images/icon/icon6.png') }}"
                                                alt="images">
                                        </span>
                                        <div class="content">
                                            <div class="title">Care Advice</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mi purus.</p>
                                        </div>
                                    </div><!-- /.flat-icon-box -->
                                </div>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div>
                </div>
            </section> --}}



            <!-- Our team -->
            <section id="doctor" class="flat-row row-our-team">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section">
                                <h1 class="title" data-text="D">Our<span> Doctor</span></h1>
                            </div><!-- /.title-section -->
                        </div><!-- /.col-md-12 -->
                    </div>


                    <section class="customer-logos slider">

                        @foreach ($users as $user)

                        <!-- Team item -->
                        <a href="{{ url('posted_by/'.Crypt::encrypt($user->id)) }}">
                            <div class=" slide text-center">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset($user->avatar) }}"
                                        alt="" style="height: 225px; width: 225px"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">{{$user->name}}</h5><span
                                        class="large text-uppercase text-dark">{{$user->qualification}}</span><br>
                                    <span class="small text-uppercase text-muted">{{$user->speciality}}</span>

                                </div>
                            </div><!-- End -->
                        </a>
                        @endforeach


                    </section>

                </div><!-- /.container -->
            </section>

            <!-- Contact -->
            <section id="contact" class="flat-row nopad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-nopad">
                            {{-- <div id="map" style="width: 100%; height: 634px; "></div> --}}
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7603742291385!2d90.36625026536274!3d23.755923044481314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf51340c1c4b%3A0xc6e3200844f0857d!2sLalmatia%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1615270711300!5m2!1sen!2sbd"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="flat-divider d100px"></div>
                            <div class="title-section">
                                <h1 class="title" data-text="G">Get In <span>Touch</span></h1>
                            </div><!-- /.title-section -->
                            <form class="flat-contact-form for-full-width" action="{{ url('/contact') }}" method="POST">
                                @csrf
                                <div class="field clearfix">
                                    <div class="wrap-type-input">
                                        <div class="input-wrap name">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                tabindex="1" placeholder="Your Name *" name="name" required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" tabindex="2"
                                                placeholder="Your Email *" name="email" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-wrap last Subject">
                                            <input type="text"
                                                class="form-control @error('subject') is-invalid @enderror"
                                                placeholder="Subject *" name="subject">
                                            @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="textarea-wrap">
                                        <textarea class="type-input" placeholder="You Message *" name="message"
                                            class="form-control @error('message') is-invalid @enderror"
                                            required></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button class="flat-button">send message<i
                                            class="icon-envelope-open icons"></i></button>
                                </div>
                            </form><!-- /.comment-form -->
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

        </div><!-- /.Entry Page -->

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
                                        <a href="tel:+8801976355573" style="color: #858585">Phone:
                                            +8801976355573</a><br>
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
    </div><!-- /.boxed -->

    <!-- Go Top -->
    <a class="go-top">
        <i class="zmdi zmdi-long-arrow-up"></i>
    </a>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-ui-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.mb.YTPlayer.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/slick.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript"
        src="{{ asset('public/frontend/javascript/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('public/frontend/javascript/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/slider.js') }}"></script>


</body>

</html>