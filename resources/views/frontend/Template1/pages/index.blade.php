@extends('frontend.Template1.layouts.front')


@section('next_previous')
    <!---------------------- next & prev btn starts ---------------------->

    <div class="main-arrow" style="top: calc(50vh - 25px)">
        <div class="arrow-next"><a class="mdi mdi-menu-down" href="{{ route('template1.about') }}">
                <h5>About</h5>
            </a></div>
    </div>

    <!---------------------- end of next & prev btn ---------------------->
@endsection

@section('content')
    <!---------------------- home starts ---------------------->

    <section class="home" id="home">
        <div class="container-fluid">
            <div class="color-block"></div>
            <div class="row">
                <!-- <div class="col-10 col-md-5 col-lg-4">
                                            <div class="home-bg"></div>
                                          </div> -->
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="home-details">
                        <div class="home-text">
                            <h6>HI THERE !</h6>
                            <h1>Kareem <span>Shaban</span></h1>
                            <div class="cd-intro">
                                <h6 class="cd-headline clip">
                                    <span>I'M </span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Kareem Shaban</b>
                                        <b>A WEB DESIGNER</b>
                                        <b>A Backend Developer</b>
                                        <b>A Junior Penetration Tester</b>
                                    </span>
                                </h6>
                            </div>
                            <p>I'm a Results-driven Junior Laravel Developer with a
                                passion for building robust and efficient web applications using the Laravel framework.
                                Proficient in PHP, HTML, CSS, and JavaScript, with a solid foundation
                                in web development principles.</p>
                        </div>
                        <div class="col-sm-12 col-md-7 p-0 pb-4">
                            <a class="description-btn" href="about.html">
                                <span class="name-description">MORE ABOUT ME</span>
                                <div class="btn-icon">
                                    <i class="mdi mdi-account"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------- end of home ---------------------->
@endsection
