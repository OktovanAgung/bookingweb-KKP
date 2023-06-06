<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nama_pet', 'no_whatsapp', 'notes', 'layanan', 'tanggal', 'waktu'];
}