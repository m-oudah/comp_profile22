<?php $lang = app()->getLocale(); ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->




    <!-- Brand & Contact Start -->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="{{route('index',$lang)}}" class="navbar-brand m-0 p-0">
                    <h1 class="fw-bold text-primary m-0">Comp Profile</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">{{__('trans.Call Us')}}</p>
                                <h6 class="mb-0">+012 345 6789</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2">{{__('trans.Email Us')}}</p>
                                <h6 class="mb-0">info@example.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="{{route('index',$lang)}}" class="nav-item nav-link active">{{__('trans.home')}}</a>
            <a href="{{route('about',$lang)}}" class="nav-item nav-link">{{__('trans.About')}}</a>
            <a href="{{route('services',$lang)}}" class="nav-item nav-link">{{__('trans.Services')}}</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Media')}}</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{route('ourImages',$lang)}}" class="dropdown-item">{{__('trans.Galleries')}}</a>
                        <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Articles')}}</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{route('blog',$lang)}}" class="dropdown-item">{{__('trans.Blog')}}</a>
                        <a href="{{route('news',$lang)}}" class="dropdown-item">{{__('trans.News')}}</a>
                    </div>
                </div>

                <a href="{{route('contact',$lang)}}" class="nav-item nav-link">{{__('trans.Contact')}}</a>
            </div>
            @if ($lang =='ar')
            <a href="/en" class="btn btn-sm btn-light py-2 px-4 d-none d-lg-block">English</a>
            @else
            <a href="/ar" class="btn btn-sm btn-light py-2 px-4 d-none d-lg-block">العربية</a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->

