<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

require_once "../Du-an1_PHP/src/Model.php";

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $this->render('client/home');
    }
}
