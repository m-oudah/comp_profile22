<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('trans.Contact')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-secondary active" aria-current="page">{{__('trans.Contact')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->




<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-secondary px-3">{{__('trans.Contact')}}</h6>
            <h1 class="display-6 mb-4">{{__('trans.Get In Touch')}}</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">{{__('trans.Your Name')}}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">{{__('trans.Your Email')}}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">{{__('trans.Subject')}}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 200px"></textarea>
                                <label for="message">{{__('trans.Message')}}</label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <button class="btn btn-primary py-2 px-3"
                                type="submit">{{__('trans.Send Message')}}</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
            <!-- Google Map Start -->
                <iframe class="w-100 mb-n2" style="height: 450px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <!-- Google Map End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->







@endsection