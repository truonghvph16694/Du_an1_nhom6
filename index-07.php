<?php
    require_once 'db.php';
    $sql_new = "SELECT * FROM `products` WHERE products.pro_id ORDER BY `pro_id` DESC LIMIT 8 " ;
    $kq_new=$conn->query($sql_new);

?>

<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from template.hasthemes.com/airi/airi/index-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:13:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Airi - Clean, Minimal eCommerce Bootstrap 5 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="assets/css/dl-icon.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="assets/css/revoulation.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>
  
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <header class="header header-fullwidth header-style-3">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <span class="header-text">Welcome to AIRI Mutipurpose eCommerce Theme</span>
                        </div>
                        <div class="col-md-6">
                            <div class="header-component">
                                <div class="header-component__item header-component__language">
                                    <a href="#">Language: <span>English</span></a>
                                    <ul class="header-component__menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </div>
                                <div class="header-component__item header-component__currency">
                                    <a href="#">Currency: <span>USD</span></a>
                                    <ul class="header-component__menu">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="header-middle">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 d-lg-block d-none">
                                    <!-- Social Icons Start Here -->
                                    <ul class="social social-medium mb--20">
                                        <li class="social__item">
                                            <a href="https://www.facebook.com/" class="social__link">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.twitter.com/" class="social__link">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
    
                                        <li class="social__item">
                                            <a href="https://www.pinterest.com/" class="social__link">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.linkedin.com/" class="social__link">
                                                <i class="fa fa-linkedin-square"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.behance.net/" class="social__link">
                                                <i class="fa fa-behance"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
    
                                    <!-- Contact Info Start Here -->
                                    <div class="header-contact-info">
                                        <div class="header-contact-info__item">
                                            <span>24/7 HOTLINE</span>
                                            <span>(+85) 246 888 9889</span>
                                        </div>
                                        <div class="header-contact-info__item">
                                            <span>LOCATION</span>
                                            <span>United Kingdom</span>
                                        </div>
                                    </div>
                                    <!-- Contact Info End Here -->
                                </div>
                                <div class="col-xl-4 col-lg-2 col-4 text-lg-center">
                                    <a href="index-2.html" class="logo-box">
                                        <figure class="logo--normal">
                                            <img src="assets/img/logo/logo.svg" alt="logo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-8">
                                    <div class="header-middle-right">
                                        <div class="searchform-wrapper d-none d-lg-block">
                                            <form action="#" class="searchform searchform-2">
                                                <input type="text" class="searchform__input" id="search2" name="search" placeholder="Search Here...">
                                                <button type="submit" class="searchform__submit">
                                                    <i class="dl-icon-search1"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <ul class="header-toolbar text-end">
                                            <li class="header-toolbar__item d-none d-lg-block">
                                                <a href="#sideNav" class="toolbar-btn">
                                                    <i class="dl-icon-menu2"></i>
                                                </a>                                    
                                            </li>
                                            <li class="header-toolbar__item user-info-menu-btn">
                                                <a href="#">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </a>
                                                <ul class="user-info-menu">
                                                    <li>
                                                        <a href="my-account.php">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.php">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.php">Check Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="header-toolbar__item">
                                                <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                                    <i class="dl-icon-cart4"></i>
                                                    <sup class="mini-cart-count">2</sup>
                                                </a>
                                            </li>
                                            <li class="header-toolbar__item">
                                                <a href="#searchForm" class="search-btn toolbar-btn">
                                                    <i class="dl-icon-search1"></i>
                                                </a>
                                            </li>
                                            <li class="header-toolbar__item d-lg-none">
                                                <a href="#" class="menu-btn"></a>                 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <!-- Main Navigation Start Here -->
                                    <nav class="main-navigation">
                                        <ul class="mainmenu mainmenu--2 mainmenu--centered">
                                            <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                                <a href="index-07.php" class="mainmenu__link">
                                                    <span class="mm-text">Home</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="shop-sidebar.php" class="mainmenu__link">
                                                    <span class="mm-text">Shop</span>
                                                    <span class="tip">Hot</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="#" class="mainmenu__link">
                                                    <span class="mm-text">Collections</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item menu-item-has-children has-children">
                                                <a href="#" class="mainmenu__link">
                                                    <span class="mm-text">Pages</span>
                                                </a>
                                            </li>
                                            <li class="mainmenu__item">
                                                <a href="login-register.php" class="mainmenu__link">
                                                    <span class="mm-text">login-register</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Main Navigation End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-sticky-header-height"></div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Mobile Header area Start -->
        <header class="header-mobile">
            <div class="header-mobile__outer">
                <div class="header-mobile__inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="index-2.html" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo.svg" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="col-8">
                                <ul class="header-toolbar text-end">
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="#">
                                            <i class="fa fa-user-circle-o"></i>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li>
                                                <a href="my-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Check Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">2</sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="#" class="menu-btn"></a>                 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Mobile Navigation Start Here -->
                                <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li>
                                            <a href="index-2.php">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-sidebar.php">
                                                Shop
                                                <span class="tip">Hot</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Collections
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Pages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                New Look
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Mobile Navigation End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-sticky-header-height"></div>
            </div>
        </header>
        <!-- Mobile Header area End -->


        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
                <img src="assets/img/slider/home-07/m7-s1-1.jpg" alt="">
            </div>

            <!-- Banner Area Start Here -->
            <section class="banner-area pt--70 pt-md--55 pb--40 pb-md--30">
                <div class="container-fluid p-0">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">Popular Collections</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner7.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">New Season</p>
                                        <h2 class="banner-title-2">The <strong>Interview</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner6.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">New Men</p>
                                        <h2 class="banner-title-2">Autumn <strong>Winter</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner7.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">Hello</p>
                                        <h2 class="banner-title-2">Woman <strong>2019</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner8.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">New Season</p>
                                        <h2 class="banner-title-2">Man <strong>T-Shirt</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner9.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">Woman 2019</p>
                                        <h2 class="banner-title-2">Floral <strong>Dress</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                                <div class="banner-inner">
                                    <div class="banner-image">
                                        <img src="assets/img/banner/m02-banner6.jpg" alt="Banner">
                                    </div>
                                    <div class="banner-info">
                                        <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">Jacket</p>
                                        <h2 class="banner-title-2">Man <strong>2019</strong></h2>
                                    </div>
                                    <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Area End Here -->


            <!-- product tab area Start Here -->
            <section class="product-tab-area pt--30 pt-md--20 pb--80 pb-md--60">
                <div class="container-fluid">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">New Products</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-tab tab-style-3">
                                <div class="tab-content product-tab__content fadeInUp" id="product-tabContent">
                                    <div class="tab-pane show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                        <div class="row">
                                            <?php foreach($kq_new as $key){
                                                ?>
                                            
                                            <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                                <a href="product-details.php?iddetail=<?= $key['pro_id']?>&iddanh=<?= $key['cate_id']?>">
                                                                    <img src="assets/img/products/<?= $key['pro_image']?>" alt="Product Image" class="">
                                                                </a>
                                                        <div class="product-info">
                                                            <h3 class="product-title">
                                                                <a href="product-details.php?iddetail=<?= $key['pro_id']?>&iddanh=<?= $key['cate_id']?>"> <?= $key['pro_name']?></a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><?= $key['pro_price']?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="shop-sidebar.html" class="heading-button">View All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product tab area End Here -->

            <!-- Video Banner area Start Here -->
            <section class="video-banner-area video-banner-bg-2 ptb--200 ptb-lg--100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="heading-big lts-5 color--white mb--70 mb-lg--50 mb-xs--30">AUTUMN/WINTER</h2>
                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="video-btn video-popup">video</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Video Banner area End Here -->

            <!-- On Sale Product area Start Here -->
            <section class="on-sale-area pt--70 pt-md--50 pb--80 pb-md--60">
                <div class="container-fluid">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">On Sale Products</h2>
                            <hr class="separator center mt--25 mt-md--15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-tab tab-style-3">
                                <div class="tab-content product-tab__content fadeInUp" id="product-on-sale-tabContent">
                                    <div class="tab-pane show active" id="nav-on-sale-all" role="tabpanel" aria-labelledby="nav-on-sale-all-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="assets/img/products/prod-19-1-568x653.jpg" alt="Product Image" class="primary-image">
                                                                    <img src="assets/img/products/prod-19-4-568x653.jpg" alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Product Grouped</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="assets/img/products/prod-1-1-568x653.jpg" alt="Product Image" class="primary-image">
                                                                    <img src="assets/img/products/prod-1-4-568x653.jpg" alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Ruffled polka dot blouse</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                                <div class="airi-product">
                                                    <div class="product-inner">
                                                        <figure class="product-image">
                                                            <div class="product-image--holder">
                                                                <a href="product-details.html">
                                                                    <img src="assets/img/products/prod-2-1-568x653.jpg" alt="Product Image" class="primary-image">
                                                                    <img src="assets/img/products/prod-2-3-568x653.jpg" alt="Product Image" class="secondary-image">
                                                                </a>
                                                            </div>
                                                            <div class="airi-product-action">
                                                                <div class="product-action">
                                                                    <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop">
                                                                        <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                            <i class="dl-icon-view"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </a>
                                                                    <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                                                        <i class="dl-icon-heart4"></i>
                                                                    </a>
                                                                    <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare">
                                                                        <i class="dl-icon-compare"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="product-info text-center">
                                                            <h3 class="product-title">
                                                                <a href="product-details.html">Round raffia crossbody bag</a>
                                                            </h3>
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="shop-sidebar.html" class="heading-button">View All</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- On Sale Product area End Here -->
        </div>


        <!-- Footer Start -->
        <footer class="footer footer-1 bg--black ptb--40">
            <div class="footer-top pb--40 pb-md--30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 mb-md--30">
                            <div class="footer-widget">
                                <div class="textwidget">
                                    <img src="assets/img/logo/logo-white.png" alt="Logo" class="mb--10">
                                    <p class="font-size-16 font-2 mb--20">Integer ut ligula quis lectus fringilla elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis.</p>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="https://twitter.com/" class="social__link color--white">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link color--white">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://facebook.com/" class="social__link color--white">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://youtube.com/" class="social__link color--white">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://instagram.com/" class="social__link color--white">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                    <li><a href="#">Work for Airi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">USEFUL LINKS</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-collections.html">The Collections</a></li>
                                    <li><a href="#">Size Guide</a></li>
                                    <li><a href="#">Return Policiy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">SHOPPING</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-instagram.html">Look Book</a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">CONTACT INFO</h4>
                                <ul class="contact-info">
                                    <li class="contact-info__item">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:+012345 6788" class="contact-info__link">(+012) 345 6788</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:demo@email.com" class="contact-info__link">demo@email.com</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Example Address</span>
                                    </li>
                                </ul>
                                <div class="textwidget">
                                    <img src="assets/img/others/payments.png" alt="Payment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle pb--40 pb-md--30">
                <div class="container">
                    <div class="row method-box-wrapper">
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>FREESHIPPING WORLD WIDE</h4>
                                <p>Freeship over oder $100</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>30 DAYS MONEY BACK</h4>
                                <p>You can back money any times</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-sm--10">
                            <div class="method-box">
                                <h4>PROFESSIONAL SUPPORT 24/7</h4>
                                <p>demo@example.com</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="method-box">
                                <h4>100% SECURE CHECKOUT</h4>
                                <p>Protect buyer & clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


        <!-- Search from Start --> 
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End --> 
        

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-17-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda shorts  </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-18-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-19-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="assets/img/products/prod-2-1-70x91.jpg" alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                </button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'
                        >
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-10-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge new">new</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-11-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge hot">hot</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-box product-summary">
                            <div class="product-navigation mb--10">
                                <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                <a href="#" class="next"><i class="dl-icon-right"></i></a>
                            </div>
                            <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                            <span class="product-price-wrapper mb--20">
                                <span class="money">$49.00</span>
                                <span class="product-price-old">
                                    <span class="money">$60.00</span>
                                </span>
                            </span>
                            <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                            <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                </div>
                                <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart" onclick="window.location.href='cart.html'">
                                    Add To Cart
                                </button>
                                <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                            </div>  
                            <div class="product-extra mb--30 mb-md--20">
                                <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                                <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                            </div>
                            <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                <div class="product-meta">
                                    <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                                    <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html" rel="tag">Fashions</a></span>
                                </div>
                                <div class="product-share-box">
                                    <span class="font-size-12">Share With</span>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social social-small">
                                        <li class="social__item">
                                            <a href="https://facebook.com/" class="social__link">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://twitter.com/" class="social__link">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


    <!-- REVOLUTION JS FILES -->
    <script src="assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>    

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="assets/js/revoulation.js"></script>


</body>


<!-- Mirrored from template.hasthemes.com/airi/airi/index-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:13:51 GMT -->
</html>