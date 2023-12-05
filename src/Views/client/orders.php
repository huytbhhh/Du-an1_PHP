<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<!-- <?php include("./connect.php"); ?> -->


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

        <!-- breadcrumb-area end -->
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <h3 class="cart-page-title">Don hang da mua</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">



                        <!-- // thông tin thêm  -->
                        <div onclick="hide()" id="popup" style="display:none;top:0px;left:0px;position: fixed;z-index:10000;background:#cccccc82;width:100%;height:100vh;justify-content:center">
                            <div style="border:1px #000 solid;border-radius:10px;display:grid;grid-template-columns:200px 1fr;background:#fff;min-height:300px;max-height:600px;margin-top:60px;width:700px">
                                <span>ID đơn hàng :</span><span id="id_order"> id_order</span>

                                <span>Người mua :</span><span id="user_buy"> user_buy</span>
                                <span>Số lượng sản phẩm mua :</span><span id="quantity"> quantity</span>
                                <span>Danh sách :</span>
                                <span id="ds_product" style="border:1px #ccc solid;display:grid;grid-template-columns:1fr 1fr 1fr"> ds_product</span>
                                <span>Tổng tiền :</span><span id="total"> total</span>
                            </div>

                        </div>
                        <script>
                            function show(id_order, user_buy, quantity, total, ds_product) {
                                document.getElementById('id_order').innerHTML = id_order;
                                document.getElementById('user_buy').innerHTML = user_buy;
                                document.getElementById('quantity').innerHTML = quantity;
                                document.getElementById('total').innerHTML = total + " VNĐ";
                                document.getElementById('ds_product').innerHTML = "<div style='border-bottom: 1px #ccc solid;max-height:30px'>Tên</div><div style='border-bottom: 1px #ccc solid;max-height:30px'>Số lượng</div><div style='border-bottom: 1px #ccc solid;max-height:30px'>tổng</div>" + ds_product;


                                document.getElementById('popup').style.display = 'flex';



                            }

                            function hide() {
                                document.getElementById('popup').style.display = 'none';
                            }
                        </script>

                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID don hang</th>

                                        <th>Ngay mua</th>
                                        <th>Địa chỉ</th>

                                        <th>Tong tien</th>

                                        <th>Trạng thái</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        //validate login

                                        if (isset($_POST['Cancel_order']) && isset($_SESSION['username'])) {

                                            @mysqli_query($conn, "UPDATE orders SET status=0 WHERE order_id='{$_POST['cancel_id']}'"); //cap nhat status
                                            $log = $_SESSION['username'] . " đã huỷ đơn hàng id là " . $_POST['cancel_id'];
                                            @mysqli_query($conn, "INSERT into log(msg,user)values('$log','{$_SESSION['username']}')"); //log
                                            echo "<script>  Toastify({text: 'Đã Huỷ Đơn hàng id " . $_POST['cancel_id'] . "',position: 'left', gravity: 'top',duration: 3000}).showToast();setTimeout(function() {window.location.href='/orders';}, 2000);</script>";
                                        }

                                        // include("./connect.php");
                                        // session_start();

                                        $queries = mysqli_query($conn, "SELECT * FROM orders LIMIT 0");
                                        if (isset($_SESSION['id'])) $queries = mysqli_query($conn, "SELECT * FROM orders WHERE user_id='{$_SESSION['id']}' ORDER BY order_date");
                                        while ($row = mysqli_fetch_array($queries)) {
                                            $checkStatus = array(0 => '<str style="color:red">Đã Huỷ</str>', 1 => "Đang chuẩn bị hàng", 2 => "Đang vẫn chuyển", 3 => '<str style="color:green">Đã vận chuyển</str>');
                                            $status_info = $checkStatus[$row['status']];
                                            //
                                            $id_order = $row['order_id'];
                                            $quantity = 0;
                                            $total = $row['total_amount'];
                                            $id_user = $row['user_id'];
                                            $user_buy = $_SESSION['username'];
                                            $ds_product = "";
                                            //
                                            $onDetail = mysqli_query($conn, "SELECT * FROM order_details WHERE order_id=$id_order LIMIT 20");


                                            while ($value = mysqli_fetch_assoc($onDetail)) {
                                                $quantity += 1;
                                                $pro_name = mysqli_fetch_array(mysqli_query($conn, "SELECT product_name as name FROM products WHERE id='{$value['product_id']}'"));
                                                $ds_product .= "<div>" . $pro_name['name'] . "</div> <div> " . $value['quantity'] . " </div><div> " . $value['subtotal'] . " VNĐ</div>";
                                            }
                                    ?>
                                            <tr>



                                                <td class="product-name"><a href="#"><?= $row['order_id'] ?></a></td>
                                                <td class="product-name"><a href="#"><?= $row['order_date'] ?></a></td>
                                                <td class="product-name"><a href="#"><?= $row['address'] ?></a></td>


                                                <td class="product-price-cart"><span class="amount">$<?= $row['total_amount'] ?></span></td>
                                                <td class="product-name">
                                                    <?= $status_info ?>
                                                </td>


                                                <td class="product-remove">

                                                    <form action="/orders" method="post">
                                                        <!-- <a href="#"><i class="fa fa-pencil"></i></a> -->
                                                        <input type="number" name="cancel_id" value="<?= $row['order_id'] ?>" style="display:none">

                                                        <button type="button" onclick="show('<?= $id_order ?>','<?= $user_buy ?>','<?= $quantity ?>','<?= $total ?>','<?= $ds_product ?>')" style="border:1px #ccc solid;background:linear-gradient(45deg,#ccc,#fff);">Xem chi tiết</button>
                                                        <?php if ($row['status'] == 1) { ?><button name="Cancel_order" type="submit" style="pading:5px;border:1px red solid;border-radius:4px"><i class="fa fa-times"></i>Huỷ đơn</button><?php } ?>
                                                    </form>
                                                </td>
                                            </tr>

                                    <?php

                                        }
                                    } //validate



                                    ?>
                                    <!--  -->
                                </tbody>
                            </table>
                        </div>



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