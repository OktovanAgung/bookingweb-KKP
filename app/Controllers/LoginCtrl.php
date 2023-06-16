<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginCtrl extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Lakukan validasi login
        if ($username == 'admin' && $password == 'password') {
            // Simpan status login ke session
            $session = session();
            $session->set('isLoggedIn', true);

            // Redirect ke halaman admin
            return redirect()->to('admin');
        } else {
            // Tampilkan pesan kesalahan
            echo "Username or password is incorrect.";
        }
    }
}
