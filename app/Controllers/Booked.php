<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Booked extends BaseController
{
    public function index()
    {
        return view('booked');
    }
}
