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
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="{{ route('cocktails.index') }}">Cocktails</a></li>
                  <li><a href="{{ route('desserts.index') }}">Desserts</a></li>
                  <li><a href="{{ route('dinner.index') }}">Dinner</a></li>
                  <li><a href="{{ route('lounge.index') }}">Lounge</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li>
              <a href="{{ route('reservations') }}">Reservations</a>
            </li>
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('private-events.index') }}">Private Events</a></li>
                <li><a href="{{ route('special-events.index') }}">Special Events</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="/careers">Careers</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
