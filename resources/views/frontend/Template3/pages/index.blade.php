@extends('frontend.Template3.layouts.front')


@section('content')

<!-- ### intro
            ================================================== -->
<section id="intro" class="s-intro target-section">

    <div class="row intro-content wide">

        <div class="column">
            <div class="text-pretitle with-line">
                Hello World
            </div>

            <h1 class="text-huge-title">
                I am Luther, <br>
                a digital designer <br>
                & frontend <br>
                developer based <br>
                in Somewhere.
            </h1>
        </div>

        <ul class="intro-social">
            <li><a href="#0">Behance</a></li>
            <li><a href="#0">Twitter</a></li>
            <li><a href="#0">Dribbble</a></li>
            <li><a href="#0">Instagram</a></li>
        </ul>

    </div> <!-- end intro content -->

    <a href="#about" class="intro-scrolldown smoothscroll">
        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
        </svg>
    </a>

</section> <!-- end s-intro -->


<!-- ### about
            ================================================== -->
<section id="about" class="s-about target-section">


    <div class="row about-info wide" data-animate-block>

        <div class="column lg-6 md-12 about-info__pic-block">
            <video src="{{  asset('videos/video_1.mp4') }}" data-animate-el
                autoplay
                muted
                loop></video>
            <!-- <img src="{{  asset('frontend/template3/images/about-photo.jpg') }}" 
                             srcset="{{ asset('frontend/template3/images/about-photo.jpg') }} 1x, {{ asset('frontend/template3/images/about-photo@2x.jpg') }} 2x" alt="" class="about-info__pic" data-animate-el> -->
        </div>

        <div class="column lg-6 md-12">
            <div class="about-info__text">

                <h2 class="text-pretitle with-line" data-animate-el>
                    About
                </h2>
                <p class="attention-getter" data-animate-el>
                    {{ $information['about_me'] }}

                </p>
                <a href="#0" class="btn btn--medium u-fullwidth" data-animate-el>Download CV</a>

            </div>
        </div>
    </div> <!-- about-info -->


    <div class="row about-expertise" data-animate-block>
        <div class="column lg-12">

            <h2 class="text-pretitle" data-animate-el>Expertise</h2>

            <ul class="skills-list h1" data-animate-el>
                <li>Visual Design</li>
                <li>Branding Identity</li>
                <li>UI Design</li>
                <li>Product Design</li>
                <li>Prototyping</li>
                <li>Illustration</li>
            </ul>

        </div>
    </div> <!-- end about-expertise -->


    @php
    $experiencesByType = $personalExperiences->groupBy('type');
    @endphp

    <div class="row about-timelines" data-animate-block>

        @foreach ($experiencesByType as $type => $experiences)
        <div class="column lg-6 tab-12">

            <h2 class="text-pretitle" data-animate-el>
                {{ ucfirst($type) }}
            </h2>

            <div class="timeline" data-animate-el>

                @foreach ($experiences as $personalExperience)
                <div class="timeline__block">
                    <div class="timeline__bullet"></div>
                    <div class="timeline__header">
                        <h4 class="timeline__title">{{ $personalExperience->name }}</h4>
                        <h5 class="timeline__meta">{{ $personalExperience->job_title }}</h5>
                        <p class="timeline__timeframe">
                            {{ \Carbon\Carbon::parse($personalExperience->start_date)->format('Y') }}
                            -
                            {{ \Carbon\Carbon::parse($personalExperience->end_date)->format('Y') }}
                        </p>
                    </div>
                    <div class="timeline__desc">
                        <p>{{ $personalExperience->description }}</p>
                    </div>
                </div>
                @endforeach

            </div> <!-- end timeline -->

        </div> <!-- end column -->
        @endforeach

    </div> <!-- end about-timelines -->


</section> <!-- end s-about -->


<!-- ### works
            ================================================== -->
