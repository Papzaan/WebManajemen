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
        ->select('kategori.harga_dusan, kategori.harga_mitra, kategori.harga_sales, kategori.harga_outlet, stok_barang_mitra.stok_mitra, stok_barang_mitra.nama_kategori')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
    
    public function getjum_stok()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->select('SUM(stok_mitra)')
        ->where('mitra.email',['email'=> $data])
        ->get()->getRowArray();
    } 
    public function getjumlahkategori()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->select('COUNT(nama_kategori)')
        ->where('mitra.email',['email'=> $data])
        ->get()->getRowArray();
    }
    public function editstokju($kate, $id)
    {   
        $session = session();
        $data = $session->get('email');
        $session = session();
        return $this->db->table('stok_barang_mitra')
        ->select('stok_mitra, id_stokbarmit')
        ->where('nama_kategori',['nama_kategori'=> $kate])
        ->where('id_mitra',['email'=> $id])
        ->get()->getRowArray();
    }
    public function updatejumstok($dataupdate, $kat)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
            ->update($dataupdate, ['id_stokbarmit' => $kat]);
    }
    
}