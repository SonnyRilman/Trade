<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth/login'); // Menampilkan form login
    }

    public function login()
    {
        $userModel = new UserModel();

        // Ambil data dari request POST
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cari pengguna berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Simpan data login ke session
            session()->set(['isLoggedIn' => true, 'username' => $username]);
            return redirect()->to('/admin'); // Arahkan ke halaman dashboard admin
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
}

