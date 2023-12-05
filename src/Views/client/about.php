<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:23 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - About Us</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <?php require_once 'components/head.php' ?>
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
        <?php require_once 'components/header.php' ?>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Wishlist Start -->
        <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
            <div class="inner">
                <div class="head">
                    <span class="title">Wishlist</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Wishlist End -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <!-- <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="assets/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="user-panel">
                <ul>
                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                    <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
                </ul>
            </div>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="/"><span class="menu-text">Home</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                                <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="#"><span class="menu-text">Pages</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Inner Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                        <li><a href="thank-you-page.html">Thank You Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Shop Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                        <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">product Details Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="single-product.html">Product Single</a></li>
                                        <li><a href="single-product-variable.html">Product Variable</a></li>
                                        <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                        <li><a href="single-product-group.html">Product Group</a></li>
                                        <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                        <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                        <li><a href="single-product-slider.html">Product Slider</a></li>
                                        <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Single Product Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="single-product-gallery-right.html">Product Gallery
                                                Right</a> </li>
                                        <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                        </li>
                                        <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                        </li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                <li><a href="blog-list.html">Blog List Page</a></li>
                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single Page</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">About Us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- About section Start -->
        <div class="about-area pt-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-wrapper text-center">
                            <div class="about-contant">
                                <h2 class="title">
                                    <span>Smart Fashion </span>
                                    With Smart Devices
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comml consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa</p>
                            </div>
                            <div class="promo-video">
                                <img src="/hmart/assets/images/about/promo-video-img.webp" alt="">
                                <a href="https://youtu.be/7rmQIzbgpoA" class="venobox overlay-box" data-vbtype="video"><span class="fa fa-play"><i class="ripple"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About section End -->
        <!-- Team Area Start -->
        <div class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title line-height-1">Team Member</h2>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-n-30px">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-lm-30px mb-lg-30px mb-md-30px">
                        <!-- Single Team -->
                        <div class="team-wrapper ">
                            <div class="team-image overflow-hidden">
                                <img src="/hmart/assets/images/team/1.webp" alt="">
                                <ul class="team-social d-flex">
                                    <li>
                                        <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-inner">
                                <div class="team-content">
                                    <h6 class="title">Sara Koivisto</h6>
                                    <span class="sub-title">Team Member</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-lm-30px mb-lg-30px mb-md-30px">
                        <!-- Single Team -->
                        <div class="team-wrapper">
                            <div class="team-image overflow-hidden">
                                <img src="/hmart/assets/images/team/2.webp" alt="">
                                <ul class="team-social d-flex">
                                    <li>
                                        <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-inner">
                                <div class="team-content">
                                    <h6 class="title">Anaiah Whitten</h6>
                                    <span class="sub-title">Team Member</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 mb-lm-30px ">
                        <!-- Single Team -->
                        <div class="team-wrapper">
                            <div class="team-image overflow-hidden">
                                <img src="/hmart/assets/images/team/3.webp" alt="">
                                <ul class="team-social d-flex">
                                    <li>
                                        <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-inner">
                                <div class="team-content">
                                    <h6 class="title">Rachel Leonard</h6>
                                    <span class="sub-title">Team Member</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Team -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End -->
        <!-- Feature Area Srart -->
        <div class="feature-area pt-100px pb-100px">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <!-- single item -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/hmart/assets/images/icons/1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Free Shipping</h4>
                                <span class="sub-title">Capped at $39 per order</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/hmart/assets/images/icons/2.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Card Payments</h4>
                                <span class="sub-title">12 Months Installments</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/hmart/assets/images/icons/3.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Easy Returns</h4>
                                <span class="sub-title">Shop With Confidence</span>
                            </div>
                        </div>
                        <!-- single item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->
        <!-- Testimonial area start -->
        <div class="trstimonial-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Client Feedback</h2>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Swiper -->
                        <div class="swiper-container content-top slider-nav-style-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-inner">
                                        <div class="testi-content">
                                            <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                            </p>
                                        </div>
                                        <div class="testi-author">
                                            <div class="author-image">
                                                <img class="img-responsive" src="/hmart/assets/images/testimonial/1.png" alt="">
                                            </div>
                                            <div class="author-name">
                                                <h4 class="name">Regan Rosen<span>Client</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-inner">
                                        <div class="testi-content">
                                            <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                            </p>
                                        </div>
                                        <div class="testi-author">
                                            <div class="author-image">
                                                <img class="img-responsive" src="/hmart/assets/images/testimonial/1.png" alt="">
                                            </div>
                                            <div class="author-name">
                                                <h4 class="name">Regan Rosen<span>Client</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-inner">
                                        <div class="testi-content">
                                            <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                            </p>
                                        </div>
                                        <div class="testi-author">
                                            <div class="author-image">
                                                <img class="img-responsive" src="/hmart/assets/images/testimonial/1.png" alt="">
                                            </div>
                                            <div class="author-name">
                                                <h4 class="name">Regan Rosen<span>Client</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-inner">
                                        <div class="testi-content">
                                            <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna sed do eiusll tempor dolore.
                                            </p>
                                        </div>
                                        <div class="testi-author">
                                            <div class="author-image">
                                                <img class="img-responsive" src="/hmart/assets/images/testimonial/1.png" alt="">
                                            </div>
                                            <div class="author-name">
                                                <h4 class="name">Regan Rosen<span>Client</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial area end-->
        <!-- Blog area start from here -->
        <div class="main-blog-area pb-100px pt-100px">
            <div class="container">
                <!-- section title start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center mb-30px0px">
                            <h2 class="title">Latest Blog</h2>
                            <p> There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <!-- section title start -->
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-xs-30px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="/hmart/assets/images/blog-image/1.webp" class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Oaklee Odom</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Lorem ipsum dolor sit amet conse adip</a></h5>
                                <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-left-sidebar.html"><img src="/hmart/assets/images/blog-image/2.webp" class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun 2030</span>
                                    <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Oaklee Odom</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Lorem ipsum dolor sit amet conse adip</a></h5>
                                <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore</p>
                                <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <!-- Blog area end here -->
        <!-- Footer Area Start -->
        <?php require_once 'components/footer.php' ?>
        <!-- Footer Area End -->
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <?php require_once 'components/foot.php' ?>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:25 GMT -->

</html>