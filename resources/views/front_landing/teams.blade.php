@extends('front_landing.layouts.app')
@section('title')
    {{ __('messages.teams.teams') }}
@endsection
@section('content')
    <div class="team-page">
        <!-- start hero-section -->
        <section class="hero-section">
            <div class="inner-bgimg position-relative"
                 style="background: url('{{ asset('front_landing/images/hero-image-1.jpeg') }}') no-repeat right !important;">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 col-md-7 parallelogram-shape">
                            <div class="text-responsive inner-text position-relative">
                                {{-- <p class="fs-18 fw-5 mb-md-3 pb-lg-2 mb-2">{{__('messages.front_landing.our_mission_food_education_medicine')}}</p> --}}
                                <h2 class="fs-1 mb-md-0 fw-6">{{__('messages.front_landing.our_team')}}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end hero-section -->
        <!-- start our-team-section -->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-12 our-team-block d-flex align-items-stretch mb-5">
                            <div class="card flex-fill border-0 d-flex flex-row flex-column-mobile rounded">
                                <!-- Image on the top for mobile and left for larger screens -->
                                <div class="card-image">
                                    <img src="{{ !empty($team->image_url) ? $team->image_url : asset('front_landing/images/team-1.png') }}"
                                         alt="Infy Care" class="object-fit-cover rounded" style="max-width: 200px; max-height:200px;">
                                </div>

                                <!-- Description below the image for mobile -->
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h4 class="fs-18 fw-5">{{ $team->name }}</h4>
                                    <h5 class="badge rounded-pill bg-primary fs-14 fw-5 mb-0" style="width:200px">{{ $team->designation }}</h5>
                                    <p>{{ $team->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="row justify-content-center">
                    <div class="col-sm-6 text-center">
                        <a class="btn btn-primary px-5 fw-5"
                           href="{{ route('landing.contact') }}">{{__('messages.front_landing.join_with_us')}}</a>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- end our-team-section -->
    </div>

@endsection
