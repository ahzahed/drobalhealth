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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/postedby.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/fontawesome/css/fontawesome.min.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/responsive.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Colors -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/colors/color1.css') }}" id="colors"> --}}

    <!-- Animation Style -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/stylesheets/animate.css') }}"> --}}

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

        .card.product_item  {
            background: #fff;
            margin-bottom: 20px;
            transition: .5s;
            border: 0;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
        }

        .card.product_item  .body {
            font-size: 14px;
            color: #424242;
            padding: 20px;
            font-weight: 400;
        }
        .profile-head {
            transform: translateY(5rem)
        }

        .cover {
            background-size: cover;
            background-repeat: no-repeat
        }
    </style>
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
                            {{-- <a class="nav-link btn btn-primary te" href="{{ url('/homemain'.'#contact') }}">Contact</a> --}}
                            <button class="btn btn-primary">Book Now</button>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>

   



    <section class="main-content blog-posts" style="background: #f3f2ef">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        


                        <div class="bg-white shadow  overflow-hidden" style="border-top-right-radius: 10px; border-top-left-radius: 10px">
                            <div class="px-4 pt-0 pb-4 cover" style="background-image: url({{ asset('public/backend/images/dark.jpg') }}); border-top-right-radius: 10px; border-top-left-radius: 10px">
                                <div class="media align-items-end profile-head">
                                    <div class="profile mr-3"><img src="{{asset($user->avatar)}}" alt="..." style="height: 180px; width: 180px" class="rounded-circle mb-2 img-thumbnail">
                                        {{-- <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row bg-white p-4 d-flex mt-5">
                                <div class="col-md-10 col-sm-12">
                                    <p class="mt-0" style="font-size: 2rem; font-weight:400px">{{$user->name}}</p>
                                    <p class="mb-0 text-dark mt-3" style="font-size: 1.3rem"><i class="fas fa-briefcase-medical"></i> {{$user->speciality}}</p>
                                    <p class="mb-0 text-dark mt-2" style="font-size: 1.3rem"><i class="fas fa-graduation-cap"></i> {{$user->qualification}}</p>
                                    <p class="mb-0 text-dark mt-2" style="font-size: 1.3rem"><i class="fas fa-hospital-alt"></i> {{$user->hospital}}</p>
                                </div>
                                <div class="col-md-2 col-sm-0 mt-2">
                                    <ul class="list-inline mb-0 text-center">
                                        <li class="list-inline-item">
                                            {{-- <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small> --}}
                                            <button class="btn mr-2 text-white" style="background: #36a7e3">Book Now</button> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            
                                    
                           
                        </div>
                        <div class="bg-white px-4 py-3 mt-3" style="border-radius: 10px">
                                <h5 class="mb-0">About</h5>
                                <div class="py-4 rounded shadow-sm">
                                    {!! $user->description !!}
                                </div>
                            </div>
                        <div class="bg-white px-4 py-3 mt-3" style="border-radius: 10px">
                                <h5 class="mb-0">Posts</h5>
                                <div class="py-4 rounded shadow-sm">
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
                </div><!-- /.col-md-9 -->
                
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
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.easing.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.flexslider-min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-waypoints.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery-ui-datepicker.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.cookie.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('public/frontend/javascript/jquery.fitvids.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/frontend/javascript/main.js') }}"></script>
</body>

</html>