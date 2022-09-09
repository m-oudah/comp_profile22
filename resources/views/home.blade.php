<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

@include('slider')



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
                    <div class="mb-4 text-justify">{!! __('trans.aboutdetails1') !!}.</div>

                    <a class="btn btn-primary py-2 px-3"
                        href="{{route('about',$lang)}}">{{__('trans.Read More')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Years Experience</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Team Members</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Satisfied Clients</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Projects Done</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Facts End -->



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-secondary px-3">{{__('trans.Our Services')}}</h6>
            <h1 class="display-6 mb-4">{{__('trans.What We Offer')}}</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-4.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-5.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="{{route('serviceDetails',$lang)}}">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-6.jpg')}}" alt="">
                    <h5 class="mb-0">{{__('trans.service title')}}</h5>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-secondary px-3">{{__('trans.Latest Portfolio')}}</h6>
            <h1 class="display-6 mb-4">{{__('trans.PortfolioSub')}}</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" style="direction:ltr; text-align:center;"
            data-wow-delay="0.1s">
            <div class="project-item border rounded h-100 p-4" data-dot="01">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-1.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-1.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
                <!-- <span>Digital agency website design and development</span> -->
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="02">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-2.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-2.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="03">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-3.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-3.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="04">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-4.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-4.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="05">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-5.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-5.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="06">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-6.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-6.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="07">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-7.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-7.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="08">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-8.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-8.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="09">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-9.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-9.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="10">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="{{asset('assets/img/project-10.jpg')}}" alt="">
                    <a href="{{asset('assets/img/project-10.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>{{__('trans.prev work title')}}</h6>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Blog Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-secondary px-3">{{__('trans.Our Blog')}}</h6>
            <h1 class="display-6 mb-4">{{__('trans.Our Blog Sub')}}</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border w-75 p-2 mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
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
                    <img class="img-fluid border w-75 p-2 mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
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
                    <img class="img-fluid border w-75 p-2 mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
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