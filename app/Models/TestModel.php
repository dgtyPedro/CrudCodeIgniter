<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    protected $returnType = 'object';
}