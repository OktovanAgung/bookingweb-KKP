<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class BookedCtrl extends BaseController
{
    public function index()
    {
        return view('booked');
    }
}
