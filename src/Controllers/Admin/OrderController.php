<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;
use Ductong\BaseMvc\Models\Order;


class OrderController extends Controller {

//     public function __construct() {
//         check_auth();
//     }

    /* Lấy danh sách */
    public function index() {
  
     //    $order=(new Order())->all();

     //    $arrayCategoryIdName = [];
     //    foreach ($categories as $category) {
     //        $arrayCategoryIdName[$category['id']] = $category['name'];
     //    }
        session_start();
        $this->renderAdmin("orders/index");

     //    $this->renderAdmin("orders/index", 
     //        [
     //            "products" => $products, 
     //            "arrayCategoryIdName" => $arrayCategoryIdName
     //        ]
     //    );
    }

  
    /* Cập nhật */
  
}