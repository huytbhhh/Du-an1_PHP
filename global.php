<?php

const DB_HOST = 'localhost';
const DB_DATABASE = 'duan1_nhom1';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
// Xóa mật khẩu 


if (!function_exists('check_auth')) {
    function check_auth() {
        if (empty($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}
?>