<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Confirmation extends BaseController
{
    public function index()
    {
        return view('confirmation');
    }
}
