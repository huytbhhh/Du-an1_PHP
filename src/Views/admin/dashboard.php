<?php
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($conn, "utf8");



if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1) {
    $Orders=mysqli_fetch_array(mysqli_query($conn,"SELECT sum(total_amount) as sum ,count(*) as count FROM orders "));
    $total_Orders=$Orders['sum'];
    $count_Orders=$Orders['count'];
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Dashboard</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
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

                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Số đơn hàng</h6>
                                            <h3 class="f-w-700 text-c-blue"><?=$count_Orders?></h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Doanh thu ước tính</h6>
                                            <h3 class="f-w-700 text-c-green"><?=$total_Orders?> VNĐ</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye bg-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impact</h6>
                                            <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <!-- <th>Img</th> -->
                                                    <th>USER</th>
                                                    <th>LOG</th>
                                                    <th>TIME</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT * FROM log ORDER by id desc");

                                                ?>
                                                <?php while($value=mysqli_fetch_assoc($query)){

                                                    ?>
                                                    
                                                    <tr>
                                                        <td><?= $value['id'] ?></td>
                                                        <td><?= $value['user'] ?></td>
                                                        <td><?= $value['msg'] ?></td>
                                                        <td><?= $value['time'] ?></td>
                                                       

                                                       
                                                    </tr>
                                                   
                                                <?php } ?>
                                            </tbody>

                                        </table>
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