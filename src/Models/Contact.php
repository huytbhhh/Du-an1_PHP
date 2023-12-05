<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $columns = [
        'id',
        'name',
        'email',
        'subject',
    ];
}
