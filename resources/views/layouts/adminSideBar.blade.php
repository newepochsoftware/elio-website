<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- LOGO -->
        <div class="logo-box">
            <a href="/" class="logo">
                <span class="logo-lg">
                    <img src="https://storage.googleapis.com/wynn-bucket/elio-nav-logo.png" alt="" height="22">
                    <!-- <span class="logo-lg-text-light">Highdmin</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">H</span> -->
                    <img src="https://storage.googleapis.com/wynn-bucket/elio-nav-logo.png" alt="" height="24">
                </span>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            <!-- <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle" height="48">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Maxine Kennedy</a>
            </div> -->
            <!-- <p class="text-muted">Admin</p> -->
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="index.html">
                        <i class="fe-airplay"></i>
                        <span> Home </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-layers"></i>
                        <span> Menu </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('cocktails-list') }}">Cocktails</a></li>
                        <ul class="nav-third-level" aria-expanded="true">
                            <li><a href="{{ route('cocktails-list') }}">View All</a></li>
                            <li><a href="{{ route('cocktails-list') }}">Create New</a></li>
                        </ul>

                        <li><a href="{{ route('cocktails-list') }}">Desserts</a></li>
                        <ul class="nav-third-level" aria-expanded="true">
                            <li><a href="{{ route('cocktails-list') }}">View All</a></li>
                            <li><a href="{{ route('cocktails-list') }}">Create New</a></li>
                        </ul>
                    </ul>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('cocktails-list') }}">Dinner</a></li>
                        <ul class="nav-third-level" aria-expanded="true">
                            <li><a href="{{ route('cocktails-list') }}">View All</a></li>
                            <li><a href="{{ route('cocktails-list') }}">Create New</a></li>
                        </ul>
                    </ul>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('cocktails-list') }}">Lounge</a></li>
                        <ul class="nav-third-level" aria-expanded="true">
                            <li><a href="{{ route('cocktails-list') }}">View All</a></li>
                            <li><a href="{{ route('cocktails-list') }}">Create New</a></li>
                        </ul>
                    </ul>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fe-airplay"></i>
                        <span class="badge badge-danger float-right">3</span>
                        <span> Gallery </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-layers"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="apps-calendar.html">Calendar</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