<section id="works" class="s-works target-section">


    <div class="row works-portfolio">

        <div class="column lg-12" data-animate-block>

            <h2 class="text-pretitle" data-animate-el>
                Recent Works
            </h2>
            <p class="h1" data-animate-el>
                Here are some of my favorite projects I have done lately. Feel free to check them out.
            </p>

            <ul class="folio-list row block-lg-one-half block-stack-on-1000">


                @foreach ($projects as $project)
                <li class="folio-list__item column" data-animate-el>
                    <a class="folio-list__item-link" href="#modal-{{ $project->id }}">
                        <div class="folio-list__item-pic">
                            <img src="{{ $project->main_image_url }}"
                                srcset="{{ $project->main_image_url }} 1x, {{ $project->main_image_url }} 2x" alt="">
                        </div>

                        <div class="folio-list__item-text">
                            <div class="folio-list__item-cat">
                                {{ $project->project_category->name }}
                            </div>
                            <div class="folio-list__item-title">
                                {{ $project->title }}
                            </div>
                        </div>
                    </a>
                    <a class="folio-list__proj-link" href="#" title="project link">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>

                @endforeach

            </ul> <!-- end folio-list -->

        </div> <!-- end column -->


        <!-- Modal Templates Popup
                    -------------------------------------------- -->

        @foreach ($projects as $project)
        <div id="modal-{{ $project->id }}" hidden>
            <div class="modal-popup">
                <img src="{{  $project->main_image_url  }}" style="height: 300px; width: 500px;" alt="">

                <div class="modal-popup__desc">
                    <h5>{{ $project->title }}</h5>
                    <p>{{ $project->info }}</p>
                    <ul class="modal-popup__cat">
                        <li>{{ $project->project_category->name }}</li>
                    </ul>
                </div>

                <a href="{{ $project->live_link }}" class="modal-popup__details">Project link</a>
            </div>
        </div> <!-- end modal -->
        @endforeach

    </div> <!-- end works-portfolio -->


    <div class="row testimonials">
        <div class="column lg-12" data-animate-block>

            <div class="swiper-container testimonial-slider" data-animate-el>

                <div class="swiper-wrapper">

                    @foreach ($testimonials as $testimonial )
                    <div class="testimonial-slider__slide swiper-slide">
                        <div class="testimonial-slider__author">
                            <img src="{{ $testimonial->client_image_url }}" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>{{ $testimonial->client_name }}</strong>
                                <span>{{ $testimonial->client_job }}</span>
                            </cite>
                        </div>
                        <p>
                            {{ $testimonial->text }}
                        </p>
                    </div>

                    @endforeach





                </div> <!-- end swiper-wrapper -->

                <div class="swiper-pagination"></div>

            </div> <!-- end swiper-container -->

        </div> <!-- end column -->
    </div> <!-- end row testimonials -->

</section> <!-- end s-works -->


<!-- ### contact
            ================================================== -->
<section id="contact" class="s-contact target-section">

    <div class="row contact-top">
        <div class="column lg-12">
            <h2 class="text-pretitle">
                Get In Touch
            </h2>

            <p class="h1">
                I love to hear from you.
                Whether you have a question or just
                want to chat about design, tech & art — shoot me a message.
            </p>
        </div>
    </div> <!-- end contact-top -->

    <div class="row contact-bottom">
        <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
            <h3 class="text-pretitle">Reach me at</h3>
            <p class="contact-links">
                <a href="mailto:sayhello@luther.com" class="mailtoui">sayhello@luther.com</a> <br>
                <a href="tel:+1975432345">+197 543 2345</a>
            </p>
        </div>
        <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
            <h3 class="text-pretitle">Social</h3>
            <ul class="contact-social">
                <li><a href="#0">Behance</a></li>
                <li><a href="#0">Dribble</a></li>
                <li><a href="#0">Twitter</a></li>
                <li><a href="#0">Instagram</a></li>
                <li><a href="#0">Github</a></li>
            </ul>
        </div>
        <div class="column lg-4 md-12 contact-block">
            <a href="mailto:sayhello@luther.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
        </div>
    </div> <!-- end contact-bottom -->

</section> <!-- end contact -->


@endsection