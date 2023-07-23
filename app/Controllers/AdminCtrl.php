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

    public function updateStatusSelesai()
    {
        // Cek apakah permintaan dari AJAX
        if ($this->request->isAJAX()) {
            // Ambil data ID pemesanan dari permintaan AJAX
            $orderId = $this->request->getPost('order_id');
            $status = $this->request->getPost('status');

            // Lakukan validasi data jika diperlukan
            // ...

            // Lakukan pembaruan status "selesai" di dalam database
            $pelangganModel = new PelangganModel();
            $pelangganModel->update($orderId, ['status_selesai' => $status]); // Ubah status "selesai" sesuai dengan data yang diterima

            // Kirim respons kembali ke halaman admin sebagai JSON
            return $this->response->setJSON(['success' => true]);
        } else {
            // Jika bukan permintaan AJAX, kirimkan respons kosong atau sesuaikan dengan kebutuhan Anda
            return $this->response->setJSON(['success' => false]);
        }
    }
}
