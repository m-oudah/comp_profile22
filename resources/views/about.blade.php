<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.About')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.About')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">{{ __('trans.Years Experience')}}</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">{{ __('trans.Team Members')}}</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">{{ __('trans.Satisfied Clients')}}</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">{{ __('trans.Projects Done')}}</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="{{asset('assets/img/about.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-secondary pe-3">{{__('trans.About')}}</h6>
                    <h1 class="display-6 mb-4">{{__('trans.abouttitle')}}</h1>
                    <div class="mb-4" style="text-align:justify">{!! __('trans.aboutdetails') !!}.</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



@endsection