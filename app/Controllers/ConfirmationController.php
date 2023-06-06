<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class ConfirmationController extends BaseController
{
    public function confirm()
    {
        // Ambil data dari input field
        $nama = $this->request->getPost('nama');
        $nama_pet = $this->request->getPost('nama_pet');
        $whatsapp = $this->request->getPost('whatsapp');
        $notes = $this->request->getPost('catatan');

        // Masukkan data ke dalam database
        $pelangganModel = new PelangganModel();
        $data = [
            'nama' => $nama,
            'no_whatsapp' => $whatsapp,
            'nama_pet' => $nama_pet,
            'notes' => $notes
        ];
        $pelangganModel->insert($data);

        // Redirect ke halaman booked
        return redirect()->to('booked');
    }
}
