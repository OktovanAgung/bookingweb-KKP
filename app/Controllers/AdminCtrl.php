<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminCtrl extends Controller
{
    public function index()
    {
        return view('admin');
    }
}
