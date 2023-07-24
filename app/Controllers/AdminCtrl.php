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

    public function updateStatus()
    {
        $request = $this->request;
        $id = $request->getPost('id');

        $pelangganModel = new PelangganModel();

        // Lakukan query update pada database untuk menyimpan status selesai pada baris dengan ID tertentu
        $pelangganModel->where('id', $id)->set(['selesai' => 1])->update();

        // Jangan lupa menambahkan pesan atau respons jika diperlukan
        // Misalnya: return redirect()->to('/admin')->with('status', 'Baris berhasil diselesaikan.');
    }
}
