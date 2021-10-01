<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ["nama_sup", "nama_kategori","tgl_masuk","jumlah","harga", "aksi"];
    protected $useTimestamps = false;
    

    public function getbarang(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
        ->get()->getResultArray();
    }
    public function editbarang($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
            ->where('barang.id_barang',['id_barang'=> $id])
            ->get()->getResultArray();  
    }
    public function updatebarang($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('barang')
            ->update($dataupdate, ['id_barang' => $id]);
    }
    public function deletebarang($id){
        return $this->db->table('barang')
            ->delete(['id_barang' => $id]);
    } 
    
}