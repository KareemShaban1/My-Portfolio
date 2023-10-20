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
                    <p>{{ $information['about_me'] }}</p>
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
                                    {{-- <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 10 June 1999</li> --}}
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>
                                        {{ $information['website'] }}
                                    </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong>
                                        {{ $information['phone'] }}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nationality:</strong>
                                        {{ $information['nationality'] }}</li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>
                                        {{ $information['age'] }}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong>
                                        {{ $information['email'] }}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                            culpa magni laudantium dolores.
                        </p> --}}
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

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">{{ $information['happy_clients'] }}</span>
                            <p><strong>Happy Clients</strong>
                                {{-- consequuntur quae --}}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">{{ $information['projects'] }}</span>
                            <p><strong>Projects</strong>
                                {{-- adipisci atque cum quia aut --}}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">{{ $information['experience_years'] }}</span>
                            <p><strong>Experience Years</strong>
                                {{-- aut commodi quaerat --}}
                            </p>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">{{ $information['html_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['html_value'] }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">{{ $information['css_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['css_value'] }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i
                                    class="val">{{ $information['javascript_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['javascript_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Jquery <i class="val">{{ $information['jquery_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['jquery_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i
                                    class="val">{{ $information['bootstrap_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['bootstrap_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">{{ $information['php_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['php_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i
                                    class="val">{{ $information['laravel_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['laravel_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Flutter <i
                                    class="val">{{ $information['flutter_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['flutter_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">C++ <i class="val">{{ $information['c++_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['c++_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="progress">
                            <span class="skill">Python <i class="val">{{ $information['python_value'] }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $information['python_value'] }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>


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
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}


                    @isset($cv_pdf->file)
                        <a href="{{ asset('storage/' . $cv_pdf->file) }}" download>
                            <button class="btn btn-primary">Download CV</button>
                        </a>
                    @endisset

                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        {{-- <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4>Kareem Shaban</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                    and developing user-centered digital/print marketing material from initial concept
                                    to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div> --}}

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Computer Sience Bachelor’s Degree</h4>
                            <h5>2017 - 2021</h5>
                            <p><em>Faculty of Computer and Artificial Intelligence , Benha University</em></p>
                            <p> Bachelor’s Degree in Information Security &amp; Digital Forensics , Faculty of Computer
                                and Artificial Intelligence , Benha University</p>
                        </div>

                        {{-- <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae
                                consequatur neque etlon sader mart dila</p>
                        </div> --}}
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Junior Laravel Developer</h4>
                            <h5>2023 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>
                                    <strong>Code Development: </strong> Writing clean, well-structured, and maintainable PHP
                                    code using the Laravel framework.

                                </li>

                                <li>
                                    <strong> Feature Implementation: </strong> Implementing new features and functionalities
                                    into web
                                    applications.

                                </li>

                                <li>
                                    <strong> Bug Fixing: </strong> Identifying and fixing software bugs or issues in the
                                    codebase.
                                </li>

                                <li>
                                    <strong> Database Design: </strong> Designing and maintaining database structures using
                                    Laravel's Eloquent
                                    ORM
                                    (Object-Relational Mapping).

                                </li>

                                <li>
                                    <strong> API Development: </strong> Creating RESTful APIs for mobile applications or
                                    integrating
                                    third-party
                                    APIs into the system.
                                </li>

                                <li>
                                    <strong> Front-End Integration: </strong> Integrating the back-end logic with front-end
                                    technologies like
                                    HTML,
                                    CSS, and JavaScript.
                                </li>

                                <li>
                                    <strong> Authentication and Authorization: </strong> Implementing user authentication
                                    and authorization
                                    mechanisms using Laravel's built-in tools.

                                </li>

                                <li>
                                    <strong> Unit Testing: </strong> Writing and running unit tests to ensure the
                                    reliability of the code.

                                </li>
                                <li>
                                    <strong> Performance Optimization: </strong> Identifying and addressing performance
                                    bottlenecks in the
                                    application.
                                </li>


                                <li>
                                    <strong> Version Control: </strong> Managing code using version control systems like
                                    Git.
                                </li>
                                <li>
                                    <strong> Collaboration: </strong> Working collaboratively with the development team and
                                    other stakeholders.
                                </li>
                                <li>
                                    <strong> Documentation: </strong> Writing technical documentation for code, APIs, and
                                    features.
                                </li>


                                <li>
                                    <strong> Deployment: </strong> Assisting in deploying web applications to production
                                    servers.
                                </li>
                                <li>
                                    <strong> Adhering to Coding Standards: </strong> Following Laravel and industry coding
                                    standards for
                                    consistency and maintainability.
                                </li>
                                <li>
                                    <strong> Support and Maintenance: </strong> support and maintenance for existing
                                    applications.
                                </li>
                                <li>
                                    <strong> Problem Solving: </strong> Analyzing issues and coming up with solutions for
                                    various technical
                                    challenges.
                                </li>

                            </ul>
                        </div>
                        {{-- <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categories as $category)
                                <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                            @endforeach

                            {{-- <li data-filter=".filter-backend">Backend</li>
                            <li data-filter=".filter-flutter">Flutter</li> --}}
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->project_category->name }}">
                            <div class="portfolio-wrap">
                                <img src="{{ $project->main_image_url }}" alt="" height="300" width="300">
                                <div class="portfolio-links">
                                    <a href="{{ $project->main_image_url }}" data-gall="portfolioGallery"
                                        class="venobox" title="{{ $project->title }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('template2.projectDetails', $project->id) }}"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- 
                    <div class="col-lg-4 col-md-6 portfolio-item filter-flutter">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-2.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-2.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-frontend">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-3.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-3.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="App 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-backend">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-4.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-4.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-flutter">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-5.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-5.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Web 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-frontend">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-6.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-6.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="App 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-backend">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-7.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-7.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Card 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-backend">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-8.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-8.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Card 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-flutter">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-9.jpg"
                                class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/template2/assets') }}/img/portfolio/portfolio-9.jpg"
                                    data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div> --}}

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
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="icofont-code-alt"></i></div>
                        <h4 class="title"><a href="#">Laravel Web Development</a></h4>
                        <p class="description">Building custom, dynamic websites and web applications using the Laravel
                            framework.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="icofont-code"></i></div>
                        <h4 class="title"><a href="#">Website Customization</a></h4>
                        <p class="description">Customizing existing websites and scripts to meet your specific
                            requirements.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="icofont-web"></i></div>
                        <h4 class="title"><a href="#">Static and Dynamic Websites</a></h4>
                        <p class="description">Creating both static and dynamic websites tailored to your needs.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-file-code"></i></div>
                        <h4 class="title"><a href="#">Code Optimization</a></h4>
                        <p class="description">Optimizing code for better performance and efficiency.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="icofont-dashboard-web"></i></div>
                        <h4 class="title"><a href="#">Website Maintenance</a></h4>
                        <p class="description">Providing ongoing website maintenance and updates.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="icofont-settings"></i></div>
                        <h4 class="title"><a href="#">Custom Web Solutions</a></h4>
                        <p class="description">Creating tailored web solutions to address your unique needs.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-smart-phone"></i></div>
                        <h4 class="title"><a href="#">Flutter UI App Development</a></h4>
                        <p class="description">Designing and developing intuitive and visually appealing user interfaces
                            for Flutter mobile applications.</p>
                    </div>


                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="icofont-edit"></i></div>
                        <h4 class="title"><a href="#">Data Entry Services</a></h4>
                        <p class="description">Efficient data entry and management services to keep your information
                            organized and up-to-date.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Testimonials Section ======= -->
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
                                <img src="{{ $testimonial->client_image_url }}" class="testimonial-img" width="90"
                                    height="90" alt="">
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
        </section><!-- End Testimonials Section -->

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
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe title="map"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
