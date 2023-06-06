<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Confirmation extends BaseController
{
    public function index()
    {
        return view('confirmation');
    }

    public function save()
    {
        $nama = $this->request->getPost('nama');
        $namaHewan = $this->request->getPost('nama_pet');
        $whatsapp = $this->request->getPost('no_whatsapp');
        $catatan = $this->request->getPost('notes');

        $pelangganModel = new \App\Models\PelangganModel();

        $data = [
            'nama' => $nama,
            'no_whatsapp' => $whatsapp,
            'nama_pet' => $namaHewan,
            'notes' => $catatan
        ];

        $pelangganModel->insert($data);

        if ($pelangganModel->affectedRows() > 0) {
            echo "Data berhasil disimpan ke dalam database.";
        } else {
            echo "Terjadi kesalahan dalam menyimpan data.";
        }
    }
}
