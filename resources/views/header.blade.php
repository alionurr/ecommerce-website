<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/logo/logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="/">Home</a></li>
                                <li><a href="/products">shop</a></li>
                                <li><a href="/about">about</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <form action="/search_results">
                                    <div class="nav-search">
                                        <input type="search" name="search" placeholder="Search" style="border-bottom:black 1px solid; border-top: none; border-left: none; border-right: none">
                                    </div>
                                </form>
                            </li>
                            @if (Session::has('user'))
                            <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a></li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Session::get('user')['name']}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Orders</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                    </div>
                                </div>
                                @else
                                    <li> <a href="/login"><span class="flaticon-user"></span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
