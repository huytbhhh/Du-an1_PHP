<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\ProductController;
use Ductong\BaseMvc\Controllers\Admin\OrderController;
use Ductong\BaseMvc\Controllers\Admin\ContactsController;


use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\CartController;
use Ductong\BaseMvc\Controllers\Client\Client_OrderController;

use Ductong\BaseMvc\Controllers\Client\AboutController;
use Ductong\BaseMvc\Controllers\Client\ContactController;

use Ductong\BaseMvc\Controllers\Auth\LoginController;
use Ductong\BaseMvc\Controllers\Auth\LogoutController;
use Ductong\BaseMvc\Controllers\Client\SingleProductController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cart', CartController::class, 'index');
$router->addRoute('/Order_History', Client_OrderController::class, 'index');

$router->addRoute('/single-product', SingleProductController::class, 'index');
$router->addRoute('/about', AboutController::class, 'index');
$router->addRoute('/contact', ContactController::class, 'index');



$router->addRoute('/login', LoginController::class, 'showForm');
$router->addRoute('/handleLogin', LoginController::class, 'handleLogin');
$router->addRoute('/logout', LogoutController::class, 'logout');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');

$router->addRoute('/admin/contacts', ContactsController::class, 'index');
$router->addRoute('/admin/contacts/delete', ContactsController::class, 'delete');


$router->addRoute('/admin/orders', OrderController::class, 'index');
