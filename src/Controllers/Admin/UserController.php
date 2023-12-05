<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Role;

class UserController extends Controller
{

   
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $users = (new User)->all();
        
        $this->renderAdmin('users/index', ['users' => $users]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'password' => $_POST['password'],
                'is_admin' => $_POST['is_admin'],
            ];

            (new User)->insert($data);

            header('Location: /admin/users');
        }

        $this->renderAdmin('users/create');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'password' => $_POST['password'],
                'is_admin' => $_POST['is_admin'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new User)->update($data, $conditions);
        }

        $user = (new User)->findOne($_GET['id']);

        $this->renderAdmin('users/update', ['user' => $user]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }
}
