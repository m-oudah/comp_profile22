<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')




<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.Our Media Library')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">{{__('trans.home')}}</a></li>
=                <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.Our Media Library')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="project wow fadeInUp" style="direction:ltr; text-align:center;" data-wow-delay="0.1s">

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-1.jpg')}}" alt="">
                            <a href="{{asset('assets/img/project-1.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-3.jpg')}}" alt="">
                            <a href="{{asset('assets/img/project-3.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-2.jpg')}}" alt="">
                            <a href="{{asset('assets/img/project-2.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-1.jpg')}}" alt="">
                            <a href="{{asset('assets/img/project-1.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-2.jpg')}}" alt="">
                            <a href="{{asset('assets/img/project-2.jpg')}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4 mb-3">
                    <div class="project-item border rounded h-100 p-4" data-dot="02">
                        <div class="position-relative">
                            <img class="img-fluid rounded" src="{{asset('assets/img/project-2.jpg')}}" alt="">
                            <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Project End -->



@endsection