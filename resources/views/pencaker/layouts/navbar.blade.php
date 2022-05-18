<header class="main-header">
    <div class="inside-header">
        <div class="d-flex align-items-center logo-box justify-content-start">

        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen"
                            title="Full Screen">
                            <i class="icon-Expand-arrows"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                    </li>
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search"
                                            aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon3"><i
                                                    class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown"
                            title="User">
                            <i class="icon-User"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </a>
                        @auth
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item " type="submit"> LOGOUT <i
                                                class="fa fa-sign-out"></i></button>
                                    </form>
                                <li>
                            </ul>
                        @endauth
                    </li>

                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </div>
</header>
