<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PelangganModel;

class ConfirmationCtrl extends BaseController
{
    public function index()
    {
        return view('confirmation');
    }

    public function store()
    {
        // Validasi form
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'nama_pet' => 'required',
            'whatsapp' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        // Ambil data dari form
        $nama = $this->request->getPost('nama');
        $namaPet = $this->request->getPost('nama_pet');
        $whatsapp = $this->request->getPost('whatsapp');
        $catatan = $this->request->getPost('catatan');
        $layanan = $this->request->getPost('layanan');
        $tanggal = $this->request->getPost('tanggal');
        $waktu = $this->request->getPost('waktu');

        // Simpan data ke dalam database
        $pelangganModel = new PelangganModel();
        $data = [
            'nama' => $nama,
            'no_whatsapp' => $whatsapp,
            'nama_pet' => $namaPet,
            'notes' => $catatan,
            'layanan' => $layanan,
            'tanggal' => $tanggal,
            'waktu' => $waktu
        ];
        $pelangganModel->insert($data);

        // Redirect ke halaman booked dengan flash data
        return redirect()->to('/booked')->with('layanan', $layanan)->with('tanggal', $tanggal)->with('waktu', $waktu);
    }
}
