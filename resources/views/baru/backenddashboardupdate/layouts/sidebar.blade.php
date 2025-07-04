 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     {{-- <a href="index3.html" class="brand-link">
                <img src="{{ asset('images/logo-8.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a> --}}
     <a href="#" class="brand-link text-center">
         <span class="brand-text font-weight-light"><img src="{{ asset('images/logo-8.png') }}" width="100px"
                 height="50px" /></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 {{-- Dashboard --}}
                 @if ($user->is_role == 2)
                     <li class="nav-item {{ request()->routeIs('dashboardupdate') ? 'menu-open' : '' }}">
                         <a href="{{ route('dashboardupdate') }}"
                             class="nav-link {{ request()->routeIs('dashboardupdate') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                 @endif

                 {{-- Artikel --}}
                 <li
                     class="nav-item {{ request()->routeIs('artikelindexupdate', 'createartikel', 'artikeleditupdate', 'artikelshowupdate*') ? 'menu-open' : '' }}">
                     <a href="{{ route('artikelindexupdate') }}"
                         class="nav-link {{ request()->routeIs('artikelindexupdate', 'createartikel', 'artikeleditupdate', 'artikelshowupdate*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-edit"></i>
                         <p>Artikel</p>
                     </a>
                 </li>

                 {{-- Media --}}
                 <li
                     class="nav-item {{ request()->routeIs('mediaindex', 'createmedia', 'editmedia*') ? 'menu-open' : '' }}">
                     <a href="{{ route('mediaindex') }}"
                         class="nav-link {{ request()->routeIs('mediaindex', 'createmedia', 'editmedia*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Media</p>
                     </a>
                 </li>

                 {{-- Produk Baru --}}
                 @if ($user->is_role == 2)
                     <li
                         class="nav-item {{ request()->routeIs('produkbaruindex', 'createmedia', 'editmedia*') ? 'menu-open' : '' }}">
                         <a href="{{ route('produkbaruindex') }}"
                             class="nav-link {{ request()->routeIs('produkbaruindex', 'createmedia', 'editmedia*') ? 'active' : '' }}">
                             <i class="nav-icon fab fa-product-hunt"></i>
                             <p>Produk Baru</p>
                         </a>
                     </li>
                 @endif

                 {{-- Event --}}
                  @if ($user->is_role == 2)
                     <li
                         class="nav-item {{ request()->routeIs('eventdashboardupdate', 'createeventupdate', 'editeventupdate*') ? 'menu-open' : '' }}">
                         <a href="{{ route('eventdashboardupdate') }}"
                             class="nav-link {{ request()->routeIs('eventdashboardupdate', 'createeventupdate', 'editeventupdate*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-calendar"></i>
                             <p>Event</p>
                         </a>
                     </li>
                 @endif

                 {{-- User --}}
                  @if ($user->is_role == 2)
                     <li
                         class="nav-item {{ request()->routeIs('usersupdate', 'createeventupdate', 'editeventupdate*') ? 'menu-open' : '' }}">
                         <a href="{{ route('usersupdate') }}"
                             class="nav-link {{ request()->routeIs('usersupdate', 'createeventupdate', 'editeventupdate*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-user-circle"></i>
                             <p>User</p>
                         </a>
                     </li>
                 @endif

                 {{-- @if ($user->is_role == 2)
                     <li class="nav-item menu-open">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-user-circle"></i>
                             <p>
                                 User
                             </p>
                         </a>
                     </li>
                 @endif --}}

                 


                 {{-- <li class="nav-item menu-open">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user-circle"></i>
                         <p>
                             Profile
                         </p>
                     </a>
                 </li> --}}

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
