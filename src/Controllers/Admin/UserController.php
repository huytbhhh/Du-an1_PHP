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
        $roles = (new Role)->all();

        $arrayRoleIdName = [];
        foreach ($roles as $role) {
            $arrayRoleIdName[$role['id']] = $role['name'];
        }
        
        $this->renderAdmin("users/index", 
            [
                "users" => $users, 
                "arrayRoleIdName" => $arrayRoleIdName
            ]
        );
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'role' => $_POST['role'],
                'password' => $_POST['password'],
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
                'role' => $_POST['role'],
                'password' => $_POST['password'],
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
