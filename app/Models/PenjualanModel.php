<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = "catatan_admin";
    protected $primaryKey = "id_catatan";
    protected $allowedFields = ["id_admin", "nik_customer","nama_kategori","tgl_jual","jumlah","harga","alamat_trank", "status"];
    protected $useTimestamps = false;

    public function getpenjualan(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('catatan_admin')
        ->join('admin','admin.id_admin=catatan_admin.id_admin')
        ->join('customer','customer.nik_customer=catatan_admin.nik_customer')
        ->get()->getResultArray();
    }
    public function editpenjualan($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('catatan_admin')
            ->where('barang.id_barang',['id_barang'=> $id])
            ->get()->getResultArray();  
    }
    public function updatepenjualan($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('catatan_admin')
            ->update($dataupdate, ['id_barang' => $id]);
    }
    public function deletepenjualan($id){
        return $this->db->table('catatan_admin')
            ->delete(['id_barang' => $id]);
    } 
    public function getpenjualanmitra(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_mitra')
        ->join('stok_barang_mitra','stok_barang_mitra.id_stokbarmit=penjualan_mitra.id_stokbarmit')
        ->join('mitra','mitra.id_mitra=penjualan_mitra.id_mitra')
        ->join('customer_mitra','customer_mitra.nik_customer_mit=penjualan_mitra.nik_customer_mit')
        ->select('penjualan_mitra.jumlah, penjualan_mitra.tgl_jual, penjualan_mitra.harga, penjualan_mitra.alamat_trank, mitra.nama, stok_barang_mitra.nama_kategori, customer_mitra.nama_cusmit')
        ->get()->getResultArray();
    }
    public function getpenjualansales(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_sales')
        ->join('sales','sales.id_sales=penjualan_sales.id_sales')
        ->join('customer_sales','customer_sales.nik_customer_sal=penjualan_sales.nik_customer_sal')
        ->select('penjualan_sales.jumlah, penjualan_sales.tgl_jual, penjualan_sales.harga, penjualan_sales.alamat_trank, sales.nama, penjualan_sales.nama_kategori, customer_sales.nama_cussal')
        ->get()->getResultArray();
    }
    public function getpenjualansalmit(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_salmit')
        ->join('stok_barang_mitra','stok_barang_mitra.id_stokbarmit=penjualan_salmit.id_stokbarmit')
        ->join('salesnya_mitra','salesnya_mitra.id_salmit=penjualan_salmit.id_salmit')
        ->join('mitra','mitra.id_mitra=salesnya_mitra.id_mitra')
        ->join('customer_salmit','customer_salmit.nik_customer_salmit=penjualan_salmit.nik_customer_salmit')
        ->select('mitra.nama, penjualan_salmit.jumlah, penjualan_salmit.tgl_jual, penjualan_salmit.harga, penjualan_salmit.alamat_trank, salesnya_mitra.nama_salmit, stok_barang_mitra.nama_kategori, customer_salmit.nama_cussalmit')
        ->get()->getResultArray();
    }
    
}