@extends('frontend.Template1.layouts.front')


@section('next_previous')
    <!---------------------- next & prev btn starts ---------------------->

    <div class="main-arrow" style="top: calc(50vh - 100px);">
        <div class="arrow-prev"><a class="mdi mdi-menu-up" href="{{ route('template1.services') }}">
                <h5>Services</h5>
            </a></div>
        <div class="arrow-next"><a class="mdi mdi-menu-down" href="{{ route('template1.blog') }}">
                <h5>Blog</h5>
            </a></div>
    </div>
    <!---------------------- end of next & prev btn ---------------------->
@endsection

@section('content')
    <!---------------------- portfolio ---------------------->
    <!-- Page Title Starts -->
    <section id="portfolio" class="portfolio py-5">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="portfolio-title text-center py-3">
                        <h1>My <span>portfolio</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->
            </div>
        </div>
    </section>
    <!-- end of Page Title -->


    <div class="container pb-5">
        <div id="grid-gallery" class="grid-gallery">
            <!-- Portfolio Grid Wrap Starts -->
            <section class="grid-wrap">
                <ul id="grid" class="grid">
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-1.jpg') }}" alt="project-1">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-2.jpg') }}" alt="project-2">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-3.jpg') }}" alt="project-3">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-4.jpg') }}" alt="project-4">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-5.jpg') }}" alt="project-5">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-6.jpg') }}" alt="project-6">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-7.jpg') }}" alt="project-7">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-8.jpg') }}" alt="project-8">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{ asset('frontend/template1/images/project-9.jpg') }}" alt="project-9">
                            <div><span>Images Project</span></div>
                        </figure>
                    </li>
                    <!-- end of Portfolio Item -->
                </ul>
            </section>
            <!-- end of  Portfolio Grid Wrap -->

            <!-- Portfolio Slideshow Starts -->
            <section class="slideshow">
                <ul>


                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <p>
                                        The project aims to provide a robust and scalable solution for creating and managing
                                        an online store.
                                    </p>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-1.jpg') }}" alt="project-1">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->




                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-2.jpg') }}" alt="project-2">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-3.jpg') }}" alt="project-3">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-4.jpg') }}" alt="project-4">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">wwwtemplatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-5.jpg') }}" alt="project-5">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-6.jpg') }}" alt="project-6">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-7.jpg') }}" alt="project-7">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-8.jpg') }}" alt="project-8">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <figcaption>
                                <h2 class="text-center pb-4">IMAGE PROJECT</h2>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-file-document-outline pr-1"></i>
                                    <span class="project-label">Project : </span>
                                    <span class="font-weight-bold">Website</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-account-outline pr-1"></i>
                                    <span class="project-label">Client : </span>
                                    <span class="font-weight-bold">Template Monster</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-xml pr-1"></i>
                                    <span class="project-label">Languages : </span>
                                    <span class="font-weight-bold">HTML, CSS, Javascript</span>
                                </div>
                                <div class="col-md-6 mb-2 float-left">
                                    <i class="mdi mdi-open-in-new pr-1"></i>
                                    <span class="project-label">Preview : </span>
                                    <span class="font-weight-bold"><a href="#">www.templatemonster.com</a></span>
                                </div>
                            </figcaption>
                            <img src="{{ asset('frontend/template1/images/project-9.jpg') }}" alt="project-9">
                        </figure>
                    </li>
                    <!-- end of Portfolio Item Detail -->
                </ul>
                <!-- Portfolio Navigation Starts -->
                <nav>
                    <span class="mdi mdi-chevron-left mdi-48px nav-prev"></span>
                    <span class="mdi mdi-chevron-right mdi-48px nav-next"></span>
                    <span class="mdi mdi-close mdi-inactive nav-close"></span>
                </nav>
                <!-- end of Portfolio Navigation -->
            </section>
            <!-- end of Portfolio Slideshow -->
        </div>
    </div>
    <!---------------------- end of portfolio ---------------------->




    @push('scripts')
        <!-- waypoints.js -->
        <script src="{{ asset('frontend/JS/waypoints.js') }}"></script>

        <!-- jquery.counterup.js -->
        <script src="{{ asset('frontend/JS/jquery.counterup.min.js') }}"></script>

        <!-- jquery.lineProgressbar.js -->
        <script src="{{ asset('frontend/JS/jquery.lineProgressbar.js') }}"></script>

        <!-- imagesloaded.pkgd.min.js -->
        <script src="{{ asset('frontend/JS/imagesloaded.pkgd.min.js') }}"></script>

        <!-- masonry.pkgd.min.js -->
        <script src="{{ asset('frontend/JS/masonry.pkgd.min.js') }}"></script>

        <!-- classie.js -->
        <script src="{{ asset('frontend/JS/classie.js') }}"></script>

        <!-- cbpGridGallery.js -->
        <script src="{{ asset('frontend/JS/cbpGridGallery.js') }}"></script>

        <!--hoverdir.js -->
        <script src="{{ asset('frontend/JS/jquery.hoverdir.js') }}"></script>
    @endpush
@endsection
