<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Product</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Product</a> </li>
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
                                    <h5>Danh sách Product</h5>

                                    <a href="/admin/products/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá niêm yết</th>
                                                    <th>Giá khuyến mãi</th>
                                                    <th>Ảnh</th>
                                                    <th>Mô tả</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($products as $product) : ?>
                                                    <tr>
                                                        <td><?= $product['category_id'] ?></td>
                                                        <td><?= $product['product_name'] ?></td>
                                                        <td><?= $product['product_price'] ?></td>
                                                        <td><?= $product['product_price_sale'] ?></td>
                                                        <td><?= $product['description'] ?></td>
                                                        <td><?= $product['image'] ?></td>
                                                        <td><?= $product['is_active'] ?></td>
                                                        
                                                        <td>
                                                            <a href="/admin/products/update?id=<?= $product['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/products/delete?id=<?= $product['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
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
