<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;


class Client_OrderController extends Controller
{

    public function index()
    {
        $products = (new Product())->all();
        $this->render('client/orders', ['products' => $products]);
    }

    // public function index() {
    //     $getLatestLimit10 = (new Product)->getLatestLimit10();
    //     $getAllByCategoryID = (new Product)->getAllByCategoryID($_GET['category_id'] ?? 1);

    //     $this->render('client/home');
    // }
}
