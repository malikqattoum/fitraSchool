@extends('front_landing.layouts.app')
@section('title')
    {{ __('messages.teams.teams') }}
@endsection
@section('content')
    <div class="team-page">
        <!-- start hero-section -->
        <section class="hero-section">
            <div class="inner-bgimg  position-relative"
                 style="background: url('{{asset('front_landing/images/team-hero-img.png')}}');">
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
        <section class="about-section pb-60 pt-60">
            <div class="container">
                <h2 class="text-primary d-flex  align-items-center justify-content-center mb-5">{{__('messages.front_landing.principals_message')}}</h2>
                <div class="row">
                    <p>
                        Assalamu Alaikum,<br>
                        Welcome to Fitra School, where we are blessed to take on board the noble journey of nurturing the Fitra—the innate goodness that Allah has placed in every child.<br>
                        As Muslims, we have been taught by our beloved Prophet Muhammad (peace be upon him) that building strong nations begins with educated and morally grounded individuals.<br>
                        This is our mission at Fitra School: to shape a generation of students who are not only knowledgeable but also deeply connected to their faith and their purpose in life (khilafa on earth).<br>
                        Through our unique Tamkeen program and blended subjects’ curriculum, students gain hands-on experience in entrepreneurship, coding, creative arts, and more, all while being deeply rooted to Islam.<br>
                        We are equipping our students with the tools they need to become the future leaders, thinkers, and change-makers of our Ummah.<br>
                        I am honored to work with a passionate and dedicated team that shares this vision.<br>
                        We are committed to shaping young minds to carry the weight of responsibility and leadership—ready to excel in both this world and the hereafter, insha’Allah.<br><br>

                        Reem Yousef<br>
                        Principal, Fitra School
                    </p>
                </div>
            </div>
        </section>
        <!-- start our-team-section -->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-12 our-team-block d-flex align-items-stretch mb-5">
                            <div class="card flex-fill border-0 d-flex flex-row rounded">
                                <!-- Image on the left with fixed width -->
                                <div class="card-image">
                                    <img src="{{ !empty($team->image_url) ? $team->image_url : asset('front_landing/images/team-1.png') }}"
                                         alt="Infy Care" class="img-fluid object-fit-cover rounded">
                                </div>

                                <!-- Description on the right -->
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h4 class="fs-18 fw-5">{{ $team->name }}</h4>
                                    <h5 class="text-primary fs-14 fw-5 mb-0">{{ $team->designation }}</h5>
                                    <p>{{ $team->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-6 text-center">
                        <a class="btn btn-primary px-5 fw-5"
                           href="{{ route('landing.contact') }}">{{__('messages.front_landing.join_with_us')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our-team-section -->
    </div>

@endsection
