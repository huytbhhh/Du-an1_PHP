<?php

namespace Ductong\BaseMvc\Controllers\Auth;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm() {
        $this->render('auth/register');
    }

    public function handleRegistration() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];

        // Kiểm tra xem dữ liệu đầu vào có hợp lệ không
        if (empty($username) || empty($email) || empty($password) || empty($address) || empty($phone_number)) {
            // Xử lý khi dữ liệu không hợp lệ, có thể thông báo lỗi cho người dùng
            // Ví dụ: header('Location: /register?error=1');
            exit();
        }

        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $existingUser = (new User)->getUserByEmail($email);
        if ($existingUser) {
            // Xử lý khi email đã tồn tại, có thể thông báo lỗi cho người dùng
            // Ví dụ: header('Location: /register?error=email_exists');
            exit();
        }

        // Tạo một đối tượng User mới và thiết lập thông tin cho người dùng
        $newUser = new User();
        $newUser->setUsername($username);
        $newUser->setEmail($email);
        $newUser->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $newUser->setAddress($address);
        $newUser->setPhoneNumber($phone_number);
        $newUser->setIsAdmin(false); // Mặc định không phải admin

        // Lưu thông tin người dùng vào cơ sở dữ liệu
        $result = $newUser->save();

        if ($result) {
            // Đăng ký thành công, có thể chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
            // Ví dụ: header('Location: /login?registered=1');
            exit();
        } else {
            // Xử lý khi có lỗi xảy ra trong quá trình đăng ký
            // Ví dụ: header('Location: /register?error=register_failed');
            exit();
        }
    }
}
