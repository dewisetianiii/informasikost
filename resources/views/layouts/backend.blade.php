<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminHome</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/assets/backend/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/assets/backend/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/assets/backend/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="/assets/backend/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="/assets/backend/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="/assets/backend/assets/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/assets/backend/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/assets/backend/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/assets/backend/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="/assets/backend/img/kost.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Admin</h2><span>Ada-kost</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="./kamar"> <i class="icon-form"></i>Fasilitas</a></li>
            <li><a href="./kos"> <i class="icon-interface-windows"></i>Kots/Kontrakan</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bandung </span><strong class="text-primary">Ada-kost</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                
                <!-- Log out-->
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link logout" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                style="margin-left: 20px;"> <span class="d-none d-sm-inline-block">{{__('Logout')}}</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
            </div>
          </div>
        </nav>
      </header>
      <body>
      @yield('content')
      </body>

      
      
      





    </div>
    <!-- JavaScript files-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="/assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/backend/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/backend/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="/assets/backend/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/assets/backend/vendor/chart.js/Chart.min.js"></script>
    <script src="/assets/backend/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/assets/backend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/backend/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="/assets/backend/js/front.js"></script>
    <script>// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('#select2').select2();
});</script>
  </body>
</html>