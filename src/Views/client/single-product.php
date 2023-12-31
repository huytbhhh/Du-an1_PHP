<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/# by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Product page</title>
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
                            <a href="#" class="image"><img src="/hmart/assets/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="image"><img src="/hmart/assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="image"><img src="/hmart/assets/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title">Smart Music Box</a>
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
                <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    
              
                    $d=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM  products WHERE id=$id"));
                    $p_name=$d['product_name'];
                    $p_price=$d['product_price'];
                    $p_image=$d['image'];
                    $p_des=$d['description'];



                }
                ?>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="#" class="image"><img src="<?=$p_image?>" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title"><?=$p_name?></a>
                                <span class="quantity-price">1 x <span class="amount">$<?=$p_price?></span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="image"><img src="/hmart/assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="image"><img src="/hmart/assets/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="#" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Single Product</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/client/home">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="<?=$p_image?>" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="<?=$p_image?>">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/hmart/assets/images/anh_laptop/HP/Laptop HP ENVY X360/HP-ENVY-X360-2-in-1-15-FH0013DX-3.jpg" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="/hmart/assets/images/anh_laptop/HP/Laptop HP ENVY X360/HP-ENVY-X360-2-in-1-15-FH0013DX-3.jpg">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/hmart/assets/images/anh_laptop/Lenovo/Laptop Lenovo Thinkpad X1/Lenovo-Thinkpad-X1-Nano-i7-Gen-1-3.jpg" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="/hmart/assets/images/anh_laptop/Lenovo/Laptop Lenovo Thinkpad X1/Lenovo-Thinkpad-X1-Nano-i7-Gen-1-3.jpg">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/hmart/assets/images/anh_laptop/Dell/Laptop Dell Inspiron 14/Dell-Inspiron-14-5430-2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/hmart/assets/images/anh_laptop/HP/Laptop HP ENVY X360/HP-ENVY-X360-2-in-1-15-FH0013DX-3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/hmart/assets/images/anh_laptop/Lenovo/Laptop Lenovo Thinkpad X1/Lenovo-Thinkpad-X1-Nano-i7-Gen-1-3.jpg" alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Chi tiết sản phẩm -->
                    <!-- Sửa ảnh  -->
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content ml-25px">
                            <h2><?=$p_name?></h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">$<?=$p_price?></li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">(5 Customer Review)</a></span>
                            </div>
                            <p class="mt-30px"><?=$p_des?></p>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>SKU:</span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Smart Device, </a>
                                    </li>
                                    <li>
                                        <a href="#">ETC</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tags: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Smart Device, </a>
                                    </li>
                                    <li>
                                        <a href="#">Phone</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart"> Add To
                                        Cart</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews (02)</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details2" class="tab-pane">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <ul>
                                            <li><span>Weight</span> 400 g</li>
                                            <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>
                                            <?=$p_des?>
                                        </p>
                                    </div>
                                </div>
                                <!-- <div id="des-details3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="review-wrapper">
                                                <div class="single-review">
                                                    <div class="review-img">
                                                        <img src="assets/images/review-image/1.png" alt="" />
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>
                                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                                cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                                euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-review child-review">
                                                    <div class="review-img">
                                                        <img src="assets/images/review-image/2.png" alt="" />
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                                cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                                euismod vehicula.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="ratting-form-wrapper pl-50">
                                                <h3>Add a Review</h3>
                                                <div class="ratting-form">
                                                    <form action="#">
                                                        <div class="star-box">
                                                            <span>Your rating:</span>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Name" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Email" type="email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating-form-style form-submit">
                                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                                    <button class="btn btn-primary btn-hover-color-primary " type="submit" value="Submit">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                    <!-- Kết thúc chi tiết sản phẩm -->
                </div>
            </div>
        </div>
        <!-- Product Area Start -->
        <div class="product-area related-product">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Related Products</h2>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="new-product-slider swiper-container slider-nav-style-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/1.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Modern Smart Phone
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="sale">-10%</span>
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/2.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/2.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Bluetooth Headphone
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="old">$48.50</span>
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">Sale</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/3.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/3.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Smart Music Box
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">New</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/4.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Air Pods 25Hjkl Black
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                    </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/5.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/5.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Smart Hand Watch
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="sale">-8%</span>
                                        <span class="new">Sale</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/6.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/6.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Smart Table Camera
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="old">$138.50</span>
                                            <span class="new">$112.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="new">Sale</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/7.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/1.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Round Pocket Router
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                        <span class="sale">-5%</span>
                                        </span>
                                        <div class="thumb">
                                            <a href="#" class="image">
                                                <img src="/hmart/assets/images/product-image/8.webp" alt="Product" />
                                                <img class="hover-image" src="/hmart/assets/images/product-image/8.webp" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">Accessories</a></span>
                                            <h5 class="title"><a href="#">Power Bank 10000Mhp
                                                </a>
                                            </h5>
                                            <span class="price">
                                            <span class="old">$260.00</span>
                                            <span class="new">$238.50</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                    class="pe-7s-refresh-2"></i></button>
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
        <!-- Product Area End -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="/hmart/assets/images/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
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
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: Your Address Goes Here.</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                        <p class="mail"><a href="https://demo@example.com/"> demo@example.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="payment-mth"><a href="#"><img class="img img-fluid" src="/hmart/assets/images/icons/payment.png" alt="payment-image"></a></div>
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2022 <strong>Hmart</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
                                            <strong> Codecarnival </strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/zoom-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/zoom-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/zoom-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/zoom-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/zoom-image/5.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/small-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/small-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/small-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/small-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="/hmart/assets/images/product-image/small-image/5.webp" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="/hmart/assets/images/icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/hmart/assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/hmart/assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/hmart/assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <?php require_once 'components/foot.php' ?>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/# by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:37 GMT -->
</html>