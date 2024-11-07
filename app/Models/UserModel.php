<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password']; // Kolom yang diizinkan untuk dimasukkan ke database

    // Method untuk mengambil user berdasarkan email
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
