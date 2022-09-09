<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')




    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.Services')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.Services')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-4.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-5.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                        <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-6.jpg')}}" alt="">
                        <h6 class="mb-0">{{__('trans.service title')}}</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->






@endsection