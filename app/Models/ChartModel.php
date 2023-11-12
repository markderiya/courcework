<?php

namespace App\Models;

class ChartModel extends \CodeIgniter\Model
{
    protected $table = '#';
    protected $allowedFields = ['name', 'surname', 'email', 'password'];




    protected $validationRules = [
    ];
}