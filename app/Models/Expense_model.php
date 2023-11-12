<?php

namespace App\Models;

namespace App\Models;

class Expense_model extends \CodeIgniter\Model
{
    protected $table = 'expenses';
    protected $allowedFields = ['id','quantity', 'date', 'id_cat' ];

    protected $validationRules = [

    ];



}
