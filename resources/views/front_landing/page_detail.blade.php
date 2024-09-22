@extends('front_landing.layouts.app')
@section('title')
    {{ __('messages.pages') }}
@endsection
@section('content')
    <div class="blog-page">
        <!-- start hero-section -->
        <section class="hero-section">
            <div class="inner-bgimg  position-relative"
                 style="background: url('{{asset('front_landing/images/blog-hero-img.png')}}');">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-7 parallelogram-shape">
                            <div class="text-responsive inner-text position-relative pe-xl-5">
                                <p class="fs-18 fw-5 mb-md-3 pb-lg-2 mb-2">{{__('messages.front_landing.our_mission_food_education_medicine')}}</p>
                                <h2 class="fs-1 mb-md-0 fw-6">{{ $page->title }}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end hero-section -->

        @if ($page->name == 'Admissions')
            <section class="about-section pb-60 pt-60">
                <div class="container">
                    <div class="row">
                        <ul class="list-group">
                            <li class="list-group-item">Tuition fees. $500/month</li>
                            <li class="list-group-item">Registration link for 2024-2025 <a href="https://form.jotform.com/242304365892257" target="_blank" class="btn btn-primary">Register</a></li>
                            <li class="list-group-item">Provide links for 2024 January enrolment waitlist.</li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif

        <!-- start blog-section  -->
        <section class="blog-section pt-100 pb-100">
            <div class="container">
                <p class="fs-16 fw-5 text-dark mb-4 pb-lg-2">
                    {!! nl2br($page->description) !!}
                </p>

            </div>
        </section>
        <!-- end blog-section  -->
    </div>
@endsection
