      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="" class="brand-link">
              <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Dashboard</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">Kareem Shaban</a>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">

                      <li class="nav-item">
                          <a href="{{ route('dashboard') }}" class="nav-link">
                              <i class="nav-icon fas fa-th"></i>
                              <p>
                                  Dashboard
                                  {{-- <span class="right badge badge-danger">New</span> --}}
                              </p>
                          </a>
                      </li>


                      {{-- <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Layout Options
                                  <i class="fas fa-angle-left right"></i>
                                  <span class="badge badge-info right">6</span>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="pages/layout/top-nav.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Top Navigation</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="pages/layout/boxed.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Boxed</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Sidebar</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Navbar</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="pages/layout/fixed-footer.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Fixed Footer</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Collapsed Sidebar</p>
                                  </a>
                              </li>
                          </ul>
                      </li> --}}



                      {{-- Portfolio Information --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Portofolio Information
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('information.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Information</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('information') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Information</p>
                                  </a>
                              </li>


                          </ul>
                      </li>



                      {{-- Projects Categories --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Projects Categories
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('categories.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Category</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('categories') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Categories</p>
                                  </a>
                              </li>


                          </ul>
                      </li>


                      {{-- Projects --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Projects
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('projects.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Project</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('projects') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Projects</p>
                                  </a>
                              </li>


                          </ul>
                      </li>



                      {{-- Testimonial --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Testimonial
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('testimonials.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Testimonial</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('testimonials') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Testimonials</p>
                                  </a>
                              </li>


                          </ul>
                      </li>


                      {{-- Meta Data --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Meta Data
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('metaData.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Meta Data</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('metaData') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Meta Data</p>
                                  </a>
                              </li>


                          </ul>
                      </li>


                      {{-- Portfolio Images --}}
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Portfolio Images
                                  <i class="fas fa-angle-left right"></i>

                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ route('portfolioImages.add') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Add Portfolio Image</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ route('portfolioImages') }}" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>All Portfolio Images</p>
                                  </a>
                              </li>


                          </ul>
                      </li>




                      {{-- <li class="nav-header">EXAMPLES</li>

                      <li class="nav-item">
                          <a href="https://adminlte.io/docs/3.0" class="nav-link">
                              <i class="nav-icon fas fa-file"></i>
                              <p>Documentation</p>
                          </a>
                      </li> --}}

                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
