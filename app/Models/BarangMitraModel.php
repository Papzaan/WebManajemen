<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMitraModel extends Model
{
    protected $table = "stok_barang_mitra";
    protected $primaryKey = "id_stokbarmit";
    protected $allowedFields = ["id_mitra","nama_kategori","stok"];
    protected $useTimestamps = false;
    

    public function getstok(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->join('kategori','kategori.nama_kategori=stok_barang_mitra.nama_kategori')
        ->select('kategori.harga_dusan, kategori.harga_mitra, kategori.harga_sales, kategori.harga_outlet, stok_barang_mitra.stok, stok_barang_mitra.nama_kategori')
        ->where('mitra.email',['email'=> $data])
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