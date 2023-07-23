<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama', 'no_whatsapp', 'nama_pet', 'notes', 'layanan', 'tanggal', 'waktu'];

    public function updateStatusSelesai($orderId, $status)
    {
        $data = ['status_selesai' => $status];
        $this->where('id', $orderId)->update($data);
    }
}
