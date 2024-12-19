@extends('front_landing.layouts.app')
@section('title')
    {{ __('messages.pages') }}
@endsection
@section('content')
@if ($page->name == 'Careers')
<style>
    .job-posting {
        max-width: 700px;
        margin: 0 auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    h1 {
        color: #51246d;
    }
    p {
        margin-bottom: 15px;
    }
    .section-title {
        font-size: 18px;
        font-weight: bold;
        margin-top: 20px;
        color: #333;
    }
    ul {
        list-style-type: disc; /* Ensure bullets are displayed */
        margin-left: 20px; /* Add space for bullet indentation */
        padding-left: 20px; /* Add padding to show bullet points properly */
    }
    li {
        margin-bottom: 10px; /* Add some space between list items */
        list-style: inside;
    }
    a {
        color: #0563c1;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .contact-info {
        font-weight: bold;
        color: #0563c1;
    }
</style>
@endif
    <div class="blog-page">
        <!-- start hero-section -->
        <section class="hero-section">
            @if ($page->name == 'Admissions' || $page->name == 'Careers')
                <div class="inner-bgimg position-relative"
                    style="background: url('{{ asset('front_landing/images/hero-image-2.jpeg') }}') no-repeat right !important;">
            @else
                <div class="inner-bgimg  position-relative"
                    style="background: url('{{asset('front_landing/images/blog-hero-img.png')}}');">
            @endif
                <div class="container">
                    <div class="row ">
                        <div class="col-md-7 parallelogram-shape">
                            <div class="text-responsive inner-text position-relative pe-xl-5">
                                {{-- <p class="fs-18 fw-5 mb-md-3 pb-lg-2 mb-2">{{__('messages.front_landing.our_mission_food_education_medicine')}}</p> --}}
                                <h2 class="fs-1 mb-md-0 fw-6">{{ $page->title }}</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end hero-section -->

        @if ($page->name == 'Admissions')
            <!-- start Program-section -->
            <section class="about-section pb-60 pt-60">
                <div class="container">
                    <h2 class="text-primary d-flex  align-items-center justify-content-center mb-5">{{__('messages.front_landing.program')}}</h2>
                    <div class="row">
                        <ul class="list-group">
                            <li class="list-group-item">Year 2024-2025</li>
                            <li class="list-group-item">Daily schedule (9:00 AM - 3:30 PM).</li>
                            <li class="list-group-item">Grades from JK to Gr.5</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- end Program-section -->
            <section class="about-section pb-60 pt-60">
                <div class="container">
                    <div class="row">
                        <ul class="list-group">
                            <li class="list-group-item">Tuition fees: Kindergarten $475, Grades 1-5 $475, plus resource fees of $250 per year.</li>
                            <li class="list-group-item">2024-2025 January enrolment. <a href="https://forms.gle/dibdSyz7QKTucFd17" target="_blank" class="btn btn-primary">Register</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif

        <!-- start blog-section  -->
        <section class="blog-section pt-100 pb-100">
            <div class="container">
                <p class="fs-16 fw-5 text-dark mb-4 pb-lg-2">
                    @if ($page->name == 'Careers')
                        <div class="job-posting">
                            <h1>Job Posting: Arabic Teacher Position</h1>

                            <p>
                                SMA Fitra School is seeking an enthusiastic and creative <strong>Arabic Teacher</strong> to join our team! We are looking for someone who not only excels in teaching the Arabic language but also inspires students to <strong>love the language and culture</strong>, connecting it meaningfully to their deen.
                            </p>

                            <p class="section-title">Responsibilities</p>
                            <ul>
                                <li>Teach Arabic language in a dynamic and engaging manner.</li>
                                <li>Design and implement <strong>hands-on, interactive activities</strong> that make learning Arabic fun and meaningful.</li>
                                <li>Blend Arabic lessons with <strong>Islamic values and teachings</strong>, fostering a connection to the language through faith.</li>
                                <li>Inspire a love for the Arabic language by introducing creative projects, games, and cultural experiences.</li>
                                <li>Work collaboratively with colleagues to integrate Arabic learning into cross-curricular themes.</li>
                                <li>Build a positive and inclusive classroom environment that encourages curiosity, participation, and confidence in using Arabic.</li>
                            </ul>

                            <p class="section-title">Qualifications</p>
                            <ul>
                                <li>Fluency in Arabic and <strong>excellent English communication skills</strong>.</li>
                                <li>Proven experience in teaching Arabic with an emphasis on creativity and hands-on activities.</li>
                                <li>A degree in Education, Arabic Studies, or a related field is preferred.</li>
                                <li>Ability to inspire and engage students, making Arabic a subject they enjoy and look forward to.</li>
                                <li>Strong organizational and interpersonal skills with a passion for nurturing young minds.</li>
                            </ul>

                            <p class="section-title">How to Apply</p>
                            <p>
                                If you’re passionate about teaching Arabic, creative in your approach, and eager to help students <strong>fall in love with the language</strong>, we’d love to hear from you! Please send your resume and a cover letter detailing your teaching philosophy and examples of your creative approaches to teaching Arabic to <a href="mailto:info@fitraschool.ca" class="contact-info">info@fitraschool.ca</a>.
                            </p>
                        </div>

                        <div class="job-posting">
                            <h1>Job Posting: Homeroom Teacher Position</h1>

                            <p>
                                SMA Fitra School is seeking an inspiring and creative <strong>Homeroom Teacher</strong> to join our team! We are looking for an educator who is passionate about nurturing young minds academically, socially, and spiritually, creating a classroom environment that reflects <strong>Islamic values</strong> and promotes a love of learning.
                            </p>

                            <p class="section-title">Responsibilities</p>
                            <ul>
                                <li>Teach a variety of core subjects, including literacy, numeracy, science, and social studies, using a student-centered approach.</li>
                                <li>Foster a warm and inclusive classroom environment where students feel valued, supported, and inspired to learn.</li>
                                <li>Incorporate <strong>Islamic teachings and values</strong> into the curriculum, promoting character development alongside academic achievement.</li>
                                <li>Design and deliver <strong>hands-on, engaging lessons</strong> that cater to various learning styles and encourage creativity and critical thinking.</li>
                                <li>Build strong relationships with students, parents, and colleagues to support students' overall development.</li>
                                <li>Assess and track student progress, providing constructive feedback and tailoring instruction to individual needs.</li>
                                <li>Plan and lead class activities that encourage teamwork, problem-solving, and a sense of community.</li>
                            </ul>

                            <p class="section-title">Qualifications</p>
                            <ul>
                                <li>A degree in Education or a related field.</li>
                                <li>Prior experience as a classroom teacher is an asset.</li>
                                <li>Strong understanding of child development and effective teaching practices.</li>
                                <li>Excellent communication skills in English; proficiency in Arabic is an asset.</li>
                                <li>Creative, enthusiastic, and committed to fostering a love of learning.</li>
                                <li>Passionate about integrating <strong>Islamic values</strong> into teaching and learning.</li>
                            </ul>

                            <p class="section-title">How to Apply</p>
                            <p>
                                If you’re passionate about teaching, love working with children, and are committed to shaping the next generation through <strong>engaging and value-driven education</strong>, we’d love to hear from you! Please send your resume and a cover letter explaining your teaching philosophy and experiences to <a href="mailto:info@fitraschool.ca" class="contact-info">info@fitraschool.ca</a>.
                            </p>
                        </div>

                        <div class="job-posting">
                            <h1>Job Posting: Part-Time Quran Teacher</h1>

                            <p><strong>Position:</strong> Part-Time Quran Teacher</p>
                            <p><strong>Location:</strong> Fitra School, 1496 Stittsville Main St, Ottawa, ON K2S 1E3</p>
                            <p><strong>Hours:</strong> Flexible, part-time hours</p>

                            <p>
                                Fitra School is seeking a passionate and dedicated Quran teacher who goes beyond traditional Quran memorization.
                                We are looking for an educator who inspires students to engage in <em>Tadabur</em> (understanding and reflecting
                                on Quranic verses) and encourages them to apply these lessons to their everyday lives. The ideal candidate will
                                nurture the development of strong Muslim character through the teachings of the Quran, creating an environment
                                where students not only memorize the Quran but also live by its values.
                            </p>

                            <p class="section-title">Key Responsibilities:</p>
                            <ul>
                                <li>Teach Quran with a focus on understanding and application in daily life.</li>
                                <li>Inspire students to develop a connection with the Quran and foster love for its teachings.</li>
                                <li>Build strong Muslim character based on the Quran’s guidance.</li>
                                <li>Implement creative teaching techniques to engage students in reflection and discussion.</li>
                                <li>Create a positive and respectful classroom environment.</li>
                            </ul>

                            <p class="section-title">Qualifications:</p>
                            <ul>
                                <li>Excellent communication and interpersonal skills in English.</li>
                                <li>Fluency in English is an asset.</li>
                                <li>Proficiency in Quran recitation and <em>Tajweed</em>.</li>
                                <li>Strong understanding of the Quran and ability to teach <em>Tadabur</em>.</li>
                                <li>Prior teaching experience, preferably with children.</li>
                                <li>Passion for Islamic education and character building.</li>
                            </ul>

                            <p class="section-title">How to Apply:</p>
                            <p>
                                Please email your resume and cover letter to
                                <a href="mailto:info@fitraschool.ca" class="contact-info">info@fitraschool.ca</a>.
                            </p>
                        </div>

                        <div class="job-posting">
                            <h1>Job Posting: Part-Time Islamic Studies Teacher</h1>

                            <p><strong>Position:</strong> Part-Time Islamic Studies Teacher</p>
                            <p><strong>Location:</strong> Fitra School, 1496 Stittsville Main St, Ottawa, ON K2S 1E3</p>
                            <p><strong>Hours:</strong> Flexible, part-time hours</p>

                            <p>
                                Fitra School is seeking an enthusiastic Islamic Studies teacher who is passionate about imparting Islamic knowledge
                                and values to young minds. The ideal candidate will help students develop a strong foundation in Islamic teachings
                                while fostering an understanding of how to integrate these principles into their lives. The role involves creating
                                an engaging and interactive learning environment that encourages curiosity, reflection, and a deeper connection to
                                their Muslim identity.
                            </p>

                            <p class="section-title">Key Responsibilities:</p>
                            <ul>
                                <li>Teach Islamic Studies covering key subjects such as Fiqh, Seerah, Aqeedah, and Islamic history.</li>
                                <li>Help students understand and apply Islamic teachings in a practical and meaningful way.</li>
                                <li>Develop lesson plans that are both informative and engaging.</li>
                                <li>Foster a positive and respectful learning environment.</li>
                                <li>Instill the love of Islam and shape a proud Muslim with an outstanding Islamic identity.</li>
                                <li>Encourage students to reflect on Islamic values and implement them in their lives.</li>
                            </ul>

                            <p class="section-title">Qualifications:</p>
                            <ul>
                                <li>Excellent communication and interpersonal skills in English.</li>
                                <li>Fluency in English is an asset.</li>
                                <li>Strong background in Islamic Studies.</li>
                                <li>Prior experience teaching Islamic Studies, preferably to children.</li>
                                <li>Passion for education and character building.</li>
                                <li>Excellent communication and interpersonal skills.</li>
                            </ul>

                            <p class="section-title">How to Apply:</p>
                            <p>
                                Please email your resume and cover letter to
                                <a href="mailto:info@fitraschool.ca" class="contact-info">info@fitraschool.ca</a>.
                            </p>
                        </div>
                    @endif
                    {!! nl2br($page->description) !!}
                </p>

            </div>
        </section>
        <!-- end blog-section  -->
    </div>
@endsection
