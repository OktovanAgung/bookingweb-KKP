<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama', 'no_whatsapp', 'nama_pet', 'notes', 'layanan', 'tanggal', 'waktu', 'selesai'];

    // Tambahkan method untuk mendapatkan data berdasarkan status selesai
    public function getPelangganByStatus($status = null)
    {
        if ($status !== null) {
            return $this->where('selesai', $status)->findAll();
        } else {
            return $this->findAll();
        }
    }
}
