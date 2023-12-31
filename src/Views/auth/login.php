<?php
if(isset($_GET['logout'])){
    session_start();
    session_destroy();
    echo"<script>alert('Đã đăng xuất');window.location.href='/'</script>";

}
else{
?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Login page</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->

    <?php require_once 'components/head.php' ?>

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
                <div class="body customScroll">
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
                        <li><a href="#"><span class="menu-text">Home</span></a>
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
                        <li><a href="contact.html">Contact Us</a></li>
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
                        <h2 class="breadcrumb-title">Login</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- login area start -->
        <div class="login-register-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4>login</h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4>register</h4>
                                </a>
                            </div>
                            
                            <div class="tab-content">
                                <!-- Đăng nhập -->
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <?php
                                            $conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                                            mysqli_set_charset($conn, "utf8");
                    
                                            if(isset($_POST['submit'])){
                                                
                                                $email=$_POST['email'];
                                                $pass=$_POST['password'];

                                                $check=mysqli_fetch_array(mysqli_query($conn,"SELECT*FROM users WHERE email='$email' and password='$pass'"));
                                                if($check){
                                                    $_SESSION['username']=$check['username'];
                                                    $_SESSION['user']=$check['username'];
                                                    $_SESSION['user_id']=$check['id'];
                                                    $_SESSION['is_admin']=$check['is_admin'];

                                                    if($check['is_admin']==1){
                                                        echo"<script>alert('admin đã login thành công');window.location.href='./admin/dashboard'</script>";
                                                    }
                                                    else if($check['is_admin']==0){
                                                        echo"<script>alert('user đã login thành công');window.location.href='./'</script>";
                                                    }
                                                    
                                                }
                                                else echo"<script>alert('tài khoản sai')</script>";

                                            }
                                            ?>
                                            <!-- <form action="/handleLogin" method="POST"> -->
                                            <form action="/login" method="POST">

                                                <input type="text" id="email" name="email" placeholder="Email" value="admin@gmail.com" />
                                                <input type="password" id="password" name="password" placeholder="Password" value="123456" />
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox" />
                                                        <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit" name="submit"><span>Đăng nhập</span></button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- End Đăng nhập -->

                                <!-- Đăng ký -->
                                <?php
                                //đã login thì chuyển về home
                                if(isset($_SESSION['username'])){
                                    echo"<script>alert('bạn đã login');window.location.href='/'</script>";

                                }
                                if(isset($_POST['res_submit'])){
                                    $username=$_POST['username'];
                                    $email=$_POST['email'];
                                    $number=$_POST['phone_number'];
                                    $address=$_POST['address'];
                                    $password=$_POST['password'];

                                    $checkUsername=mysqli_fetch_array(mysqli_query($conn,"SELECT*FROM users WHERE username='$username' LIMIT 1"));
                                    $checkEmail=mysqli_fetch_array(mysqli_query($conn,"SELECT*FROM users WHERE email='$email' LIMIT 1"));
                                    $checkPhone=mysqli_fetch_array(mysqli_query($conn,"SELECT*FROM users WHERE phone_number='$number' LIMIT 1"));


                                    if($checkEmail)echo"<script>alert('Email đã tồn tại')</script>";
                                    else if($checkPhone)echo"<script>alert('Phone đã tồn tại')</script>";
                                    else if($checkUsername)echo"<script>alert('username đã tồn tại')</script>";
                                    else{

                                        $lastUser=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users ORDER BY id desc LIMIT 1"));
                                        $role=0;
                                        $id=$lastUser['id']+1;
                                        @mysqli_query($conn,"INSERT into users(id,username,email,phone_number,address,password,is_admin)values($id,'$username','$email','$number','$address','$password',$role)");
                                        echo"<script>alert('Đăng kí thành công, hãy đăng nhập lại !');window.location.href='#success_register'</script>";

                                    }




                                }
                                ?>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <!-- <form action="/admin/users/create" method="post"> -->
                                            <form action="/login" method="post">

                                                <input name="username" placeholder="tên đăng nhập" type="text" required />
                                                <input type="email" name="email" placeholder="Email" required />
                                                <input type="number" name="phone_number" placeholder="Phone"  required/>
                                                <input type="text" name="address" placeholder="Địa chỉ"  required/>
                                                <input type="password" name="password" placeholder="Password"  required/>
                                                
                                                <div class="button-box">
                                                    <button type="submit" name="res_submit"><span>Đăng kí</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Đăng ký -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login area end -->
        <!-- Footer Area Start -->
        <?php require_once 'components/footer.php' ?>
        <!-- Footer Area End -->
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <?php require_once 'components/foot.php' ?>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:36 GMT -->
</html>
<?php }?>