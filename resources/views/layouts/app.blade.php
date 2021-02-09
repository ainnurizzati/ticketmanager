<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>@yield('title')</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700&display=swap" rel="stylesheet">

        {{-- <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script> --}}
                <!--CSS-->
                <link rel="stylesheet" href="{{ mix('css/app.css') }}">
                <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
                <link href="{{ url('/css/bootstrap.min.css.map') }}" rel="stylesheet">
                <link href="{{ url('/css/bootstrapD.min.css') }}" rel="stylesheet">
                <link href="{{ url('/css/now-ui-dashboard.css') }}" rel="stylesheet">
                <link href="{{ url('/css/now-ui-dashboard.css.map') }}" rel="stylesheet">
                <link href="{{ url('/now-ui-dashboard.min.css') }}" rel="stylesheet">
                <link href="{{ url('/now-ui-dashboardD.css') }}" rel="stylesheet">
                <link href="{{ url('/now-ui-dashboardD.min.css') }}" rel="stylesheet">


    </head>
    <body class="">
        <div class="wrapper ">
          <div class="main-panel" id="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
              <div class="container-fluid">
                <div class="navbar-wrapper">
                  <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                      <span class="navbar-toggler-bar bar1"></span>
                      <span class="navbar-toggler-bar bar2"></span>
                      <span class="navbar-toggler-bar bar3"></span>
                    </button>
                  </div>
                  {{-- <a class="navbar-brand" href="#pablo">Table List</a> --}}
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-bar navbar-kebab"></span>
                  <span class="navbar-toggler-bar navbar-kebab"></span>
                  <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                  {{-- <form>
                    <div class="input-group no-border">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </div>
                      </div>
                    </div>
                  </form> --}}
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>
                          <span class="d-lg-none d-md-block">Some Actions</span>
                        </p>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/profile">{{ Auth::user()->name }}</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">{{ __('Logout') }}</a>

                         </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">

              @yield('content')

              @stack('modals')

            </div>
          </div>
        </div>
         <!--JS-->

         <script src="../js/core/jquery.min.js"></script>
         <script src="..js/core/popper.min.js"></script>
         <script src="../js/core/bootstrap.min.js"></script>

         <script src="../js/plugins/bootstrap-notify.js"></script>
         <script src="../js/plugins/chartjs.min.js"></script>
         <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>

         <script src="../js/app.js"></script>
         <script src="../js/now-ui-dashboard.js"></script>
         <script src="../js/now-ui-dashboard.js.map"></script>
         <script src="../js/now-ui-dashboard.min.js"></script>



        @livewireScripts
        @yield('scripts')

      </body>

</html>
