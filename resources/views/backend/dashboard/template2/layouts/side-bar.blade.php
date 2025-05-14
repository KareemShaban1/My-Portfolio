<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('backend/template2/assets/images/logo.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('backend/template2/assets/images/logo_sm.png')}}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('backend/template2/assets/images/logo-dark.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('backend/template2/assets/images/logo_sm_dark.png')}}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Dashboards </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="dashboard-analytics.html">Analytics</a>
                        </li>
                        <li>
                            <a href="dashboard-crm.html">CRM</a>
                        </li>
                        <li>
                            <a href="index.html">Ecommerce</a>
                        </li>
                        <li>
                            <a href="dashboard-projects.html">Projects</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <!-- Templates -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTemplate" aria-expanded="false" aria-controls="sidebarTemplate" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Templates') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTemplate">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('templates') }}">{{ __('All Template') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Pages -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPage" aria-expanded="false" aria-controls="sidebarPage" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Pages') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPage">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('pages.create') }}"> {{ __('Create Page') }} </a>
                            <a href="{{ route('pages') }}">{{ __('All Pages') }}</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Informations -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInformation" aria-expanded="false" aria-controls="sidebarInformation" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Informations') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInformation">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('information') }}">{{ __('All General Information') }}</a>
                            <a href="{{ route('templateInformation') }}">{{ __('All Template Information') }}</a>
                            <a href="{{ route('pageInformation') }}">{{ __('All Page Information') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPersonalExperience" aria-expanded="false" aria-controls="sidebarPersonalExperience" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Personal Experience') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPersonalExperience">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('personalExperience') }}">{{ __('All Personal Experience') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Categories -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="false" aria-controls="sidebarCategory" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Projects Categories') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCategory">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('categories') }}">{{ __('All Projects Categories') }}</a>
                        </li>

                    </ul>
                </div>
            </li>


            <!-- Projects -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProject" aria-expanded="false" aria-controls="sidebarProject" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Projects') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProject">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('projects') }}">{{ __('All Projects') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Testimonials -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTestimonial" aria-expanded="false" aria-controls="sidebarTestimonial" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Testimonials') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTestimonial">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('testimonials') }}">{{ __('All Testimonials') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Meta data -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMetaData" aria-expanded="false" aria-controls="sidebarMetaData" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('MetaData') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMetaData">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('metaData') }}">{{ __('All Meta Data') }}</a>
                        </li>

                    </ul>
                </div>
            </li>


            <!-- media -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMedia" aria-expanded="false" aria-controls="sidebarMedia" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('Media') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMedia">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('media') }}">{{ __('All Media') }}</a>
                        </li>

                    </ul>
                </div>
            </li>



            <!-- PDFs -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPDF" aria-expanded="false" aria-controls="sidebarPDF" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> {{ __('PDFs') }} </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPDF">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('pdfs') }}">{{ __('All PDFs') }}</a>
                        </li>

                    </ul>
                </div>
            </li>




        </ul>


        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>