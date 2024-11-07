<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions'; // Nama tabel transaksi
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'quantity', 'total_price'];
}
