<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">    
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css ') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.min.css ') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap.min.css') }} ">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('user.home') }} " class="site_title"><img src="{{ asset('tampilan/img/logo.png') }}" width="30%" height="40"> <b>Online SIPP</b></a>
            <hr class="garis">  
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
               <div class="profile_pic">
                <img src="{{asset('img.jpg') }}" alt="..." class="img-circle profile_img">
              </div> 
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->nama }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('user.home')}} "><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a href="{{ route('lihat.spp', Auth::user()->id_siswa)}} "><i class="fa fa-user"></i> Spp Ku </a></li>
                  <li><a href=" {{ route('ortu.bayar',Auth::user()->id_siswa) }} "><i class="fa fa-money"></i> Bayar </a></li>
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{ Auth::user()->nama }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        @include('sweetalert::alert')
        <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <script>
              var today = new Date();
              document.write("&copy; Smkn 1 Dlanggu " + today.getFullYear());
            </script>
          </div>
          <div class="clearfix"></div>
        </footer>
        
      </div>
    </div>

    
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js ') }}"></script>
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }} "></script>
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script>
      $(function () {
        $('#siswa').DataTable();
      })

      function eximForm() {
        $('#modal-exim').modal('show');
        $('#modal-exim form')[0].reset();
      }
    </script>
  </body>
</html>