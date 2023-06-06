<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use CodeIgniter\Controller;

class Confirmation extends BaseController
{
    public function index()
    {
        return view('confirmation');
    }

    public function insert_data()
    {
        // Mengambil data dari form
        $nama = $this->request->getPost('nama');
        $nama_pet = $this->request->getPost('nama_pet');
        $no_whatsapp = $this->request->getPost('whatsapp');
        $notes = $this->request->getPost('catatan');
        // Anda dapat menambahkan data lain yang diperlukan dari form

        // Membuat instance model
        $model = new PelangganModel();

        // Menyimpan data ke database
        $data = [
            'nama' => $nama,
            'nama_pet' => $nama_pet,
            'no_whatsapp' => $no_whatsapp,
            'notes' => $notes,
            // Tambahkan data lain yang diperlukan
        ];
        $model->insert($data);

        // Redirect ke halaman konfirmasi
        return redirect()->to('booked');
    }
}
