<?php
session_start();
require_once 'db.php';
// lấy sản phẩm cùng danh mục
if (isset($_GET['iddanh'])) {
    $iddanh = $_GET['iddanh'];
    $sql_new = "SELECT * FROM `products` WHERE cate_id = $iddanh LIMIT 4 " ;
    $kq_new=$conn->query($sql_new);
 }
// lấy sản phẩm từ dữ liệu
$sql = "SELECT * FROM `products`" ;
$kq = $conn->query($sql);

// thông tin sản phẩm
if (isset($_GET['iddetail'])) {
   $idchitiet = $_GET['iddetail'];
 $sqldetail = "SELECT * FROM products WHERE pro_id = $idchitiet";
 $kqdetail = $conn->query($sqldetail);
}

if (isset($_GET['iddetail'])) {
    $idchitiet = $_GET['iddetail'];
  $sqldetail1 = "SELECT * FROM products_detail WHERE pro_id = $idchitiet";
  $kqdetail1 = $conn->query($sqldetail1);
 }

$sql1="SELECT * FROM `users`";
$kq1 = $conn->query($sql1);
//bình luận
if(isset($_POST['content'])){
    $content=$_POST['content'];
     $idsanpham=$_GET['iddetail'];
    $idtk = $_SESSION['auth']['id'];
    $cmtadd = $conn->query("INSERT INTO  comments(user_id ,pro_id ,cmt_content) VALUES('$idtk','$idsanpham','$content')");

   
}
    
 
?>


<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/airi/airi/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:15:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Title -->
    <title>Airi - Clean, Minimal eCommerce Bootstrap 5 Template</title>

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
                                        <li class="mainmenu__item">
                                            <a href="login-register.php" class="mainmenu__link">
                                                <span class="mm-text">login-register</span>
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
                                            <li>
                                                <a href="#">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="#">Order tracking</a>
                                            </li>
                                            <li>
                                                <a href="#">compare</a>
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
                                        <li class="mainmenu__item">
                                            <a href="login-register.php" class="mainmenu__link">
                                                <span class="mm-text">login-register</span>
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
                            <li class="current"><span>Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-full-width">
                <div class="container-fluid">
                        <?php
                                foreach($kqdetail as $key){
                            ?>
                    <div class="row pt--40">
                        <div class="col-md-6 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__large-image">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-gallery__wrapper">
                                                <div class="airi-element-carousel main-slider product-gallery__full-image image-popup">
                                                    <figure class="product-gallery__image zoom">
                                                        <img src="assets/img/products/<?= $key['pro_image']?>" alt="Product">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="product-badge new">New</span>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                                <div class="product-rating float-left">
                                    <span>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                        <i class="dl-icon-star rated"></i>
                                    </span>
                                    <a href="#" class="review-link">(1 customer review)</a>
                                </div>
                                <div class="product-navigation">
                                    <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                    <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <h3 class="product-title"><?= $key['pro_name']?></h3>
                                <span class="product-stock in-stock float-right">
                                    <i class="dl-icon-check-circle1"></i>
                                    in stock
                                </span>
                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money"><?= $key['pro_sale']?></span>
                                    <span class="old-price">
                                        <span class="money"><?= $key['pro_price']?></span>
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                                <p class="product-short-description mb--45 mb-sm--20"><?= $key['pro_intro']?></p>
                                <form action="#" class="form--action mb--30 mb-sm--20">
                                    <div class="product-action flex-row align-items-center">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                        <a href="" class="btn btn-primary"> Mua ngay</a>
                                        </button>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Chọn Size Sản Phẩm</option>
                                            <?php
                                                    foreach($kqdetail1 as $key1){
                                                ?>
                                            <option value="<?= $key1['prodt_id']?>"><?= $key1['size']?>(<?= $key1['quantity']?>)</option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                                </form>
                                <div class="product-extra mb--40 mb-sm--20">
                                    <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                        you</a>
                                    <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                        return</a>
                                </div>
                                <div
                                    class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="product-meta">
                                        <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                LA-887</span></span>
                                        <span class="posted_in font-size-12">Categories:
                                            <a href="shop-sidebar.html">Fashions</a>
                                        </span>
                                        <span class="posted_in font-size-12">Tags:
                                            <a href="shop-sidebar.html">dress,</a>
                                            <a href="shop-sidebar.html">fashions,</a>
                                            <a href="shop-sidebar.html">women</a>
                                        </span>
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
                    <?php }
                    ?>
                    <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                        <div class="col-12">
                            <div class="product-data-tab tab-style-1">
                                <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab"
                                    role="tablist">
                                    <button type="button" class="product-data-tab__link nav-link active" id="nav-description-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-description" role="tab" aria-selected="true">
                                        <span>Description</span>
                                    </button>
                                    <button type="button" class="product-data-tab__link nav-link" id="nav-reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews</span>
                                    </button>
                                </div>
                                <div class="tab-content product-data-tab__content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                        aria-labelledby="nav-description-tab">
                                        <div class="product-description">
                                        <?php
                                            foreach($kqdetail as $key){
                                                                 ?>
                                            <?php echo $key['mo_ta'] ?>

                                            <?php } ?>
                                        </div>
                                    </div>

                                   



                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                        aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <ul class="review__list">
                                            <?php 
                                                $binhluan ="SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id ORDER BY cmt_id DESC  LIMIT 4 ";
                                                
                                                $query =  $conn->query($binhluan);
                                                foreach($query as $key) { ?>
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <img src="assets/img/others/comment-icon-2.png"
                                                            alt="Review Avatar" class="review__avatar">
                                                        <div class="review__text">
                                                            
                                                            <div class="review__meta">
                                                                <strong class="review__author"><?php echo $key['fullname'] ?> </strong>
                                                                <span class="review__dash">-</span>
                                                                <span class="review__published-date"><?php echo $key['cmt_date'] ?></span>
                                                            </div>
                                                            <div>
                                                                <p><?php echo $key['cmt_content'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <span class="reply-title"><strong>Add a review</strong></span>
                                                <?php
                                                    if(isset($_SESSION['auth'])){
                                                        ?>
                                                        <div class="form-group">
                                                        <input name="content" class="form-control" type="text" placeholder="Mời bạn nhập bình luận" />
                                                    </div>
                                                    <div class="form-group">
                                                    <input type="submit" value="Submit"
                                                                    class="btn btn-style-1 btn-submit">
                                                    </div>
                                                        <?php }
                                                        else{        
                                                    ?>
                                                    <h3><a href="formdangnhap.php">Bạn phải Đăng nhập thì mới có thể Bình Luận</a></h3>
                                                    <?php   } ?>
                                                <form role="form" method="POST"  class="form">




                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12 text-center">
                            <h2 class="heading-secondary">Related products</h2>
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
                                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                    data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
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
                                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="quick-qty"
                                                value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30 mb-md--20">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                            return</a>
                                    </div>
                                    <div
                                        class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                        <div class="product-meta">
                                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                    LA-887</span></span>
                                            <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html"
                                                    rel="tag">Fashions</a></span>
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


<!-- Mirrored from template.hasthemes.com/airi/airi/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jul 2021 15:15:09 GMT -->
</html>