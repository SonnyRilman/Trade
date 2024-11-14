<?php
namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table = 'status';  // Nama tabel untuk status
    protected $primaryKey = 'status_id';  // Primary key tabel status
    protected $allowedFields = ['status_name'];  // Kolom yang dapat diubah
    protected $useTimestamps = true;  // Bisa aktifkan jika ada timestamp untuk status
}
