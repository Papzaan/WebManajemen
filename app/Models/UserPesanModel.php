<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPesanModel extends Model
{
    
    protected $table = "pesanan_mitra";
    protected $primaryKey = "id_pesmit";
    protected $allowedFields = ["id_mitra","nama_kategori","tgl_pesan","jumlah","harga","utang", "bayar", "met_bayar"];
    protected $useTimestamps = false;

    public function getpesananmitra(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_mitra')
        ->join('kategori','kategori.nama_kategori=pesanan_mitra.nama_kategori')
        ->join('mitra','mitra.id_mitra=pesanan_mitra.id_mitra')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
}