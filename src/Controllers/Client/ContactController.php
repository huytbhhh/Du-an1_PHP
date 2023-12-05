<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Contact;


class ContactController extends Controller
{

    public function index()
    {
        $this->render('client/contact');
        if (isset($_POST["submit"])) {
            $data = [
                "id" => $_POST["id"],
                "email" => $_POST["email"],
                'name' => $_POST['name'],
                'subject' => $_POST['subject'],
            ];

            (new Contact())->insert($data);

            header('Location: /contact');
        }
    }
}
    // public function create()
    // {
    //     if (isset($_POST["btn-submit"])) {
    //         $data = [
    //             "email" => $_POST["email"],
    //             'name' => $_POST['name'],
    //             'subject' => $_POST['subject'],
    //         ];

    //         (new Contact())->insert($data);

    //         header('Location: /contact');
    //     }
    // }
