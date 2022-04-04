<?php
session_start();
    require_once 'db.php';
    $sqlcate="SELECT * FROM `categories`";
    $kqcate=$conn->query($sqlcate);

    
    if(isset($_GET['iddanhm'])){
        $sql_new="SELECT * FROM `products` where cate_id =" .$_GET['iddanhm'];
        $kq_new=$conn->query($sql_new);
    }else{
        $sql_new = "SELECT * FROM `products`" ;
        $kq_new=$conn->query($sql_new);
    }

    if(isset($_POST['search'])){
        $search = $_POST['keyword'];
     
      $sql_search = "SELECT * FROM `products` where `pro_name` LIKE '%$search%'";
      $kq_new = $conn->query($sql_search);
     }

     

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/airi/airi/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:14:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title>Cửa hàng</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="assets/css/revoulation.css">

    <!-- style CSS -->
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


<!-- Đăng nhập vào với tư cách là khách hàng  -->


<?php 
if (isset($_SESSION['auth']) ) if( $_SESSION['auth']['role']==0):?> 
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
        <header class="header header-fullwidth header-style-1">
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
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
                                        
                                        
                                    
                                        
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->
                                <a href="index-2.html" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo.svg" alt="Logo" />
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="assets/img/logo/logo-white.png" alt="Logo" />
                                    </figure>
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <ul class="header-toolbar text-end">



                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <div class="searchform-wrapper d-none d-lg-block">
                                        <form action="" class="searchform searchform-2" method="POST">
                                            <input type="search" class="searchform__input" name="keyword" id="search2"  placeholder="Search Here...">
                                            <button type="submit" class="searchform__submit" value="search" name="search" >
                                        </form> 

                                        </div>
                                    </li>
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
                                                <a href="my-account.php">Tài khoản của tôi</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.php">Check Out</a>
                                            </li>
                                            <li>
                                                <a href="logout.php">Đăng xuất</a>
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
                <div class="main-sticky-header-height"></div>
            </div>
        </header>
        <?php endif?> <br>


<!-- Đăng nhập vào trang quản trị với vai trò là admin -->


      
<?php 
if (isset($_SESSION['auth']) ) if( $_SESSION['auth']['role']==1):?> 
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
        <header class="header header-fullwidth header-style-1">
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
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
                                        
                                        
                                    
                                        
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->
                                <a href="index-2.html" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo.svg" alt="Logo" />
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="assets/img/logo/logo-white.png" alt="Logo" />
                                    </figure>
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <ul class="header-toolbar text-end">



                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <div class="searchform-wrapper d-none d-lg-block">
                                        <form action="" class="searchform searchform-2" method="POST">
                                            <input type="search" class="searchform__input" name="keyword" id="search2"  placeholder="Search Here...">
                                            <button type="submit" class="searchform__submit" value="search" name="search" >
                                        </form> 

                                        </div>
                                    </li>
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
                                                <a href="my-account.php">Tài khoản của tôi</a>
                                            </li>
                                            <li>
                                                <a href="admin.php">Đăng nhập vào trang quản trị</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.php">Check Out</a>
                                            </li>
                                            <li>
                                                <a href="logout.php">Đăng xuất</a>
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
                <div class="main-sticky-header-height"></div>
            </div>
        </header>
        <?php endif?> <br>



<!-- Khi không đăng nhập, không có tài khoản -->

        <?php 
