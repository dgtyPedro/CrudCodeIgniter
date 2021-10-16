<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'categoria', 'cor', 'caracteristica', 'createby'];
}