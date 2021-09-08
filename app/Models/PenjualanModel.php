<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = "catatan_admin";
    protected $primaryKey = "id_catatan";
    protected $allowedFields = ["id_admin", "id_customer","nama_kategori","tgl_jual","jumlah","harga","alamat_trank"];
    protected $useTimestamps = false;

    public function getpenjualan(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('catatan_admin')
        ->get()->getResultArray();
    }
    public function editpenjualan($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
            ->where('barang.id_barang',['id_barang'=> $id])
            ->get()->getResultArray();  
    }
    public function updatepenjualan($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
            ->update($dataupdate, ['id_barang' => $id]);
    }
    public function deletepenjualan($id){
        return $this->db->table('barang')
            ->delete(['id_barang' => $id]);
    } 
    
}