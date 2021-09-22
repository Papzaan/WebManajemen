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
    
}