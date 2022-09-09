<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.News')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.News')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    

    
<!-- Blog Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-secondary px-3">{{__('trans.Our News')}}</h6>
            <h1 class="display-6 mb-4">{{__('trans.Our Latest News & Articles')}}</h1>
        </div>
        <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>

                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>

                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>

                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>

                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>
                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-100 p-2 mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <span>15 09 2022</span>
                            <h6>{{__('trans.article title')}}</h6>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary w-25 " href="{{route('articleDetails',$lang)}}"> {{__('trans.View')}} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection