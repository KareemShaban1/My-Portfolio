<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kareem Shaban</title>
    @php
        $metaData = App\Models\MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property
    @endphp

    <meta content="{{ $metaData['description'] }}" name="description">
    <meta content="{{ $metaData['keywords'] }}" name="keywords">

    <!-- Add a canonical tag to specify the preferred version of the page -->
    <link rel="canonical" href="{{ $metaData['canonical_link'] }}">

    <!-- Add Open Graph metadata for social media sharing -->
    <meta property="og:title" content="{{ $metaData['og:title'] }}">
    <meta property="og:description" content="{{ $metaData['og:description'] }}">
    <meta property="og:url" content="{{ $metaData['og:url'] }}">
    <meta property="og:type" content="{{ $metaData['og:type'] }}">
    <meta property="og:site_name" content="{{ $metaData['og:site_name'] }}">
    <meta property="article:publisher" content="{{ $metaData['article:publisher'] }}">
    <meta property="og:updated_time" content="{{ $metaData['og:updated_time'] }}">
    <meta property="og:image" content="{{ $metaData['og:image'] }}">
    <meta property="og:image:secure_url" content="{{ $metaData['og:image:secure_url'] }}">
    <meta property="og:image:width" content="{{ $metaData['og:image:width'] }}">
    <meta property="og:image:height" content="{{ $metaData['og:image:height'] }}">
    <meta property="og:image:alt" content="{{ $metaData['og:image:alt'] }}">
    <meta property="og:image:type" content="{{ $metaData['og:image:type'] }}">
    <meta property="article:published_time" content="{{ $metaData['article:published_time'] }}">
    <meta property="article:modified_time" content="{{ $metaData['article:modified_time'] }}">

    <!-- Add Twitter Card metadata for Twitter sharing -->
    <meta name="twitter:card" content="{{ $metaData['twitter:card'] }}">
    <meta name="twitter:title" content="{{ $metaData['twitter:title'] }}">
    <meta name="twitter:description" content="{{ $metaData['twitter:description'] }}">
    <meta name="twitter:image" content="{{ $metaData['twitter:image'] }}">


    <!-- Favicons -->
    {{-- <link href="{{ asset('frontend/template2/assets/img/favicon.png') }}" rel="icon"> --}}
    <link href="{{ asset('frontend/template2/assets/img/img1.jpg') }}" rel="icon">

    <link href="{{ asset('frontend/template2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/template2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template2/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template2/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/template2/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/template2/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/template2/assets/css/style.css') }}" rel="stylesheet">

    <style>
        /*--------------------------------------------------------------
                            # Whatsapp button Section
                            --------------------------------------------------------------*/

        .whatsapp-button {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 999;
            animation: whatsapp-button-animation 1s infinite;
        }

        .whatsapp-icon {
            width: 80px;
            height: 80px;
        }

        @keyframes whatsapp-button-animation {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>

</head>

<body>


    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" name="menu-button" class="mobile-nav-toggle d-xl-none"><i
            class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">

        {{-- temporary --}}

        @php
            $portfolioImages = App\Models\PortfolioImage::pluck('image', 'image_name')->toArray();
            // Map the array to add the image_url attribute to each element
            $portfolioImages = collect($portfolioImages)
                ->map(function ($image, $image_name) {
                    $portfolioImage = new App\Models\PortfolioImage();
                    $portfolioImage->image = $image;
                    $portfolioImage->image_name = $image_name;
                    // Add the image_url attribute
                    $portfolioImage->image_url = $portfolioImage->image_url;
                    return $portfolioImage;
                })
                ->toArray();
        @endphp

        {{-- end temporary --}}


        <div class="d-flex flex-column">

            <div class="profile">
                @isset($portfolioImages['personal'])
                    @if ($portfolioImages['personal']['image'] != null)
                        <img src="{{ $portfolioImages['personal']['image_url'] }}" alt=""
                            class="img-fluid rounded-circle">
                        <h1 class="text-light" style="margin-top: 60px"><a href="">Kareem Shaban</a></h1>
                        <div class="social-links mt-3 text-center">
                            <a href="#" class="twitter">
                                <span class="visually-hidden">Twitter</span>
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <span class="visually-hidden">Facebook</span>
                                <i class="bx bxl-facebook"></i>
                            </a>
                            {{-- <a href="#" class="instagram">
                                <span class="visually-hidden">Instagram</span>
                                <i class="bx bxl-instagram"></i></a> --}}
                            <a href="https://www.linkedin.com/in/kareem-shaban-%F0%9F%87%B5%F0%9F%87%B8-91411b1b6/"
                                class="linkedin">
                                <span class="visually-hidden">Linked In</span>
                                <i class="bx bxl-linkedin"></i></a>
                        </div>
                    @else
                        <h1 class="text-light" style="margin-top:100px"><a href="">Kareem Shaban</a></h1>
                        <div class="social-links mt-3 text-center" style="margin-bottom:50px">
                            <a href="#" class="twitter">
                                <span class="visually-hidden">Twitter</span>
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <span class="visually-hidden">Facebook</span>
                                <i class="bx bxl-facebook"></i>
                            </a>
                            {{-- <a href="#" class="instagram">
                                <span class="visually-hidden">Instagram</span>
                                <i class="bx bxl-instagram"></i></a> --}}
                            <a href="https://www.linkedin.com/in/kareem-shaban-%F0%9F%87%B5%F0%9F%87%B8-91411b1b6/"
                                class="linkedin">
                                <span class="visually-hidden">Linked In</span>
                                <i class="bx bxl-linkedin"></i></a>
                        </div>
                    @endif
                @endisset


                {{-- <h1 class="text-light" style="margin-top: 0px"><a href="">Kareem Shaban</a></h1> --}}
                {{-- <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter">
                        <span class="visually-hidden">Twitter</span>
                        <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="facebook">
                        <span class="visually-hidden">Facebook</span>
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="instagram">
                        <span class="visually-hidden">Instagram</span>
                        <i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin">
                        <span class="visually-hidden">Linked In</span>
                        <i class="bx bxl-linkedin"></i></a>
                </div> --}}
            </div>

            <nav class="nav-menu">
                @if (request()->routeIs('template2.projectDetails'))
                    <ul>
                        <li class="active"><a href="{{ route('template2.home') }}#hero"><i class="bx bx-home"></i>
                                <span>Home</span></a>
                        </li>
                        <li><a href="{{ route('template2.home') }}#about"><i class="bx bx-user"></i>
                                <span>About</span></a></li>
                        <li><a href="{{ route('template2.home') }}#resume"><i class="bx bx-file-blank"></i>
                                <span>Resume</span></a></li>
                        <li><a href="{{ route('template2.home') }}#portfolio"><i class="bx bx-book-content"></i>
                                Portfolio</a></li>
                        <li><a href="{{ route('template2.home') }}#services"><i class="bx bx-server"></i>
                                Services</a></li>
                        <li><a href="{{ route('template2.home') }}#contact"><i class="bx bx-envelope"></i>
                                Contact</a></li>

                    </ul>
                @else
                    <ul>
                        <li class="active"><a href="#hero"><i class="bx bx-home"></i>
                                <span>Home</span></a>
                        </li>
                        <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                        <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
                        <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

                    </ul>
                @endif

            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i
                    class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->





    @yield('content')


    <!-- ======= Footer ======= -->
    {{-- <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                           Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer --> --}}

    {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}

    <!-- ======= Whatsapp button ======= -->
    <!-- 01553582509  -->
    <a href="https://api.whatsapp.com/send?phone=01553582509" target="_blank" class="whatsapp-button">
        <img src="{{ asset('frontend/template2/assets/img/whatsapp_logo.png') }}" alt="WhatsApp"
            class="whatsapp-icon">
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/template2/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('frontend/template2/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/template2/assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Get the message from the Laravel session
            var message = '{{ session('message') }}';

            // Check if a message is available
            if (message) {
                // Display the message
                $("#message-container").html(message).fadeIn();

                // Automatically hide the message after 2 seconds
                setTimeout(function() {
                    $("#message-container").fadeOut();
                }, 2000);
            }
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const display = document.getElementById('content-display');
        const editor = document.getElementById('editor');

        // On click: hide <p> and show editor
        display.addEventListener('click', function () {
            display.style.display = 'none';
            editor.style.display = 'block';
            editor.focus();
        });

        // On input: send updated content to backend
        let timeout = null;

        editor.addEventListener('input', function () {
            // Optional: Debounce the request (only send after user stops typing for 500ms)
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                const content = editor.innerHTML;

                fetch("{{ route('template1.home') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        content: content
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Content updated!');
                })
                .catch(error => {
                    console.error('Update failed:', error);
                });
            }, 500);
        });
    });
</script>



</body>

</html>
