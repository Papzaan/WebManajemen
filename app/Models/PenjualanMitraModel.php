<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanMitraModel extends Model
{
    protected $table = "penjualan_mitra";
    protected $primaryKey = "id_penjumit";
    protected $allowedFields = ["id_mitra", "no_telp_customer_mit","id_stokbarmit","jumlah", "tgl_jual","harga","alamat_trank", "status"];
    protected $useTimestamps = false;
    
    public function getpenjualanmitra(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_mitra')
        ->join('stok_barang_mitra','stok_barang_mitra.id_stokbarmit=penjualan_mitra.id_stokbarmit')
        ->join('mitra','mitra.id_mitra=penjualan_mitra.id_mitra')
        ->join('customer_mitra','customer_mitra.no_telp_customer_mit=penjualan_mitra.no_telp_customer_mit')
        ->select('penjualan_mitra.jumlah, penjualan_mitra.tgl_jual, penjualan_mitra.harga, penjualan_mitra.alamat_trank, mitra.nama, stok_barang_mitra.nama_kategori, customer_mitra.nama_cusmit, customer_mitra.no_telp_customer_mit')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
}