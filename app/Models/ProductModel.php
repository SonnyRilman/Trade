<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products'; // Nama tabel produk
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'price', 'stock'];
}
