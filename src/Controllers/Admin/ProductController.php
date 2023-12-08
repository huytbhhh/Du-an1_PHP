<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($conn, "utf8");

class ProductController extends Controller {

    // public function __construct() {
    //     check_auth();
    // }

    /* Lấy danh sách */
    public function index() {
        session_start();

        $products = (new Product())->all();
        $categories = (new Category())->all();

        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name_category'];
        }

        $this->renderAdmin("products/index", 
            [
                "products" => $products, 
                "arrayCategoryIdName" => $arrayCategoryIdName
            ]
        );
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id_categories' => $_POST['category_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_price_sale' => $_POST['product_price_sale'] ?: 0,
                'description' => $_POST['description'],
              
            ];

            $data['image'] = null;
            $img = $_FILES['image'] ?? null;
            if ($img) {

                // Đường dẫn lưu DB vì thư mục upload cùng cấp với index.php
                // Khi lưu vào DB, chú ý là trước uploads có dấu /
                $pathSaveDB = '/uploads/' . $img['name'];

                // Đường dẫn upload có thêm __DIR__ . '/../../../'
                // vì File ProductController của mình đang cách thư mục uploads 3 cấp
                // Nên sẽ thấy có 3 lần ../
                // __DIR__ là 2 const mặc định của PHP để lấy ra đường dẫn thư mục hiện tại của ProductController 
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['image'] = $pathSaveDB;
                } 
            }
            $price_sale= $_POST['product_price_sale'] ?: 0;
            // (new Product())->insert($data);
                $id_categories = $_POST['category_id'];
                $product_price = $_POST['product_price'];
                $des=$_POST['description'];
            $product_name = $_POST['product_name'];
            // echo 1111111111;
            $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($conn, "utf8");
            @mysqli_query($conn,"INSERT into products(id_categories,product_name,product_price,product_price_sale,description,image,image2,image3,origin,view)values('$id_categories','$product_name','$product_price','$price_sale', '$des','1','1','1','12345','1') ");
            // @mysqli_query($conn,"UPDATE products SET id =23 where id = 21");


            // header('Location: /admin/products');
        }

        $categories = (new Category())->all();

        $this->renderAdmin("products/create", ["categories" => $categories]);
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'id_categories' => $_POST['category_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_price_sale' => $_POST['product_price_sale'] ?: 0,
                'description' => $_POST['description'],
                'is_active' => $_POST['is_active'],
                'image' => $_POST['img_current']

            ];

            $img = $_FILES['image'] ?? null;
            $flag = false;
            if ($img) {

                $pathSaveDB = '/uploads/' . $img['name'];
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) { 
                    $data['image'] = $pathSaveDB;
                    $flag = true;
                } 
            }

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            // (new Product())->update($data, $conditions);
            $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($conn, "utf8");
            @mysqli_query($conn,"UPDATE products SET image='{$_POST['img_current']}'   , description ='{$_POST['description']}',  id_categories = '{$_POST['category_id']}',product_name = '{$_POST['product_name']}', product_price ='{$_POST['product_price']}' WHERE id='{$_GET['id']}'");

            // @mysqli_query($conn,"UPDATE products SET image='{$_POST['img_current']}' , is_active ='{$_POST['is_active']}'  , description ='{$_POST['description']}',  id_categories = '{$_POST['category_id']}',product_name = '{$_POST['product_name']}', product_price ='{$_POST['product_price']}' WHERE id='{$_GET['id']}'");
            
            if ($flag) {

                // Xóa file dùng hàm unlink 
                // Path file cũng phải giống như $pathUpload
                $pathFile = __DIR__ .'/../../..'. $_POST['img_current'];
                // unlink($pathFile);
            }
        }

        $categories = (new Category())->all();
        $product = (new Product())->findOne($_GET["id"]);

        $this->renderAdmin("products/update", ["product" => $product, 'categories' => $categories]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Product())->delete($conditions);

        $pathFile = __DIR__ .'/../../..'. $_POST['image'];
        unlink($pathFile);

        header('Location: /admin/products');
    }
}