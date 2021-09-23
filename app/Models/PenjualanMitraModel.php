<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanMitraModel extends Model
{
    protected $table = "penjualan_mitra";
    protected $primaryKey = "id_penjumit";
    protected $allowedFields = ["id_mitra", "nik_customer_mit","id_stokbarmit","jumlah", "tgl_jual","harga","alamat_trank", "status"];
    protected $useTimestamps = false;
    
}