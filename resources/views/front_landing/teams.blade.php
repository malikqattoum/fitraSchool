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

        <!-- start founder-section -->
        <section class="pt-100 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="founder-card card border-0 shadow-lg mb-5" style="border: 3px solid #0d6efd !important; background: linear-gradient(to bottom, #f8f9ff, #ffffff); border-radius: 15px !important;">
                            <div class="card-body d-flex flex-column flex-md-row align-items-center p-5">
                                <!-- Founder image -->
                                <div class="founder-image-container mb-4 mb-md-0 me-md-4 text-center">
                                    <img src="{{ asset('front_landing/images/muslim-woman.png') }}"
                                         alt="Reem Yousef, Founder and Principal" class="rounded-circle border border-primary border-3 object-fit-cover"
                                         style="width: 180px; height: 180px; padding: 5px; background: white;">
                                    <div class="mt-3">
                                        <span class="badge bg-primary fs-6 fw-bold px-4 py-2" style="font-size: 1rem !important;">FOUNDER</span>
                                    </div>
                                </div>

                                <!-- Founder content -->
                                <div class="founder-content text-center text-md-start flex-fill">
                                    <h3 class="fw-bolder text-primary mb-3" style="font-size: 1.5rem;">Reem Yousef</h3>
                                    <h4 class="fw-semibold text-dark mb-4" style="font-size: 1.2rem;">Founder and Principal</h4>
                                    <div class="founder-message border-top pt-4" style="border-color: #dee2e6 !important;">
                                        <p class="lead fs-6 fw-normal text-muted mb-0">
                                            My name is Reem Yousef, Founder and Principal of Fitra School, an educational strategist, and entrepreneur.
                                        </p>
                                        <p class="mt-3 text-muted">
                                            At Fitra, we believe education is not confined to textbooks. It begins by awakening curiosity, inviting deep reflection, and guiding hearts and minds toward purpose. Our vision is to raise a strong Canadian Muslim generation, rooted in faith, confident in identity, and prepared to fulfill their role of khilāfah on earth by leading with integrity and serving humanity with impact.
                                        </p>
                                        <p class="mt-2 text-muted fst-italic fw-semibold">
                                            At Fitra, we are nurturing thinkers, leaders, and caretakers of the world, inshaAllah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end founder-section -->

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
                                    <h5 class="@if(empty($team->designation) || $team->designation == '-') text-primary @else badge rounded-pill bg-primary @endif fs-14 fw-5 mb-0" style="width:200px">{{ $team->designation }}</h5>
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
