<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Booking extends BaseController
{
    public function index()
    {
        return view('booking');
    }
}
