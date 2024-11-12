@extends('front_landing.layouts.app')
@section('title')
    Parent Testimonials
@endsection
@section('content')
<div class="testimonials-page">
    <!-- start hero-section -->
    <section class="hero-section">
        <div class="inner-bgimg position-relative"
            style="background: url('{{ asset('front_landing/images/hero-image-1.jpeg') }}') no-repeat right !important;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-7 parallelogram-shape">
                        <div class="text-responsive inner-text position-relative pe-xl-5">
                            {{-- <p class="fs-18 fw-5 mb-md-3 pb-lg-2 mb-2">{{__('messages.front_landing.our_mission_food_education_medicine')}}</p> --}}
                            <h2 class="fs-1 mb-md-0 fw-6">Parent Testimonials</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h3 class="text-primary">Add Testimonial</h3>
        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to add a testimonial -->
        <form action="{{ route('testimonials.store') }}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <label for="parent_name">Parent Name</label>
                <input type="text" name="parent_name" id="parent_name" class="form-control" required>
            </div>
            <div class="form-group mt-4">
                <label for="testimonial">Testimonial</label>
                <textarea name="testimonial" id="testimonial" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

        <hr>

        <!-- List all testimonials -->
        <h2 class="text-primary">Testimonials</h2>
        @forelse($testimonials as $testimonial)
            <div class="testimonial">
                <h4>{{ $testimonial->parent_name }}</h4>
                <p>{{ $testimonial->testimonial }}</p>
                <hr>
            </div>
        @empty
            <p>No testimonials available.</p>
        @endforelse
    </div>
</div>
@endsection
