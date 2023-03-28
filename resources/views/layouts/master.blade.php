<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35" />
    <!-- favicon  -->
    <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css" />
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/plugins/font-awesome.min.css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="css/plugins/swiper.min.css" />
    <!-- fancybox css -->
    <link rel="stylesheet" href="css/plugins/fancybox.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style2.css" />

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- app -->
    <div class="art-app">
      <!-- mobile top bar -->
      <div class="art-mobile-top-bar"></div>

      <!-- app wrapper -->
      <div class="art-app-wrapper">
        <!-- app container end -->
        <div class="art-app-container">
          <!-- info bar -->
          @include('partials.infobar')
          <!-- info bar end -->

          <!-- content -->
          @yield('content')
          <!-- content end -->

          <!-- menu bar -->
          @include('partials.menu')
          <!-- menu bar end -->
        </div>
        <!-- app container end -->
      </div>
      <!-- app wrapper end -->

      <!-- preloader -->
      @include('partials.preloader')
      <!-- preloader end -->
    </div>
    <!-- app end -->

    @include('partials.jsfooter')
  </body>
</html>
