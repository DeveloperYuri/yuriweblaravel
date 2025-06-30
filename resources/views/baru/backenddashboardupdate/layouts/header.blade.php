  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('images/logo-8.png') }}" alt="AdminLTELogo" height="60" width="`100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- User Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
                  <i class="far fa-user"></i>
                  <span class="ml-1 d-none d-sm-inline">{{ $user->name }}</span>
                  <i class="fas fa-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                      <i class="fas fa-user-cog mr-2"></i> Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout')}}" class="dropdown-item">
                      <i class="fas fa-sign-out-alt mr-2"></i> Logout
                  </a>
              </div>
          </li>
      </ul>
  </nav>


  {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <!-- User Dropdown Menu -->
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-user"></i>
                      <span class="ml-1 d-none d-sm-inline">Username</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <span class="dropdown-header">User Menu</span>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fas fa-user-cog mr-2"></i> Profile
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">
                          <i class="fas fa-sign-out-alt mr-2"></i> Logout
                      </a>
                  </div>
              </li>
          </ul>

      </ul>
  </nav> --}}
  <!-- /.navbar -->
