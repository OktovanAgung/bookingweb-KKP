<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PelangganModel;

class Confirmation extends BaseController
{
    public function index()
    {
        return view('confirmation');
    }
}
