<?php
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($conn, "utf8");
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1) {
    
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Order</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Order</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh sách đơn hàng</h5>

                                    <!-- <a href="/admin/products/create" class="btn btn-info btn-sm">Tạo mới</a> -->
                                </div>
                                <style>
                                    span{
                                        padding:10px
                                    }
                                </style>
                                <div class="card-block">
                                    <!-- // thông tin thêm  -->
                                    <div onclick="hide()" id="popup" style="display:none;top:0px;left:0px;position: fixed;z-index:10000;background:#cccccc82;width:100%;height:100vh;justify-content:center">
                                        <div style="border:1px #000 solid;border-radius:10px;display:grid;grid-template-columns:200px 1fr;background:#fff;min-height:300px;max-height:600px;margin-top:60px;width:700px">
                                            <span>ID đơn hàng  :</span><span id="id_order"> id_order</span>
                                            
                                        
                                            <span>Người mua  :</span><span id="user_buy"> user_buy </span>
                                            <span>Số lượng sản phẩm mua  :</span><span id="quantity"> quantity</span>
                                            <span>Danh sách  :</span>
                                                <span id="ds_product" style="border:1px #ccc solid;display:grid;grid-template-columns:1fr 1fr 1fr"> ds_product</span>

                                            
                                            <span>Tổng tiền  :</span><span id="total"> total</span>



                                        </div>
                                       
                                    </div>
                                    <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Img</th> -->
                                                    <th>ID USER</th>
                                                    <th>TỔNG TIỀN</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Địa chỉ</th>

                                                
                                                    <th>Trạng thái</th>


                                                    <th>Hành động</th>

                                                    <!-- <th>Danh mục</th>
                                                    <th>Active</th>
                                                    <th>Action</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                             
                                                

                                                $products=mysqli_query($conn,"SELECT * FROM orders");

                                                ?>
                                                <?php while($product=mysqli_fetch_assoc($products)){
                                                    $id_order=$product['order_id'];
                                                    $quantity=0;
                                                    $total=$product['total_amount'];
                                                    $id_user=$product['user_id'];
                                                    $user_buy="user_id không hợp lệ";
                                                    $ds_product="";
                                                    //
                                                    $user=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users WHERE id=$id_user"));
                                                    $onDetail=mysqli_query($conn,"SELECT * FROM order_details WHERE order_id=$id_order");

                                                    
                                                    if($user){
                                                        $user_buy=$user['username'];
                                                    }
                                                    while($value =mysqli_fetch_assoc($onDetail)){
                                                        $quantity+=1;
                                                        $pro_name=mysqli_fetch_array(mysqli_query($conn,"SELECT product_name as name FROM products WHERE id='{$value['product_id']}'"));
                                                        $ds_product.="<div>".$pro_name['name']."</div> <div> ".$value['quantity']." </div><div> ".$value['subtotal']." VNĐ</div>";

                                                    }
                                                        
                                                    if(isset($_POST['change_status'])){
                                                        @mysqli_query($conn,"UPDATE orders SET status='{$_POST['status']}' WHERE order_id='{$_POST['id']}'");
                                                        echo "<script>alert('success');window.location.href='./orders'</script>";
                                                    }
                                                    ?>
                                                    
                                                    <tr>
                                                        <td><?= $id_order ?></td>
                                                        <!-- <td>
                                                            <img src="<?= $product['image'] ?>" alt="" width="100px">
                                                        </td> -->
                                                        <td><?= $product['user_id'] ?></td>
                                                        <td><?= $total ?> VNĐ</td>
                                                        <td><?= $product['order_date'] ?></td>
                                                        <td><?= $product['address'] ?></td>

                                                        <form action="./orders" method="post">
                                                        
                                                        <td style="display:none"><input type="number" name="id" value="<?=$id_order?>" style="display:none"></td>

                                                        <td>
                                                            <select name="status">
                                                            <option value="0" <?=($product['status']==0)?"selected":""?> >Da huy</option>

                                                                <option value="1" <?=($product['status']==1)?"selected":""?> >Đang chuẩn bị hàng</option>
                                                                <option value="2" <?=($product['status']==2)?"selected":""?> >Đang vẫn chuyển</option>
                                                                <option value="3" <?=($product['status']==3)?"selected":""?> >Đã vận chuyển</option>


                                                            </select>
                                                        </td>

                                                        <td>
                                                            <button type="button" onclick="show('<?=$id_order?>','<?=$user_buy?>','<?=$quantity?>','<?=$total?>','<?=$ds_product?>','<?=$product['phone']?>')" style="border:1px #ccc solid;background:linear-gradient(45deg,#ccc,#fff);">Xem chi tiết</button>
                                                            <button type="submit"  name="change_status">Lưu</button>
                                                        </td>
                                                        </form>

                                                       
                                                    </tr>
                                                   
                                                <?php } ?>
                                            </tbody>

                                        </table>
                                        <script>

                                            function show(id_order,user_buy,quantity,total,ds_product,phone){
                                                document.getElementById('id_order').innerHTML=id_order;
                                                document.getElementById('user_buy').innerHTML=user_buy + " số điện thoại " +phone;
                                                document.getElementById('quantity').innerHTML=quantity;
                                                document.getElementById('total').innerHTML=total +" VNĐ";
                                                document.getElementById('ds_product').innerHTML="<div style='border-bottom: 1px #ccc solid;max-height:30px'>Tên</div><div style='border-bottom: 1px #ccc solid;max-height:30px'>Số lượng</div><div style='border-bottom: 1px #ccc solid;max-height:30px'>tổng</div>"+ds_product;


                                                document.getElementById('popup').style.display='flex';



                                            }
                                            function hide(){
                                                document.getElementById('popup').style.display='none';
                                            }
                                        </script>
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
</div>
<?php }else{?>
<script>alert("Bạn không có quyền truy cập trang này");window.location.href="/"</script>;
<?php }?>