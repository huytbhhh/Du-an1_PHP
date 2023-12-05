<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class CartController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $this->render('client/cart');
    }
}
