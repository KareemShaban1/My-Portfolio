<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">

@include('frontend.template3.layouts.head')

<body id="top">


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header 
        ================================================== -->
        <header class="s-header">
            @php
            $templateInformation = App\Models\Information::
            where('entity_type','template')
            ->where('entity_id', 3)
            ->pluck('value', 'key');

            @endphp

            <div class="header-mobile">
                <span class="mobile-home-link"><a href="index.html">.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="index.html" class="home-link">.</a></li>
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        <li><a href="#works" class="smoothscroll">Works</a></li>
                        <li><a href="#contact" class="smoothscroll">Say Hello</a></li>
                    </ul>
                </nav>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">


            @yield('content')

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <!-- 
                .row (container)
                    - .ss-copyright (copyright information)
                    - .ss-go-top (go to top button)
            -->
            <div class="row">
                <!-- <div class="column ss-copyright">
                    <span>© Copyright Luther 2021</span> 
                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">Themewagon</a></span>
                </div> -->

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z" />
                        </svg>
                    </a>
                </div>
            </div>

        </footer>

    </div> <!-- end -s-pagewrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('frontend/template3/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/template3/js/main.js') }}"></script>

</body>

</html>