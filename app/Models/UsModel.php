<?php

namespace App\Models;

class UsModel extends \CodeIgniter\Model
{
 protected $table = 'user';
 protected $allowedFields = ['name', 'surname', 'email', 'password'];

 protected $validationRules = [

 ];
}