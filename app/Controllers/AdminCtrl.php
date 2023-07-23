<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class AdminCtrl extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $data['pelanggan'] = $pelangganModel->findAll();

        return view('admin', $data);
    }
}
