<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class ProductController extends Controller
{

    /* Lấy danh sách */
    public function index()
    {
        $products = (new Product())->all();

        $this->renderAdmin("products/index", ["products" => $products]);
    }

    /* Thêm mới */
    public function create()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'description' => $_POST['description'],
                'origin' => $_POST['origin'],
                'image' => $_FILES['image'],
            ];

            (new Product())->insert($data);

            header('Location: /admin/products');
        }

        $this->renderAdmin("products/create");
    }

    /* Cập nhật */
    public function update()
    {

        if (isset($_POST["btn-submit"])) {
            $data = [
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'description' => $_POST['description'],
                'origin' => $_POST['origin'],
                'image' => $_FILES['image'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Product())->update($data, $conditions);
        }

        $product = (new Product())->findOne($_GET["id"]);

        $this->renderAdmin("products/update", ["product" => $product]);
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Product())->delete($conditions);

        header('Location: /admin/products');
    }
}
