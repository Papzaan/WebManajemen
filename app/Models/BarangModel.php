<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ["nama_sup", "nama_bar","tgl_masuk","alamat","jenis_kelamin","harga"];
    protected $useTimestamps = false;

    public function getbarang(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
        ->get()->getResultArray();
    }
}