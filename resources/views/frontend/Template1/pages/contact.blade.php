@extends('frontend.Template1.layouts.front')

@section('next_previous')
    <!---------------------- next & prev btn starts ---------------------->

    <div class="main-arrow" style="top: calc(50vh - 25px)">
        <div class="arrow-prev"><a class="mdi mdi-menu-up" href="{{ route('blog') }}">
                <h5>Blog</h5>
            </a></div>

    </div>
    <!---------------------- end of next & prev btn ---------------------->
@endsection

@section('content')
    <!---------------------- contact starts ---------------------->

    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="row">
                <!-- title starts -->
                <div class="col-lg-12">
                    <div class="contact-title pt-3 pb-5 text-center">
                        <h1>Contact <span>Me</span></h1>
                        <div class="separator d-none d-lg-block"></div>
                    </div>
                </div>
                <!-- end of title -->
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 pb-3 text-center">
                    <div class="contactform">
                        <i class="mdi mdi-email"></i>
                        <h5>Email Us <span class="main-color-text">At</span></h5>
                        <p>kreative4469@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 pb-3 text-center">
                    <div class="contactform">
                        <i class="mdi mdi-phone"></i>
                        <h5>Call Us <span class="main-color-text">On</span></h5>
                        <p>+985 123 7856</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 pb-3 text-center">
                    <div class="contactform">
                        <i class="mdi mdi-map-marker"></i>
                        <h5>Visit <span class="main-color-text">Website</span></h5>
                        <p>202, Grasselli Street.</p>
                    </div>
                </div>
            </div>
            <form class="" action="" method="POST">
                <div class="row pt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name*" class="form-control " name="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email*" class="form-control " name="Email" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" placeholder="Your Subsect*" class="form-control form-control-lg mb-3 "
                                name="Subsect" required>
                            <textarea style="height: 120px" class="form-control form-control-lg " placeholder="Your Message" name="Message"
                                rows="3"cols="50" required></textarea>
                        </div>
                        <div class="col-sm-12 col-md-4 ml-auto p-0">
                            <button type="submit" name="button" class="description-btn" href="#">
                                <span class="name-description">SEND MESSAGE</span>
                                <div class="btn-icon">
                                    <i class="mdi mdi-send"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
