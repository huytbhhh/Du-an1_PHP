<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<!-- <?php include("./connect.php");?> -->


<!-- Mirrored from htmldemo.net/hmart/hmart/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Cart page</title>
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
                            <a href="single-product.html" class="image"><img src="/hmart/assets/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="/hmart/assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
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
                            <a href="single-product.html" class="image"><img src="/hmart/assets/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img src="/hmart/assets/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
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

        <?php require_once 'components/menu.php' ?>

        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Cart</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                        if(isset($_POST['deleteThis'])){
                            // echo json_encode($_POST['id']);
                            $id=$_POST['id'];
                            $DataCart =[];//
                            foreach($_SESSION['cart'] as $v)
                            if($v['id']!=$id)$DataCart[]=array("id"=>$v['id'],"count"=>$v['count']);
                            $_SESSION['cart']=$DataCart;
                            echo "<script>alert('xoá thành công');window.location.href='/cart'</script>";

                        }
                        else if(isset($_POST['updateCart'])){
                            // $id=$_POST['id'];
                            // $count=$_POST['qtybutton[]'];
                            $data=[];
                            for($i=0;$i<count($_POST['id']);$i++){
                                $data[]=array(
                                    "id"=>$_POST['id'][$i],
                                    "count"=>$_POST['count'][$i],
                                );
                            }
                            $_SESSION['cart']=$data;
                            echo "<script>alert('Cập nhật thành công');window.location.href='/cart'</script>";

                            // echo json_encode($id);

                        }
                        ?>
                        <form action="#" method="post">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                            // include("./connect.php");
                                            // session_start();
                                            $total=0;
                                            if(isset($_SESSION['cart'])&&!empty($_SESSION['cart'])){
                                                foreach($_SESSION['cart'] as $v){
                                                    $product_detail=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM products WHERE id='{$v['id']}'"));//thông tin sản phẩm lấy từ mysql
                                                    $total+=($v['count']*$product_detail['product_price']);//tổng tiền
                                                ?>
                                        <tr>

                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="<?=$product_detail['image']?>" alt="" /></a>
                                            </td>
                                            <input value="<?=$v['id']?>" name="id[]" type="text" style="display:none">
                                            <td class="product-name"><a href="#"><?=$product_detail['product_name']?></a></td>
                                            <td class="product-price-cart"><span class="amount">$<?=$product_detail['product_price']?></span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="count[]" value="<?=$v['count']?>" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$<?=($v['count']*$product_detail['product_price'])?></td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <button name="deleteThis"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>

                                                    <?php
                                                }
                                            }
                                            // else{
                                            //     echo "<td>Bạn chưa thêm hàng vào giỏ hàng</td>";
                                            // }
                                            
                                            ?>
                                            <!--  -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="/">Tiếp tục mua hàng</a>
                                        </div>
                                        <?php
                                        if(isset($_POST['clearCart'])){
                                            $_SESSION['cart']=[];
                                            echo "<script>alert('xoá thành công');window.location.href='/cart'</script>";
                                        }
                                       
                                        ?>
                                         <button type="submit" name="updateCart" class="cart-btn-2">Cập nhật giỏ hàng</button>
                                        <form action="#" method="post" class="cart-clear">
                                           
                                            <button type="submit" name="clearCart" class="cart-btn-2" href="#">Xoá giỏ hàng</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['checkout']) &&isset($_SESSION['cart'])){
                            $user_id=0;
                            //tạo order_id không bị trùng lặp
                            $order_id=rand(10000000,99999999);
                            
                            while(mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM orders WHERE order_id=$order_id")))$order_id=rand(10000000,99999999);
                            //
                            @mysqli_query($conn,"INSERT into orders(order_id,user_id,order_date,total_amount)values($order_id,$user_id,NOW(),$total)");
                            //insert detail
                            foreach($_SESSION['cart'] as $v){
                                $product_id=$v['id'];
                                $product_count=$v['count'];
                                $ss=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM products WHERE id=$product_id"));
                                $sub_total=$ss['product_price']*$product_count;//tổng tiền mỗi sản phẩm nhân số lượng sản phẩm đó


                                $detail_id=rand(1000,9999);
                                while(mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM order_details WHERE detail_id=$detail_id")))$detail_id=rand(1000,9999);
                                @mysqli_query($conn,"INSERT into order_details(order_id,detail_id,product_id,quantity,subtotal)values($order_id,$detail_id,$product_id,$product_count,$sub_total)");
                            }
                            session_unset();
                            echo "<script>  alert('đặt hàng thành công');window.location.href='/'</script>";

                        }
                        
                        ?>
                        <form action="#" method="post" class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid" required>
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid" required>
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" required />
                                            </div>
                                            <button class="cart-btn-2" type="button">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <!-- <form> -->
                                            <input type="text" required name="name" />
                                            <button class="cart-btn-2" type="button">Áp dụng Coupon</button>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Số sản phẩm <span><?=isset($_SESSION['cart'])?count($_SESSION['cart']):0?></span></h5>
                                    <div class="total-shipping">
                                        <h5>Tiền ship</h5>
                                        <ul>
                                            <li><input name="1" type="radio" /> Standard <span>$20.00</span></li>
                                            <li><input name="1" type="radio" /> Express <span>$30.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Tổng tiền <span>$<?=$total?>.00</span></h4>
                                    <button style="border:1px #000 solid;padding:10px 20px"href="checkout.html" type="submit" name="checkout">Proceed to Checkout</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
        <!-- Footer Area Start -->
        
        <?php require_once 'components/footer.php' ?>

        <!-- Footer Area End -->
    </div>
    <?php require_once 'components/foot.php' ?>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 14:24:36 GMT -->
</html>