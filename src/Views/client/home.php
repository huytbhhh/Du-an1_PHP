<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:23:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Home One</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/hmart/assets/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <?php require_once 'components/head.php' ?>

</head>

<body>
    <div class="main-wrapper">

        <?php require_once 'components/header.php' ?>

        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>






        <!-- OffCanvas Menu End -->
        <!-- Hero/Intro Slider Start -->
        <div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="/hmart/assets/images/hero/bg/hero-bg-1.webp">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category">Welcome To Hmart</span>
                                        <h2 class="title-1">Your Home <br>
                                            Smart Devices & <br>
                                            Best Solution </h2>
                                        <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop All Devices</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="/hmart/assets/images/anh_laptop/Dell/Laptop Dell Gaming G15/Dell-Gaming-G15-5530-1.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="/hmart/assets/images/hero/bg/hero-bg-1.webp">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category">Welcome To Hmart</span>
                                        <h2 class="title-1">Your Home <br>
                                            Smart Devices & <br>
                                            Best Solution </h2>
                                        <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop All Devices</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="/hmart/assets/images/anh_laptop/HP/Laptop HP Gaming Victus 16 E1107AX/HP-Gaming-Victus-16-E1107AX-1.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- Hero/Intro Slider End -->
        <!-- Banner Area Start -->



        <!-- Banner Area End -->
        <!-- Product Area Start -->
        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tab Start -->
                        <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                            <ul class="product-tab-nav nav justify-content-start align-items-center">
                                <li class="nav-item"><button class="nav-link active mt-3" data-bs-toggle="tab" data-bs-target="#newarrivals">New Arrivals</button>
                                </li>
                                <!-- <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#toprated">Top Rated</button>
                                </li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured">Featured</button>
                                </li> -->
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content mt-60px">
                            <!-- 1st tab start -->
                            <div class="tab-pane fade show active" id="newarrivals">
                                <div class="row mb-n-30px">
                                    <?php

                                    if (isset($_POST['id']) && isset($_POST['addToCart'])) {

                                        //kiểm tra session giỏ hàng đã tổn tại hay chưa
                                        $id = $_POST['id'];
                                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                            $DataCart = []; //
                                            $c = false;
                                            // echo json_encode($_SESSION['cart']);
                                            foreach ($_SESSION['cart'] as $v) {
                                                // echo $v['count'];
                                                if ($v['id'] == $id) {
                                                    $c = true;
                                                    $DataCart[] = array("id" => $v['id'], "count" => $v['count'] + 1);
                                                } else $DataCart[] = array("id" => $v['id'], "count" => $v['count']);
                                            }

                                            if (!$c) $DataCart[] = array("id" => $id, "count" => 1);
                                            $_SESSION['cart'] = $DataCart;
                                            echo "<script>  Toastify({text: 'Đã thêm vào giỏ hàng',position: 'left',
                                            gravity: 'top',duration: 2000}).showToast();</script>";

                                            // echo "<script>alert('thêm thành công');window.location.href='./'</script>";


                                        }
                                        //nếu chưa thì tạo mới
                                        else {
                                            $_SESSION['cart'][] = array(
                                                "id" => $id,
                                                "count" => 1,
                                            );
                                            echo "<script>  Toastify({text: 'Đã thêm vào giỏ hàng sản phẩm này',position: 'left',
                                            gravity: 'top',duration: 2000}).showToast();</script>";

                                            // echo "<script>alert('thêm thành công');window.location.href='./'</script>";
                                        }
                                    }
                                    ?>

                                    <!-- Sản phẩm -->


                                    <?php
                                    $products = mysqli_query($conn, "SELECT * FROM products ");
                                    if (isset($_GET['query'])) {
                                        $search_key = strtolower($_GET['query']);
                                        $products = mysqli_query($conn, "SELECT * FROM products WHERE LOWER(product_name) like '%$search_key%'  ");
                                    }
                                    while ($product = mysqli_fetch_assoc($products)) { ?>
                                        <form method="post" action="./" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                            <!-- Single Product -->
                                            <input type="text" name="id" value="<?= $product['id'] ?>" style="display:none">
                                            <div class="product">
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="thumb">
                                                    <a href="/single-product?id=<?= $product['id'] ?>" class="image">

                                                        <img src="<?= $product['image'] ?>" alt="Product" />
                                                        <img class="hover-image" src="<?= $product['image'] ?>" alt="Product" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="category"><a href="#">Accessories</a></span>
                                                    <h5 class="title"><a href="/single-product"><?= $product['product_name'] ?></a></h5>
                                                    <span class="price">
                                                        <span class="new">$<?= $product['product_price'] ?></span>
                                                    </span>
                                                </div>
                                                <div class="actions">
                                                    <button name="addToCart" title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>

                                    <!-- Sản phẩm 2 -->
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" style="display:none">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                            </span>
                                            <div class="thumb">
                                                <a href="single-product.html" class="image">
                                                    <img src="/hmart/assets/images/product-image/2.webp" alt="Product" />
                                                    <img class="hover-image" src="/hmart/assets/images/product-image/2.webp" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <span class="category"><a href="#">Accessories</a></span>
                                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="old">$48.50</span>
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <div class="actions">
                                                <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- 1st tab end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        <!-- Fashion Area Start -->
        <!-- <div class="fashion-area" data-bg-image="assets/images/fashion/fashion-bg.webp">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 text-center">
                        <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                        <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize m-auto">Shop All Devices</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Fashion Area End -->
        <!-- Feature product area start -->

        <!-- Feature product area End -->
        <!-- Testimonial area start -->



        <!-- Testimonial area end-->
        <!-- Brand area start -->
        <div class="brand-area pt-100px pb-100px">
            <div class="container">
                <div class="brand-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="/hmart/assets/images/partner/1.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="/hmart/assets/images/partner/2.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="/hmart/assets/images/partner/3.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="/hmart/assets/images/partner/4.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->
        <!-- Blog area start from here -->


        <!-- Blog area end here -->
        <!-- Footer Area Start -->
        <?php require_once 'components/footer.php' ?>
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
                        <!-- Start chi tiết -->
                        <?php foreach ($products as $product) : ?>
                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-details-content quickview-content">
                                    <h2><?= $product['product_name'] ?></h2>
                                    <div class="pricing-meta">
                                        <ul class="d-flex">
                                            <li class="new-price">$<?= $product['product_price'] ?></li>
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
                        <?php endforeach; ?>
                        <!-- End chi tiết -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>

                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="<?= $product['image'] ?>" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#"><?= $product['product_name'] ?></a></h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
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
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
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


    <?php require_once 'components/foot.php' ?>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:21 GMT -->

</html>