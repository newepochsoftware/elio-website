<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Elio at Wynn Las Vegas</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- SEO -->
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:description" content="Inspired by Mexico's rich heritage of celebratory food and gatherings, Enrique Olvera, Daniela Soto-Innes and Santiago Perez bring their much anticipated contemporary Mexican restaurant Elio to Encore at Wynn Las Vegas. Opening March 2020.">
    <meta property="og:title" content="Elio at Wynn Las Vegas!">
    <meta property="og:url" content="https://www.wynnlasvegas.com/">
    <meta property="og:image" content="https://storage.googleapis.com/wynn-bucket/elio-og-new.jpg">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/wynn-bucket/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://use.typekit.net/fwf0rjb.css">
    <link rel="stylesheet" href="https://use.typekit.net/epl0coh.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google Tag Manager -->

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('js/vendor/vegas/vegas.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKHQ7NL');</script>
    <!-- End Google Tag Manager -->

</head>
<body id="intro3">
    <div id="app">

      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKHQ7NL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <div data-xid="cookies" id="cookies" style="font-family:Lato,Roboto,sans-serif;font-weight:100;font-size:.9em;background-color:#191919;padding:.6em;text-align:center;border-radius:.2em;display:none;position:fixed;bottom:0;width:100%;">
        <span class="cookies-notice" style="color:#fff;">
          This site requires cookies to function properly. You may disable cookies in browser settings.
        </span>
        <span class="cookies-button" style="color:#191919;background-color:#c3db6a;padding:.4em;margin-left:20px;cursor:pointer;border-radius:.2em;">
          I understand
        </span>
      </div>



      <!-- Navigation-->
      <nav class="navbar navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">
                      <img src="https://storage.googleapis.com/wynn-bucket/elio-nav-logo.png" alt="nav-logo">
                  </a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="/">Home</a>
                      </li>
                      <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/cocktails">Cocktails</a></li>
                            <li><a href="/desserts">Desserts</a></li>
                            <li><a href="/dinner">Dinner</a></li>
                            <li><a href="/lounge">Lounge</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="/gallery">Gallery</a>
                      </li>
                      <li>
                        <a href="/reservations">Reservations</a>
                      </li>
                      <li>
                        <a href="/private-events">Private Events</a>
                      </li>
                      <li>
                        <a href="/about-us">About Us</a>
                      </li>
                      <li>
                        <a href="/careers">Careers</a>
                      </li>
                      <li>
                        <a href="/special-events">Special Events</a>
                      </li>
                  </ul>
              </div>
              <!--/.navbar-collapse -->
          </div>
      </nav>

      <div class="wynn-header">
        <div class="wynn-logo">
          <a href="https://www.wynnlasvegas.com/" target="_blank">
            <img src="https://cdn.wynnlasvegas.com/-/media/images/wynn-resorts-global/logo/wynn-animated-logo.ashx" alt="Wynn Las Vegas">
          </a>
        </div>
      </div>

      <main class="py-4">
          @yield('content')
      </main>

      <!-- Footer-->
      <section class="footer" id="footer">
        <div class="footer-content" data-xid="footer-content">
          <div class="social-icons">
            <li><a href="https://www.facebook.com/elio.lasvegas/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="https://instagram.com/elio_lv" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/elio_lv" target="_blank"><i class="fab fa-twitter"></i></a></li>
          </div>
          <div class="footer-logo"><img src="https://storage.googleapis.com/wynn-bucket/elio-footer-logo.png" alt="Elio"></div>
          <a href="https://www.wynnlasvegas.com" target="_blank" class="Footer-nav-item">© 2020 Wynn Resorts Holdings, LLC. All rights reserved.</a><br/><br/>
          <a href="https://www.wynnlasvegas.com/" target="_blank">Wynn Las Vegas</a> | <a href="https://www.wynnlasvegas.com/privacy-policy" target="_blank">Privacy</a>
        </div>
      </section>


    </div>

    <!-- Javascript -->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
      integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
      crossorigin=""></script>

    <script src="{{ asset('js/vendor/jquery-1.11.2.min.j') }}s"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/vendor/spectragram.js') }}"></script>
    <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/vendor/velocity.min.js') }}"></script>
    <script src="{{ asset('js/vendor/velocity.ui.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/vendor/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.stellar.js') }}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/vendor/map.js"></script> -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/vendor/mc/jquery.ketchup.all.min.js') }}"></script>
    <script src="{{ asset('js/vendor/mc/main.js') }}"></script>

</body>
</html>
