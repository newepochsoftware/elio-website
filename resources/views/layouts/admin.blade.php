<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Elio at Wynn Las Vegas</title>
        <meta content="WynnLV" name="Darrell Weaver" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- SEO -->
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="628">
        <meta property="og:description" content="Inspired by Mexico's rich heritage of celebratory food and gatherings, Enrique Olvera, Daniela Soto-Innes and Santiago Perez bring their much anticipated contemporary Mexican restaurant Elio to Encore at Wynn Las Vegas. Opening March 2020.">
        <meta property="og:title" content="Elio at Wynn Las Vegas!">
        <meta property="og:url" content="https://www.wynnlasvegas.com/">
        <meta property="og:image" content="https://storage.googleapis.com/wynn-bucket/elio-og-new.jpg">

        <!-- Favicons -->
        <link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/wynn-bucket/favicon.ico">


        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

      <!-- Begin page -->
      <div id="wrapper">

      @include('layouts.adminSideBar')

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">

        @include('layouts.adminTopBar')

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                          @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>


      </div>

      <!-- Vendor js -->
      <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

      <!-- Flot chart -->
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.time.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.resize.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.pie.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/curvedLines.js') }}"></script>
      <script src="{{ asset('admin/libs/flot-charts/jquery.flot.axislabels.js') }}"></script>

      <!-- App js -->
      <script src="{{ asset('admin/js/app.min.js') }}"></script>

    </body>
</html>
