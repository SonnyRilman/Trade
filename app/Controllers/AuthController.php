<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        // Tampilkan halaman login (view)
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new \App\Models\UserModel();

        // Ambil data dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $model->where('username', $username)->first();

        if ($user && MD5($password) === $user['password']) {  // Membandingkan MD5 password
            // Jika login berhasil, set session dan redirect ke dashboard
            $session->set('user_id', $user['user_id']);
            $session->set('username', $user['username']);
            $session->set('role', $user['role']);
            return redirect()->to('/dashboard');
        } else {
            // Jika gagal login, set flashdata dan kembali ke halaman login
            $session->setFlashdata('error', 'Invalid username or password');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        // Logout dan hapus session
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
