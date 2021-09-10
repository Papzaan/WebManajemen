<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = "catatan_admin";
    protected $primaryKey = "id_catatan";
    protected $allowedFields = ["id_admin", "nik_customer","nama_kategori","tgl_jual","jumlah","harga","alamat_trank","status"];
    protected $useTimestamps = false;

    public function getpenjualan(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('catatan_admin')
        ->join('kategori','kategori.nama_kategori=catatan_admin.nama_kategori')
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
    
}