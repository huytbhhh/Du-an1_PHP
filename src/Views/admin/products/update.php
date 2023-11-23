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
                                    <h5>Thêm mới </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="id_categories">Loại sản phẩm:</label>
                                        <input type="text" name="id_categories" class="form-control" value="<?= $product['category_id'] ?>">

                                        <label for="product_name">Name Product:</label>
                                        <input type="text" name="product_name" class="form-control" value="<?= $product['product_name'] ?>">

                                        <label for="product_price" class="mt-3">Price:</label>
                                        <input type="number" name="product_price" class="form-control" value="<?= $product['product_price'] ?>">

                                        <label for="product_price_sale" class="mt-3">Price:</label>
                                        <input type="number" name="product_price_sale" class="form-control" value="<?= $product['product_price_sale'] ?>">

                                        <label for="image" class="mt-3">Image:</label>
                                        <input type="file" name="image" class="form-control" value="<?= $product['image'] ?>">

                                        <label for="description" class="mt-3">Description:</label>
                                        <input type="text" name="description" class="form-control" value="<?= $product['description'] ?>">

                                        <label for="is_active" class="mt-3">Trạng thái:</label>
                                        <input type="text" name="is_active" class="form-control" value="<?= $product['is_active'] ?>">

                                        

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Sửa</button>
                                        <a href="/admin/products" class="btn btn-primary mt-3">Danh sách Product</a>
                                    </form>
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