if (!isset($_SESSION['auth']) ):?> 
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
        <header class="header header-fullwidth header-style-1">
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
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
                                        <li class="mainmenu__item menu-item-has-children has-children">
                                            <a href="formdangki.php" class="mainmenu__link">
                                                <span class="mm-text">Đăng kí</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children has-children">
                                            <a href="formdangnhap.php" class="mainmenu__link">
                                                <span class="mm-text">Đăng nhập</span>
                                            </a>
                                        </li>
                                    
                                        
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->
                                <a href="index-2.html" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo.svg" alt="Logo" />
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="assets/img/logo/logo-white.png" alt="Logo" />
                                    </figure>
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <ul class="header-toolbar text-end">



                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <div class="searchform-wrapper d-none d-lg-block">
                                        <form action="" class="searchform searchform-2" method="POST">
                                            <input type="search" class="searchform__input" name="keyword" id="search2"  placeholder="Search Here...">
                                            <button type="submit" class="searchform__submit" value="search" name="search" >
                                        </form> 

                                        </div>
                                    </li>
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
                <div class="main-sticky-header-height"></div>
            </div>
        </header>
        <?php endif?> <br>



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
                                            <a href="index-07.php">
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
                                            <a href="#">
                                                Collections
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Pages
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

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area pt--70 pt-md--25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="index-07.php">Home</a></li>
                            <li><a href="shop-sidebar.php">Shop Pages</a></li>
                            <li class="current"><span>Product</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-page-sidebar">
                <div class="container-fluid">
                    <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
                        <div class="col-lg-9 order-lg-2" id="main-content">
                            <div class="shop-toolbar">
                                <div class="shop-toolbar__inner">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-md-start text-center mb-sm--20">
                                            <div class="shop-toolbar__left">
                                                <p class="product-pages">Showing 1–20 of 42 results</p>
                                                <div class="product-view-count">
                                                    <p>Show</p>
                                                    <ul>
                                                        <li><a href="shop-sidebar.html">6</a></li>
                                                        <li class="active"><a href="shop-sidebar.html">12</a></li>
                                                        <li><a href="shop-sidebar.html">15</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="shop-toolbar__right">
                                                <a href="#" class="product-filter-btn shop-toolbar__btn">
                                                    <span>Filters</span>
                                                    <i></i>
                                                </a>
                                                <div class="product-ordering">
                                                    <a href="#" class="product-ordering__btn shop-toolbar__btn">
                                                        <span>Short By</span>
                                                        <i></i>
                                                    </a>
                                                    <ul class="product-ordering__list">
                                                        <li class="active"><a href="#">Sort by popularity</a></li>
                                                        <li><a href="#">Sort by average rating</a></li>
                                                        <li><a href="#">Sort by newness</a></li>
                                                        <li><a href="#">Sort by price: low to high</a></li>
                                                        <li><a href="#">Sort by price: high to low</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advanced-product-filters">
                                    <div class="product-filter">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="product-widget product-widget--price">
                                                    <h3 class="widget-title">Price</h3>
                                                    <ul class="product-widget__list">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$20.00</span>
                                                                <span> - </span>
                                                                <span class="ammount">$40.00</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$40.00</span>
                                                                <span> - </span>
                                                                <span class="ammount">$50.00</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$50.00</span>
                                                                <span> - </span>
                                                                <span class="ammount">$60.00</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$60.00</span>
                                                                <span> - </span>
                                                                <span class="ammount">$80.00</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$80.00</span>
                                                                <span> - </span>
                                                                <span class="ammount">$100.00</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="ammount">$100.00</span>
                                                                <span> + </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-widget product-widget--brand">
                                                    <h3 class="widget-title">Brands</h3>
                                                    <ul class="product-widget__list">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>Airi</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>Mango</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>Valention</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>Zara</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-widget product-widget--color">
                                                    <h3 class="widget-title">Color</h3>
                                                    <ul class="product-widget__list product-color-swatch">
                                                        <li>
                                                            <a href="shop-sidebar.html"
                                                                class="product-color-swatch-btn blue">
                                                                <span class="product-color-swatch-label">Blue</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html"
                                                                class="product-color-swatch-btn green">
                                                                <span class="product-color-swatch-label">Green</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html"
                                                                class="product-color-swatch-btn pink">
                                                                <span class="product-color-swatch-label">Pink</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html"
                                                                class="product-color-swatch-btn red">
                                                                <span class="product-color-swatch-label">Red</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html"
                                                                class="product-color-swatch-btn grey">
                                                                <span class="product-color-swatch-label">Grey</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-widget product-widget--size">
                                                    <h3 class="widget-title">Size</h3>
                                                    <ul class="product-widget__list">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>L</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>M</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>S</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>XL</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span>XXL</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-products">
                                <div class="row grid-space-20 xxl-block-grid-4">
                                <?php foreach($kq_new as $key){
                                                ?>
                                    <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                            <a href="product-details.php?iddetail=<?= $key['pro_id']?>&iddanh=<?= $key['cate_id']?>">
                                            <img src="assets/img/products/<?= $key['pro_image']?>" alt="Product Image" class="">
                                                                </a>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.html"><?= $key['pro_name']?></a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $key['pro_sale']?></span>
                                                        <span class="product-price-old">
                                                            <span class="money"><?= $key['pro_price']?></span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                            ?>
                                </div>
                            </div>
                            <nav class="pagination-wrap">
                                <ul class="pagination">
                                    <li><a href="shop-sidebar.html" class="prev page-number"><i
                                                class="fa fa-angle-double-left"></i></a></li>
                                    <li><span class="current page-number">1</span></li>
                                    <li><a href="shop-sidebar.php" class="page-number">2</a></li>
                                    <li><a href="shop-sidebar.php" class="page-number">3</a></li>
                                    <li><a href="shop-sidebar.php" class="next page-number"><i
                                                class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>




                        <div class="col-lg-3 order-lg-1 mt--30 mt-md--40" id="primary-sidebar">
                            <div class="sidebar-widget">
                                <!-- Category Widget Start -->
                                <div class="product-widget categroy-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="prouduct-categories product-widget__list">
                                    <li><a href="shop-sidebar.php">Tất Cả Sản Phẩm</a></li>
                                    <?php foreach($kqcate as $key1){
                                                ?>
                                        <li><a href="shop-sidebar.php?iddanhm=<?= $key1['cate_id']?>"><?= $key1['cate_name']?></a></li>
                                        <?php }
                                            ?>
                                    </ul>
                                </div>
                                <!-- Category Widget Start -->

                                <!-- Price Filter Widget Start -->
                                <!-- <div class="product-widget product-price-widget mb--40 mb-md--35">
                                    <h3 class="widget-title">Price</h3>
                                    <div class="widget_content">
                                        <form action="#" method="post">
                                            <div id="slider-range"
                                                class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                    style="left: 16.6667%; width: 79.1667%;">

                                                </div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                    tabindex="0" style="left: 16.6667%;">

                                                </span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                    tabindex="0" style="left: 95.8333%;">

                                                </span>
                                            </div>
                                            <div class="filter-price">
                                                <div class="filter-price__count">
                                                    <div class="filter-price__input-group mb--20">
                                                        <span>Price: </span>
                                                        <input type="text" id="amount" class="amount-range" readonly="">
                                                    </div>
                                                    <button type="submit" class="btn btn-style-1 sidebar-btn">
                                                        filter
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                                <!-- Price Filter Widget End -->

                                <!-- Product Size Widget Start -->
                                <!-- <div class="product-widget product-widget--size mb--25 mb-md--20">
                                    <h3 class="widget-title">Size</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">S</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XXl</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">M</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">XL</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                    </ul>
                                </div> -->
                                <!-- Product Size Widget End -->

                                <!-- Product Color Widget Start -->
                                <!-- <div class="product-widget product-widget--Color mb--25 mb-md--20">
                                    <h3 class="widget-title">Color</h3>
                                    <ul class="product-widget__list two-column-list">
                                        <li><a href="shop-sidebar.html">Blue</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Pink</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">White</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Green</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Red</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Black</a><span class="count">(2)</span></li>
                                    </ul>
                                </div> -->
                                <!-- Product Color Widget End -->

                                <!-- Product Brand Widget Start -->
                                <!-- <div class="product-widget product-widget--brand mb--40 mb-md--30">
                                    <h3 class="widget-title">Brands</h3>
                                    <ul class="product-widget__list">
                                        <li><a href="shop-sidebar.html">Airi</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Mango</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Valention</a><span class="count">(2)</span></li>
                                        <li><a href="shop-sidebar.html">Zara</a><span class="count">(2)</span></li>
                                    </ul>
                                </div> -->
                                <!-- Product Brand Widget End -->

                                <!-- Category Widget Start -->
                                <!-- <div class="product-widget tag-widget mb--35 mb-md--30">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="tagcloud">
                                        <a href="shop-sidebar.html">chair</a>
                                        <a href="shop-sidebar.html">deco</a>
                                        <a href="shop-sidebar.html">dress</a>
                                        <a href="shop-sidebar.html">fashion</a>
                                        <a href="shop-sidebar.html">furniture</a>
                                        <a href="shop-sidebar.html">light</a>
                                        <a href="shop-sidebar.html">living</a>
                                        <a href="shop-sidebar.html">sofa</a>
                                        <a href="shop-sidebar.html">table</a>
                                        <a href="shop-sidebar.html">women</a>
                                    </div>
                                </div> -->
                                <!-- Category Widget Start -->

                                <!-- Promo Widget Start -->
                                <div class="product-widget promo-widget">
                                    <div class="banner-box banner-type-3 banner-type-3-2 banner-hover-1">
                                        <div class="banner-inner">
                                            <div class="banner-image">
                                                <img src="assets/img/banner/ad-banner.jpg" alt="Banner">
                                            </div>
                                            <div class="banner-info">
                                                <h2 class="banner-title-11">New <br> <strong>Season</strong></h2>
                                            </div>
                                            <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Promo Widget End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Footer Start -->
        <footer class="footer footer-3 bg--white border-top">
            <div class="container">
                <div class="row pt--40 pt-md--30 mb--40 mb-sm--30">
                    <div class="col-12 text-md-center">
                        <div class="footer-widget">
                            <div class="textwidget">
                                <a href="index-2.html" class="footer-logo">
                                    <img src="assets/img/logo/logo.svg" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb--15 mb-sm--20">
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">Company</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Work for Airi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">USEFUL LINKS</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-collections.html">The Collections</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">Return Policiy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-lg--30">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2">SHOPPING</h3>
                            <ul class="widget-menu widget-menu--2">
                                <li><a href="shop-instagram.html">Look Book</a></li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="footer-widget">
                            <h3 class="widget-title widget-title--2 widget-title--icon">Subscribe now and get 10% off
                                new collection</h3>
                            <form
                                action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                class="newsletter-form newsletter-form--3 mc-form" method="post" target="_blank">
                                <input type="email" name="newsletter-email" id="newsletter-email"
                                    class="newsletter-form__input" placeholder="Enter Your Email Address..">
                                <button type="submit" class="newsletter-form__submit">
                                    <i class="dl-icon-right"></i>
                                </button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pt--10 pb--30">
                    <div class="col-md-4">
                        <!-- Social Icons Start Here -->
                        <ul class="social social-small">
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
                                <a href="https://facebook.com/" class="social__link">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://youtube.com/" class="social__link">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://instagram.com/" class="social__link">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Icons End Here -->
                    </div>
                    <div class="col-md-4 text-md-center">
                        <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <img src="assets/img/others/payments-2.png" alt="Payment">
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
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="assets/img/others/payments.png" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet
                                fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:demo@example.com">demo@example.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
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
                                    <a href="https://facebook.com/" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com/" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com/" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

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
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda
                                        shorts </a>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
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
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
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
                                <div class="product-image-carousel nav-vertical-center nav-style-1">
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-9-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-10-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge new">new</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-11-1.jpg" alt="Product Image"
                                                    class="primary-image">
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
                                    <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis.
                                        Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus,
                                        ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in
                                        vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at,
                                        hendrerit arcu.</p>
                                    <div class="product-action d-flex flex-row align-items-center mb--30">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                            return</a>
                                    </div>
                                    <div class="product-meta float-left">
                                        <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                LA-887</span></span>
                                        <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html"
                                                rel="tag">Fashions</a></span>
                                    </div>
                                    <div class="product-share-box float-right">
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


<!-- Mirrored from template.hasthemes.com/airi/airi/shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:15:05 GMT -->
</html>