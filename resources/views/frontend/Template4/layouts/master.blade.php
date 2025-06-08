<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Fotogency | Photography Agency Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/template4/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/template4/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/template4/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/template4/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('frontend/template4/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/template4/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('frontend/template4/vendors/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template4/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template4/assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/template4/assets/css/user.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="cursor-outer d-none d-md-block"></div>
        <nav class="navbar navbar-light py-3 px-0 overflow-hidden">
            <div class="container px-md-5">
                <div class="row w-100 g-0 justify-content-between">
                    <div class="col-8">
                        <div class="d-inline-block"><a class="navbar-brand pt-0 fs-3 text-black d-flex align-items-center" href="index.html"><img class="img-fluid" src="{{ asset('frontend/template4/assets/img/icons/logo-icon.png')}}" alt="" />
                                <span class="fw-bolder ms-2">Kareem</span><span class="fw-thin">Shaban</span></a></div>
                    </div>
                    <div class="col-4 d-lg-none text-end pe-0">
                        <button class="btn p-0 shadow-none text-black fs-2 d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle offcanvas navigation"><span class="menu-bar"></span></button>
                    </div>
                    <div class="offcanvas offcanvas-end px-0" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasTitle" aria-hidden="true">
                        <div class="offcanvas-header justify-content-end">
                            <h5 class="visually-hidden offcanvas-title" id="navbarOffcanvasTitle">Menu</h5>
                            <button class="btn p-0 shadow-none text-black fs-2 d-inline text-end" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="menu-close-bar"></span></button>
                        </div>
                        <div class="offcanvas-body px-0">
                            <div class="d-lg-flex flex-center-start gap-3 overflow-hidden">
                                <ul class="navbar-nav ms-auto fs-4 ps-6">
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 @if (Route::is('template4.home')) active @endif" aria-current="page" href="{{ route('template4.home') }}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 @if (Route::is('template4.portfolio')) active @endif" aria-current="page" href="{{ route('template4.portfolio') }}">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 @if (Route::is('template4.gallery')) active @endif" aria-current="page" href="{{ route('template4.gallery') }}">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5 @if (Route::is('template4.projects')) active @endif" aria-current="page" href="{{ route('template4.projects') }}">Exhibitions</a></li>
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5" aria-current="page" href="about.html">About</a></li>
                                    <li class="nav-item"><a class="nav-link d-inline-block nav-text-outlined lh-1 text-white fs-5" aria-current="page" href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-none d-lg-flex justify-content-end position-relative z-index-1">
                            <div class="position-absolute absolute-centered z-index--1">
                                <h1 class="ms-2 fw-bolder text-outlined text-uppercase text-white pe-none display-1">Home</h1>
                            </div>
                            <div class="d-flex gap-3 align-items-start"><a class="mb-0 ms-auto text-warning fs-0 fw-bold text-uppercase" href="blog.html#contact">Contact Now</a>
                                <ul class="navbar-nav navbar-fotogency ms-auto text-end">
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 @if (Route::is('template4.home')) active @endif" aria-current="page" href="{{ route('template4.home') }}">Home</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 @if (Route::is('template4.portfolio')) active @endif" aria-current="page" href="{{ route('template4.portfolio') }}">Portfolio</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 @if (Route::is('template4.gallery')) active @endif" aria-current="page" href="{{ route('template4.gallery') }}">Gallery</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0 @if (Route::is('template4.projects')) active @endif" aria-current="page" href="{{ route('template4.projects') }}">Exhibitions</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page" href="about.html">About</a></li>
                                    <li class="nav-item px-2 position-relative"><a class="nav-link pt-0" aria-current="page" href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->

    @include('frontend.Template4.layouts.footer')

    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('frontend/template4/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/lodash/lodash.min.js') }}"></script>
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-polyfills/0.1.43/polyfill.min.js"></script>
    <script src="{{ asset('frontend/template4/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('frontend/template4/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/template4/assets/js/theme.js') }}"></script>

</body>

</html>