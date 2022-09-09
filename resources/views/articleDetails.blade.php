<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')




<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.Article Details')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.article title')}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="row">

            <div class="col-lg-8 col-12 ">
                <div class="service-item d-block p-4 ">
                    <img class="img-fluid img-fluid rounded mb-4 w-100" src="{{asset('assets/img/service-1.jpg')}}"
                        alt="">
                    <div class="text-justify mb-4">{{__('trans.aboutdetails1')}}</div>
                </div>
            </div>

            <div class="col-lg-4 col-12 text-center">
                <!-- <h4 class="text-uppercase text-center mb-4">{{__('trans.other services')}}</h4> -->
                <h6 class="section-title bg-white text-center text-primary px-3 mb-4">{{__('trans.other articles')}}
                </h6>


                <div class="row g-4">
                    <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-2" href="">
                            <img class="img-fluid rounded mb-3" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="col-md-8 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class=" h-100 p-2" href="">
                        <h6 class="mb-0">{{__('trans.article title')}}</h6>
                        </a>
                    </div>
                </div>
                <hr/>
                
                <div class="row g-4">
                    <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-2" href="">
                            <img class="img-fluid rounded mb-3" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="col-md-8 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class=" h-100 p-2" href="">
                            <h6 class="mb-0">{{__('trans.article title')}}</h6>
                        </a>
                    </div>
                </div>
                <hr/>
                
                <div class="row g-4">
                    <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-2" href="">
                            <img class="img-fluid rounded mb-3" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                        </a>
                    </div>

                    <div class="col-md-8 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <a class=" h-100 p-2" href="">
                            <h6 class="mb-0">{{__('trans.article title')}}</h6>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- About End -->


<!-- Vendor Start -->
<div class="container-fluid py-2">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-1.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-2.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-3.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-4.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-5.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-6.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-7.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-8.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->






@endsection