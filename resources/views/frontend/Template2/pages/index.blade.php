@extends('frontend.Template2.layouts.front')

@push('styles')
<style>
    button {
        background-color: #0073e6;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #005bbf;
    }
</style>
@endpush

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1>Kareem Shaban</h1>
        <p>I'm <span class="typed" data-typed-items="Web Developer, Freelancer, Web Penetration Tester"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p id="content-display" style="cursor:pointer;">
                    {!! $aboutPage->content ?? '' !!}
                </p>

                <!-- <div id="editor" contenteditable="true" style="border:1px solid #ccc; padding:10px; display:none;">
                    {!! $aboutPage->content ?? '' !!}
                </div> -->


            </div>

            <div class="row">
                @isset($portfolioImages['about_image'])
                @if ($portfolioImages['about_image']['image'] != null)
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ $portfolioImages['personal']['image_url'] }}" class="img-fluid" alt="">
                </div>
                @endif
                @endisset


                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Full Stack Web Developer.</h3>
                    {{-- <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                @if ($aboutPage->information)
                                @foreach ($aboutPage->information as $info)
                                <li><i class="icofont-rounded-right"></i> <strong>{{ $info->key }}:</strong>
                                    {{ $info->value }}
                                </li>
                                @endforeach
                                @endif


                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>Facts</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row no-gutters">

                @if($factsPage->information)
                @foreach ($factsPage->information as $info )

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="{{ $info->icon }}"></i>
                        <span data-toggle="counter-up">{{ $info->value }}</span>
                        <p><strong>{{ $info->key }}</strong>
                        </p>
                    </div>
                </div>

                @endforeach

                @endif



            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>

            </div>

            <div class="row skills-content">



                <div class="col-lg-6" data-aos="fade-up">

                @if ($skillsPage->information)
                @foreach ($skillsPage->information as $info )
                    <div class="progress">
                        <span class="skill">{{ $info->key }} <i class="val">{{ $info->value }}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar"
                                aria-valuenow="{{ $info->value }}" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    @endforeach
                @endif
                  

                </div>



            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title"
                style="    display: flex;
                justify-content: space-between;
                align-items: center">
                <h2>Resume</h2>


                @isset($cv_pdf->file)
                <a href="{{ asset('storage/' . $cv_pdf->file) }}" download>
                    <button class="btn btn-primary">Download CV</button>
                </a>
                @endisset

            </div>

            <div class="row">

                @foreach ($personalExperiences as $personalExperience )
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">{{ $personalExperience->name }}</h3>
                    <div class="resume-item">
                        <h4>{{ $personalExperience->job_title }}</h4>
                        <h5>{{ \Carbon\Carbon::parse($personalExperience->start_date)->format('Y') }} - {{ \Carbon\Carbon::parse($personalExperience->end_date)->format('Y') }}</h5>
                        <p><em>{{ $personalExperience->company_name }}</em></p>
                        <p>{{ $personalExperience->location }}</p>
                        <p>{{ $personalExperience->description }}</p>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </section><!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>

            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->project_category->name }}">
                    <div class="portfolio-wrap">
                        <img src="{{ $project->main_image_url }}" alt="" height="260" width="350">
                        <div class="portfolio-links">
                            <a href="{{ $project->main_image_url }}" data-gall="portfolioGallery"
                                class="venobox" title="{{ $project->title }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('template2.projectDetails', $project->id) }}" target="_blank"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
            </div>

            <div class="row">

            @if($servicesPage->information)
                @foreach ($servicesPage->information as $service )

                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="icofont-dashboard-web"></i></div>
                    <h4 class="title"><a href="#">{{ $service->key }}</a></h4>
                    <p class="description">{{ $service->value }}</p>
                </div>

                @endforeach
                @endif

            </div>
        </div>
    </section>


    <!-- ======= Testimonials Section ======= -->
    @if ($testimonials->count() > 0)
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Testimonials</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            @if ($testimonials->count() > 3)
            <div class="owl-carousel testimonials-carousel">

                @foreach ($testimonials as $testimonial)
                @php
                $cleanedContent = strip_tags($testimonial->text);
                @endphp
                <div class="testimonial-item" data-aos="fade-up">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ $cleanedContent }}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ $testimonial->client_image_url }}" class="testimonial-img"
                        width="90" height="90" alt="">
                    <h3>{{ $testimonial->client_name }}</h3>
                    <h4>{{ $testimonial->client_job }}</h4>
                </div>
                @endforeach

            </div>
            @else
            <div class="row">
                @foreach ($testimonials as $testimonial)
                @php
                $cleanedContent = strip_tags($testimonial->text);
                @endphp

                <div class="col-md-4">
                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $cleanedContent }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $testimonial->client_image_url }}" class="testimonial-img"
                            alt="">
                        <h3>{{ $testimonial->client_name }}</h3>
                        <h4>{{ $testimonial->client_job }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
    @endif
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p> Cairo , Egypt . </p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>kareemshaban120@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+2 01090537394</p>
                        </div>

                        <iframe title="Cairo Map"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7248.906218722456!2d31.2344268!3d30.0444196!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzMnMjUuNCJF!5e0!3m2!1sen!2sus!4v1642298571202"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen>
                        </iframe>

                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('sendEmail') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div id="message-container"></div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection