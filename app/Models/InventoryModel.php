<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = 'inventory';  // Nama tabel yang menyimpan data inventaris
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'artist', 'stock', 'price', 'status']; // Kolom yang diperbolehkan
}
