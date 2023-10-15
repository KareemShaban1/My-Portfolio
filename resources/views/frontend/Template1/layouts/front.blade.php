<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kareem Shaban</title>
    <meta name="author" content="KR Themes">
    <!-- favicon -->
    <link rel="shortcut icon" href="Images/favicon.ico">
    <!-- google font poppins -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- google font roboto -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/CSS/bootstrap.min.css') }}">

    <!-- Material Design icons -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/Fonts/MaterialDesign-Webfont-master/css/materialdesignicons.min.css') }}">

    <!-- type.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/CSS/type.css') }}">

    <!-- color -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/CSS/Color/yellow.css') }}" id="switcher">

    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/CSS/style.css') }}">

    <script src="{{ asset('frontend/JS/modernizr.custom.js') }}"></script>

</head>




<body onload="myFunction()" style="margin:0; overflow: hidden;">
    <!---------------------- preloader starts ---------------------->
    <div id="loader"></div>
    <!---------------------- end of preloader ---------------------->

    <!---------------------- navigator starts ---------------------->
    <div class="main-navigator">
        <span class="mdi mdi-menu"></span>
        <ul class="navigator-list">
            <li style="z-index: 1"><a class="mdi mdi-home navigator-active" href="{{ route('home') }}"></a></li>
            <li><a class="mdi mdi-account" href="{{ route('about') }}"></a></li>
            <li><a class="mdi mdi-face-agent" href="{{ route('services') }}"></a></li>
            <li><a class="mdi mdi-briefcase-variant" href="{{ route('portfolio') }}"></a></li>
            <li><a class="mdi mdi-forum" href="{{ route('blog') }}"></a></li>
            <li><a class="mdi mdi-account-box" href="{{ route('contact') }}"></a></li>
        </ul>
    </div>
    <!---------------------- end of navigator ---------------------->

    <!---------------------- mobile-menu starts ---------------------->

    <nav class="mobile-nav">
        <div class="container-fluid">
            <div class="page-title col-10 px-0 float-left">
                <h2>MD. <span>KAWSAR</span></h2>
            </div>
            <button class="trigger px-0 col-2">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="nav-menu">
                <ul class="nav-links">
                    <li><a class="nav-active" href="index.html"><i class="mdi mdi-home mr-3"></i>HOME</a></li>
                    <li><a href="about.html"><i class="mdi mdi-account mr-3"></i>ABOUT</a></li>
                    <li><a href="services.html"><i class="mdi mdi-face-agent mr-3"></i>SERVICES</a></li>
                    <li><a href="portfolio.html"><i class="mdi mdi-briefcase-variant mr-3"></i>PORTFOLIO</a></li>
                    <li><a href="blog.html"><i class="mdi mdi-forum mr-3"></i>BLOG</a></li>
                    <li><a href="contact.html"><i class="mdi mdi-account-box mr-3"></i>CONTACT</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!---------------------- end of mobile-menu ---------------------->


    @yield('next_previous')

    <!---------------------- color switcher starts ---------------------->

    <div class="switcher-wrapper">
        <button class="switcher-trigger"><i class="mdi mdi-cog mdi-spin"></i></button>
        <div class="switcher-inner">
            <h6>CHOOSE STYLE</h6>
            <ul class="color-list">
                <li class="green"><button class="mdi mdi-check"></button></li>
                <li class="blue"><button class="mdi mdi-check"></button></li>
                <li class="pink"><button class="mdi mdi-check"></button></li>
                <li class="orange"><button class="mdi mdi-check"></button></li>
                <li class="purple"><button class="mdi mdi-check"></button></li>
                <li class="yellow"><button class="mdi mdi-check"></button></li>
            </ul>
        </div>
    </div>

    <!---------------------- end of color switcher ---------------------->



    @yield('content')





    <!-- jquery.js -->
    <script src="{{ asset('frontend/JS/jquery-3.5.1.js') }}"></script>

    <!-- popper.js -->
    <script src="{{ asset('frontend/JS/popper.js') }}"></script>

    <!-- bootstrap.min.js -->
    <script src="{{ asset('frontend/JS/bootstrap.min.js') }}"></script>

    <!-- type.js -->
    <script src="{{ asset('frontend/JS/type.js') }}"></script>

    @stack('scripts')

    <!-- script.js -->
    <script src="{{ asset('frontend/JS/script.js') }}"></script>




    <!-- preloader -->
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 2000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
        }
    </script>

</body>

</html>
