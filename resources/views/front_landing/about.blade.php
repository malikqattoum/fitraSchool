<?php
$settings = settings();
?>
@extends('front_landing.layouts.app')
@section('title')
    {{__('messages.about_us.about_us')}}
@endsection
@section('content')

    <div class="about-page">
        <!-- start hero-section -->
        <section class="hero-section">
            <div class="inner-bgimg position-relative"
                 style="background: url('{{ $aboutUs['menu_bg_image']?:asset('front_landing/images/about-hero-img.png')}}');">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 col-md-7 parallelogram-shape">
                            <div class="text-responsive inner-text position-relative">
                                <p class="fs-18 fw-5 mb-md-3 pb-lg-2 mb-2">{{ $aboutUs['menu_title'] }}</p>
                                <h2 class="fs-1 mb-md-0 fw-6"> {{__('messages.about_us.about_us')}} </h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end hero-section -->

        <!-- start about-section -->
        <section class="about-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-7 col-lg-8">
                        <div class="about-left">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <div class="about-1"> --}}
                                        <img src="{{ asset('front_landing/images/Red and Yellow Collage Illustrative Learning for Kids Infographic_page-0001.jpg') }}" width="500" height="840" style="border-radius: 5px">
                                        {{-- <img src="{{ $aboutUs['image_1'] ? :asset('front_landing/images/about-us1.png')}}"
                                             class="w-100 h-100 object-fit-cover"> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="about-content-box bg-primary ">
                                        <div class="about-content d-flex flex-column align-items-center justify-content-center ">
                                            <h2 class="number-big text-white fs-1 fw-6 counter"
                                                data-countto="{{ $aboutUs['years_of_exp'] }}"
                                                data-duration="3000">
                                            </h2>
                                            <p class="mb-0 text-white fs-14 fw-5">{{__('messages.about_us.years_of_exp')}}</p>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="col-md-6 d-md-flex align-items-center">
                                    <div class="about-2">
                                        <img src="{{$aboutUs['image_2']  ? : asset('front_landing/images/about-us2.png')}}"
                                             class="w-100 h-100 object-fit-cover">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-5 col-lg-4 mt-lg-0 mt-sm-5 mt-4">
                        <div class="about-right">
                            {{-- <p class="text-primary fs-16 fw-6 mb-3 pb-1">{{__('messages.about_us.about_us')}}</p> --}}
                            {{-- <h2 class="text-dark fw-6 mb-3 pb-1">{{ $aboutUs['title'] }}</h2> --}}
                            <section class="principal-message">
                                <div class="message-content">
                                    <h2 class="message-title">{{__('messages.front_landing.principals_message')}}</h2>
                                    <p>
                                        Assalamu Alaikum,<br><br>
                                        Welcome to Fitra School, where we are blessed to take on board the noble journey of nurturing the Fitra—the innate goodness that Allah has placed in every child. As Muslims, we have been taught by our beloved Prophet Muhammad (peace be upon him) that building strong nations begins with educated and morally grounded individuals. This is our mission at Fitra School: to shape a generation of students who are not only knowledgeable but also deeply connected to their faith and their purpose in life <b>(khilafa on earth)</b>.<br><br>
                                        Through our unique Tamkeen program and blended subjects’ curriculum, students gain hands-on experience in entrepreneurship, coding, creative arts, and more, all while being deeply rooted to Islam. We are equipping our students with the tools they need to become the future leaders, thinkers, and change-makers of our Ummah.<br><br>
                                        I am honored to work with a passionate and dedicated team that shares this vision. We are committed to shaping young minds to carry the weight of responsibility and leadership—ready to excel in both this world and the hereafter, insha’Allah.<br><br>
                                    </p>
                                    <p class="signature">Reem Yousef<br>Principal, Fitra School</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about-section -->

        <!-- start success-stories-section -->
        @if(count($successStories) > 0)
            <section class="success-stories-section pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-11 col-11">
                            <div class="section-title section-title-four b-top text-center head-title">
                                <h1 class="text-dark fw-6 mb-5"> {{__('messages.success_story.success_story')}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="success-stories-content bg-gray px-sm-5 py-sm-5 px-4 py-4">
                        @foreach($successStories as $successStory)
                            <div class="row d-flex align-items-center pb-3 pt-3 border-bottom">
                                <div class="col-xxl-8 col-lg-7 pe-xxl-4 pe-lg-2">
                                    <div class="stories-content">
                                        <h3 class="text-primary fw-6 mb-3 pb-1">{{ $successStory->title }}</h3>
                                        <p class="text-dark fs-16 fw-5 mb-lg-0 mb-sm-5 mb-4">
                                            {!! $successStory->short_description !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-5">
                                    <div class="stories-img">
                                        <img src="{{$successStory->image ? : asset('front_landing/images/success-stories.png')}}"
                                             alt="{{ $successStory->title }}" class="w-100 h-100 rounded-10 object-fit-cover">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    <!-- end success-stories-section -->
    </div>
@endsection

