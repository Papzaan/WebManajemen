<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanSalesMitraModel extends Model
{
    protected $table = "penjualan_salmit";
    protected $primaryKey = "id_penjualan";
    protected $allowedFields = ["id_salmit", "nik_customer_salmit","id_stokbarmit","jumlah", "tgl_jual","harga","alamat_trank", "status"];
    protected $useTimestamps = false;
    
    public function getpenjualansalmit(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_salmit')
        ->join('stok_barang_mitra','stok_barang_mitra.id_stokbarmit=penjualan_salmit.id_stokbarmit')
        ->join('salesnya_mitra','salesnya_mitra.id_salmit=penjualan_salmit.id_salmit')
        ->join('mitra','mitra.id_mitra=salesnya_mitra.id_mitra')
        ->join('customer_salmit','customer_salmit.nik_customer_salmit=penjualan_salmit.nik_customer_salmit')
        ->select('penjualan_salmit.jumlah, penjualan_salmit.tgl_jual, penjualan_salmit.harga, penjualan_salmit.alamat_trank, salesnya_mitra.nama_salmit, stok_barang_mitra.nama_kategori, customer_salmit.nama_cussalmit')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
}