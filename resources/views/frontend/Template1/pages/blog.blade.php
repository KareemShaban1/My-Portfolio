@extends('frontend.Template1.layouts.front')


@section('next_previous')
    <!---------------------- next & prev btn starts ---------------------->

    <div class="main-arrow" style="top: calc(50vh - 100px);">
        <div class="arrow-prev"><a class="mdi mdi-menu-up" href="{{ route('template1.portfolio') }}">
                <h5>Portfolio</h5>
            </a></div>
        <div class="arrow-next"><a class="mdi mdi-menu-down" href="{{ route('template1.contact') }}">
                <h5>Contact</h5>
            </a></div>
    </div>
    <!---------------------- end of next & prev btn ---------------------->
@endsection

@section('content')
    <!---------------------- blog starts ---------------------->

    <section class="blog py-5" id="blog">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="blog-title py-3 text-center">
                        <h1>My <span>Blogs</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->

                <!-- blog card-1 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-1.html"><img src="{{ asset('frontend/template1/images/blog1.jpg') }}"
                                    class="img-fluid" alt="blog blog1"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-1.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-1.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-1 -->

                <!-- blog card-2 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-2.html"><img src="{{ asset('frontend/template1/images/blog2.jpg') }}"
                                    class="img-fluid" alt="blog blog2"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-2.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-2.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-2 -->

                <!-- blog card-3 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-3.html"><img src="{{ asset('frontend/template1/images/blog3.jpg') }}"
                                    class="img-fluid" alt="blog blog3"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-3.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-3.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-3 -->

                <!-- blog card-4 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-4.html"><img src="{{ asset('frontend/template1/images/blog4.jpg') }}"
                                    class="img-fluid" alt="blog blog4"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-4.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-4.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-4 -->

                <!-- blog card-5 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-5.html"><img src="{{ asset('frontend/template1/images/blog5.jpg') }}"
                                    class="img-fluid" alt="blog blog5"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-5.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-5.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-5 -->

                <!-- blog card-6 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-6.html"><img src="{{ asset('frontend/template1/images/blog6.jpg') }}"
                                    class="img-fluid" alt="blog blog6"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-6.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-6.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-6 -->

                <!-- blog card-7 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-7.html"><img src="{{ asset('frontend/template1/images/blog7.jpg') }}"
                                    class="img-fluid" alt="blog blog7"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-6.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-6.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-7 -->

                <!-- blog card-8 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-8.html"><img src="{{ asset('frontend/template1/images/blog8.jpg') }}"
                                    class="img-fluid" alt="blog blog8"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-6.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-6.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-8 -->

                <!-- blog card-9 -->
                <div class="col-md-6 col-lg-4 mt-5">
                    <div class="blog-card card">
                        <div class="blog-card-img">
                            <a href="Articles/article-9.html"><img src="{{ asset('frontend/template1/images/blog9.jpg') }}"
                                    class="img-fluid" alt="blog blog9"> </a>
                        </div>
                        <div class="blog-card-text p-3">
                            <h6><span>KR</span>Branding</h6>
                            <p>April 26, 2020 by <a href="Articles/article-6.html"><span>KR Themes</span></a></p>
                            <a href="Articles/article-6.html">
                                <p>Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis
                                    fames. Lobortis ultricies.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end of blog card-9 -->

            </div>
        </div>
    </section>

    <!---------------------- end of color blog ---------------------->
@endsection
