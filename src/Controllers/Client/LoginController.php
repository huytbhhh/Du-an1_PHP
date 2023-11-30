<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class LoginController extends Controller
{
    
    public function index() {
        $this->render('client/login');
    }
}
