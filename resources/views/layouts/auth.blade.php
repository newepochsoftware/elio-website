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

    <body class="account-pages">

      <!-- Begin page -->
      <div class="accountbg" style="background: url('https://storage.googleapis.com/wynn-bucket/elio-man-bg.jpg');background-size: cover;background-position: center;"></div>

      <div class="wrapper-page account-page-full">

        @yield('content')

        <div class="text-center">
            <p class="account-copyright">
              <a href="https://www.wynnlasvegas.com" target="_blank" class="Footer-nav-item">© 2020 Wynn Resorts Holdings, LLC. All rights reserved.</a><br/><br/>
              <a href="https://www.wynnlasvegas.com/" target="_blank">Wynn Las Vegas</a> | <a href="https://www.wynnlasvegas.com/privacy-policy" target="_blank">Privacy</a>
            </p>
        </div>

      </div>

      <!-- Vendor js -->
      <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

      <!-- App js -->
      <script src="{{ asset('admin/js/app.min.js') }}"></script>

    </body>
</html>
