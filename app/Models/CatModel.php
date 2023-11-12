<?php

namespace App\Models;

namespace App\Models;

class CatModel extends \CodeIgniter\Model
{
    protected $table = 'category';
//    protected $allowedFields = ['name_cat'];
    protected $allowedFields = ['id','name_cat', 'wallet_id', 'id_cat'];

    protected $validationRules = [

    ];
}