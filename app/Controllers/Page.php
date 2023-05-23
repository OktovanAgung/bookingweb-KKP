<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function booking()
    {
        return view('booking');
    }

    public function confirmation()
    {
        return view('confirmation');
    }
}
