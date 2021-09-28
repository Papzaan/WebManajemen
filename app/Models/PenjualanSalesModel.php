<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanSalesModel extends Model
{
    protected $table = "penjualan_salmit";
    protected $primaryKey = "id_penjualan";
    protected $allowedFields = ["id_salmit", "no_telp_customer_salmit","id_stokbarmit","jumlah", "tgl_jual","harga","alamat_trank", "status"];
    protected $useTimestamps = false;
    
    public function getpenjualansales(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_sales')
        ->join('sales','sales.id_sales=penjualan_sales.id_sales')
        ->join('customer_sales','customer_sales.no_telp_customer_sal=penjualan_sales.no_telp_customer_sal')
        ->select('penjualan_sales.jumlah, penjualan_sales.tgl_jual, penjualan_sales.harga, penjualan_sales.alamat_trank, sales.nama, penjualan_sales.nama_kategori, customer_sales.nama_cussal, customer_sales.no_telp_customer_sal')
        ->where('sales.email',['email' => $data])
        ->get()->getResultArray();
    }
}