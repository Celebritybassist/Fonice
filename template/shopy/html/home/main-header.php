<header class="header-main @@HeaderClass header-option-3">
    <div class="header-top pt-3 pb-2 py-md-2 py-lg-4">
        <div class="@@ContainerClass">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <!-- Logo -->
                    <a class="navbar-brand" href="../index.html">
                        <img class="logo-dark" src="@@imgPath/img/logo.svg" title="" alt="">
                        <img class="logo-light" src="@@imgPath/img/logo-light.svg" title="" alt="">
                    </a>
                    <!-- Logo -->
                    <hr class="d-md-none mt-3 mb-2">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <!-- Search input -->
                            <input class="form-control form-control-sm shadow-none px-3" type="text" name="search" placeholder="What are you looking for?">
                            <!-- Search button -->
                            <button type="button" class="btn btn-mode btn-sm shadow-none px-3">
                                <i class="fi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="nav flex-nowrap align-items-center justify-content-md-end header-right w-100 w-md-auto position-relative">
                        <div class="nav-item h-switch dropdown">
                            <button class="theme-switch nav-link bg-transparent" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                <span class="bi my-1 theme-icon-active">
                                    <i class="bi-circle-half"></i>
                                </span>
                                <span class="d-none">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="bd-theme">
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="light">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-sun-fill"></i>
                                        </span>
                                        Light
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="dark">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-moon-stars-fill"></i>
                                        </span>
                                        Dark
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item active" data-bs-theme-value="auto">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-circle-half"></i>
                                        </span>
                                        Auto
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Search-->
                        <div class="nav-item dropdown position-static d-lg-none">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fi-search"> </i>
                            </a>
                            <div class="dropdown-menu w-100 w-lg-auto">
                                <form>
                                    <div class="input-group p-3">
                                        <!-- Search input -->
                                        <input class="form-control shadow-none" type="text" name="search" placeholder="What are you looking for?">
                                        <!-- Search button -->
                                        <button type="button" class="btn btn-primary shadow-none">
                                            <i class="fi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Acount -->
                        <div class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
                                <i class="fi-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-hover right shadow">
                                <a class="dropdown-item" href="../account-01/login.html">Login</a>
                                <a class="dropdown-item" href="../account-01/sign-up.html">Register</a>
                                <a class="dropdown-item" href="../account-01/wishlist.html">Wishlist</a>
                                <a class="dropdown-item" href="../account-01/my-account.html">My account</a>
                            </div>
                        </div>
                        <!-- Wishlist -->
                        <div class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fi-heart"> </i>
                            </a>
                        </div>
                        <!-- Cart -->
                        <div class="nav-item me-md-3 me-lg-0">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#modalMiniCart" role="button" aria-controls="modalMiniCart">
                                <span class="" data-cart-items="8">
                                    <i class="fi-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Mobile Toggle -->
                        <button class="navbar-toggler ms-auto ms-md-0 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="px-navbar-toggler-icon"></span>
                        </button>
                        <!-- End Mobile Toggle -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="@@ContainerClass">
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Demos</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            @@include('header/_home_demo_menu.html', {
                                "path": "..",
                            })
                        </div>
                    </li>
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Latest</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-6 col-md-3">
                                        <ul class="list-unstyled link-list-style-04 m-0">
                                            <li>
                                                <a href="#">WHAT’S NEW</a>
                                            </li>
                                            <li>
                                                <a href="#">BEST SELLING</a>
                                            </li>
                                            <li>
                                                <a href="#">TOP RATED</a>
                                            </li>
                                            <li>
                                                <a href="#">MOST POPULAR</a>
                                            </li>
                                            <li>
                                                <a href="#">EDITOR’S PICKS</a>
                                            </li>
                                            <li>
                                                <a href="#">ON SALE</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-3 col-xl-2">
                                        <h6 class="sm-title-05 mb-3 fw-500">Women's</h6>
                                        <ul class="list-unstyled link-list-style-05 m-0">
                                            <li><a href="#">Fusion Wear</a></li>
                                            <li><a href="#">Dress Materials</a></li>
                                            <li><a href="#">Dupattas & Shawls </a></li>
                                            <li><a href="#">Ethnic Dresses </a></li>
                                            <li><a href="#">Jackets & Waistcoats</a></li>
                                            <li><a href="#">Kurtas & Suits</a></li>
                                            <li><a href="#">Sarees</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-3 col-xl-2">
                                        <h6 class="sm-title-05 mb-3 fw-500">Living Room</h6>
                                        <ul class="list-unstyled link-list-style-05 m-0">
                                            <li><a href="#">Sofa </a></li>
                                            <li><a href="#">Love Seat</a></li>
                                            <li><a href="#">Settee Sofa</a></li>
                                            <li><a href="#">Sleeper Sofas</a></li>
                                            <li><a href="#">Tuxedo</a></li>
                                            <li><a href="#">Chair & Ottomans</a></li>
                                            <li><a href="#">Wing Chair</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-5 d-flex flex-row">
                                        <div class="min-h-200px bg-center bg-cover d-flex align-items-center justify-content-center h-100 w-100" style="background-image: url(../../assets/img/fashion/blog-home-2.jpg);">
                                            <div class="text-center px-4 py-3">
                                                <h6 class="text-uppercase text-white mb-0 letter-spacing-4 fw-300">NEW IN</h6>
                                                <h3 class="fw-600 h4 text-white">2022 Collection</h3>
                                                <div class="pt-2">
                                                    <a class="btn btn-white btn-sm" href="#">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Collection</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-lg-6">
                                        <div class="row gy-4">
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column">
                                        <div class="rounded h-100 bg-cover bg-no-repeat d-flex align-items-center justify-content-center py-8 p-xl-5" style="background-image: url(../../assets/img/fashion/blog-home-3.jpg);">
                                            <div class="w-100 text-center">
                                                <h6 class="text-uppercase fw-300 text-white mb-2">NEW IN</h6>
                                                <h3 class="fw-400 h3 text-white">New Exclusive<br />2022 Collection</h3>
                                                <div class="pt-2">
                                                    <a class="btn btn-white btn-sm" href="#">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Categories</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-12.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Living Room</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Sofa </a></li>
                                            <li><a href="#">Love Seat</a></li>
                                            <li><a href="#">Settee Sofa</a></li>
                                            <li><a href="#">Sleeper Sofas</a></li>
                                            <li><a href="#">Tuxedo</a></li>
                                            <li><a href="#">Chair & Ottomans</a></li>
                                            <li><a href="#">Wing Chair</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-13.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Women</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Fusion Wear</a></li>
                                            <li><a href="#">Dress Materials</a></li>
                                            <li><a href="#">Dupattas & Shawls </a></li>
                                            <li><a href="#">Ethnic Dresses </a></li>
                                            <li><a href="#">Jackets & Waistcoats</a></li>
                                            <li><a href="#">Kurtas & Suits</a></li>
                                            <li><a href="#">Sarees</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-14.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Western Wear</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Blazers & Waistcoats</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jackets & Coats </a></li>
                                            <li><a href="#">Jeans & Jeggings </a></li>
                                            <li><a href="#">Jumpsuits</a></li>
                                            <li><a href="#">Shorts & Skirts </a></li>
                                            <li><a href="#">Shrugs </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-15.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Footwear</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Heels</a></li>
                                            <li><a href="#">Sports Shoes</a></li>
                                            <li><a href="#">Sports Wear</a></li>
                                            <li><a href="#">Gym Wear</a></li>
                                            <li><a href="#">Vintage</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-16.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Kids</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Boys Clothing </a></li>
                                            <li><a href="#">Clothing Sets </a></li>
                                            <li><a href="#">Jacket & Sweater</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sleepwear</a></li>
                                            <li><a href="#">T-Shirts</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/home-banner-6.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Accessories</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Handbags </a></li>
                                            <li><a href="#">Hand Purse</a></li>
                                            <li><a href="#">Laptop Bag</a></li>
                                            <li><a href="#">Leather Purse</a></li>
                                            <li><a href="#">Saddle Cross Bag</a></li>
                                            <li><a href="#">Shoulder Bag</a></li>
                                            <li><a href="#">Vintage</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="nav-link">Pages</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <ul class="dropdown-menu left shadow-lg">
                            <li><a class="dropdown-item" href="../pages/about.html">About</a></li>
                            <li><a class="dropdown-item" href="../pages/faq.html">FAQ's</a></li>
                            <li><a class="dropdown-item" href="../pages/policy.html">Policy</a></li>
                            <li><a class="dropdown-item" href="../pages/support.html">Support</a></li>
                            <li><a class="dropdown-item" href="../pages/support-topic.html">Support Topic</a></li>
                            <li><a class="dropdown-item" href="../pages/contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="nav-link">Blog</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <ul class="dropdown-menu left shadow-lg">
                            <li><a class="dropdown-item" href="../blog/blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="../blog/blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->
        </div>
    </nav>
</header>