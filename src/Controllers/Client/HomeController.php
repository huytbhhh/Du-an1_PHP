<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;


class HomeController extends Controller
{
    
    public function index() {
        $products = (new Product())->all();
        $this->render('client/home', ['products' => $products]);
    }
}
