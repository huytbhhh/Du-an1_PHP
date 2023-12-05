<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Contact;

class ContactsController extends Controller
{

    // public function __construct() {
    //     check_auth();
    // }

    /* Lấy danh sách */
    public function index()
    {
        $contacts = (new Contact())->all();

        $this->renderAdmin("contacts/index", ["contacts" => $contacts]);
    }

    /* Xóa */
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Contact())->delete($conditions);

        header('Location: /admin/contacts');
    }
}
