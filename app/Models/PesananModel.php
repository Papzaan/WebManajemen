<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    //protected $table = "catatan_admin";
    //protected $primaryKey = "id_catatan";
    //protected $allowedFields = ["id_admin", "nik_customer","nama_kategori","tgl_jual","jumlah","harga","alamat_trank", "status"];
    //protected $useTimestamps = false;

    public function getpesananmitra(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_mitra')
        ->join('kategori','kategori.nama_kategori=pesanan_mitra.nama_kategori')
        ->join('mitra','mitra.id_mitra=pesanan_mitra.id_mitra')
        ->get()->getResultArray();
    }
    public function getpesanansales(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_sales')
        ->join('kategori','kategori.nama_kategori=pesanan_sales.nama_kategori')
        ->join('sales','sales.id_sales=pesanan_sales.id_sales')
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
    
}