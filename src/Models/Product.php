<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Product extends Model {
    protected $table = 'products';
    protected $columns = [
        'id_categories',
        'product_name',
        'product_price',
        'description',
        'origin',
        'image',
    ];
}