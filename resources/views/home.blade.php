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



<body class="page-template-front-page header-sticky home">

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

    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    <!-- Boxed -->
    <div class="boxed">


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
                            <a class="nav-link" href="#doctor">Our Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
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
                        <div class="col-md-6 mt-2">
                            <div class="flat-latest-blog">
                                <article class="entry format-standard">
                                    <div class="feature-post">
                                        <div class="type-post">
                                        </div><!-- /.type-post -->
                                        <div class="entry-image">
                                            <img src="{{$blog->image}}" style="height: 350px; width: 100%;"
                                                alt="{{ $blog->title }}">
                                        </div><!-- /.entry-image -->
                                    </div><!-- /.feature-post -->

                                    <div class="main-post">
                                        <h2 class="entry-title"><a
                                                href="{{ url('blog_details/'.Crypt::encrypt($blog->id)) }}">{{
                                                $blog->title }}</a></h2>
                                        <div class="entry-meta">
                                            {{-- <span class="date">{{ $blog->created_at->diffForHumans() }}</span> --}}
                                            <span class="author font-weight-bold"><a class="font-weight-bold"
                                                    href="{{ url('posted_by/'.Crypt::encrypt($blog->user->id)) }}">{{
                                                    $blog->user->name }}</a></span>
                                            {{-- <span class="comment font-weight-bold"><a href="#" class="font-weight-bold">{{ $blog->user->qualification
                                                    }}</a></span> --}}
                                                    <p class="p-0 m-0"><i class="fas fa-user-md pr-1"></i> {{
                                                $blog->user->qualification }}</p>
                                            <p class="p-0 m-0"><i class="fas fa-hospital-alt pr-1"></i> {{
                                                $blog->user->hospital }}</p>
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


            <section class="container" id="services">
                <div class="title-section desc mb-0 mt-5">
                    <h1 class="title" data-text="S">Our<span>Services</span></h1>
                </div><!-- /.title-section -->
                <div class="row">
                    
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-stethoscope"></i></div>
                            <h3 class="title" style="color: white">Regular follow up by Local doctors</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-ticket-alt"></i></div>
                            <h3 class="title" style="color: white">Visa invitation, Visa & Ticketing services</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-map-pin"></i></div>
                            <h3 class="title" style="color: white">Local sightseeing arrangements</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fa fa-rocket"></i></div>
                            <h3 class="title" style="color: white">Stay arrangements</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-capsules"></i></div>
                            <h3 class="title" style="color: white">Medicine from India</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-language"></i></div>
                            <h3 class="title" style="color: white">Multilingual Translator services</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-user-clock"></i></div>
                            <h3 class="title" style="color: white">24*7 support services</h3>
                        </div>
                    </div>
                 
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-mobile-alt"></i></div>
                            <h3 class="title" style="color: white">Teleconsultation with Best Indian Specialist Doctors</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-2">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-user-md"></i></div>
                            <h3 class="title" style="color: white">Treatment Guidance from Professional Doctors</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-file-prescription"></i></div>
                            <h3 class="title" style="color: white">Follow up consultation with Indian doctors after procedure</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="serviceBox">
                            <div class="service-icon" style="color: white"><i class="fas fa-child"></i></div>
                            <h3 class="title" style="color: white">Family members/attender's whole body checkup</h3>
                        </div>
                    </div>
                    
                </div>
            </section>


            

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
                            <div class="slide text-center">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset($user->avatar) }}"
                                        alt="" style="height: 185px; width: 185px; margin:auto; object-fit:cover"
                                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">{{$user->name}}</h5><span
                                        class="text-uppercase text-white badge badge-info">{{$user->qualification}}</span><br>
                                    <span class="small text-uppercase text-muted">{{$user->speciality}}</span><br>
                                    <span class="small text-uppercase text-muted">{{$user->hospital}}</span>

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
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7603742291385!2d90.36625026536274!3d23.755923044481314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf51340c1c4b%3A0xc6e3200844f0857d!2sLalmatia%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1615270711300!5m2!1sen!2sbd"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.354802561875!2d90.36873003143586!3d23.757729041133693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf20eceb0df5%3A0x79f7a4ceafbcbf8!2sDrobal%20Marketing%20%26%20Trading!5e0!3m2!1sen!2sbd!4v1616594751907!5m2!1sen!2sbd" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                                <h5 class="widget-title">Branch Office 1:??</h5>
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
                                <h5 class="widget-title">Branch Office 2:??</h5>
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
                            <p>Copyright ??2021
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
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.easing.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.flexslider-min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/owl.carousel.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.isotope.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/imagesloaded.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-countTo.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-ui-datepicker.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-validate.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.mb.YTPlayer.js') }}"></script> --}}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/gmap3.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.cookie.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.fitvids.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/slick.js') }}"></script>




</body>

</html>