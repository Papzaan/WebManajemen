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
    public function editpesmit($id_pesmit){
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT utang , bayar FROM pesanan_mitra WHERE id_pesmit='$id_pesmit' " );
        $dataa = $data1->getRowArray();

        return $dataa;  
    }
    public function updatepesmit($dataupdate, $id_pesmit){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_mitra')
            ->update($dataupdate, ['id_pesmit' => $id_pesmit]);
    }
    public function getpesanansales(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_sales')
        ->join('kategori','kategori.nama_kategori=pesanan_sales.nama_kategori')
        ->join('sales','sales.id_sales=pesanan_sales.id_sales')
        ->get()->getResultArray();
    }
    public function editpessal($id_pessal){
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT utang , bayar FROM pesanan_sales WHERE id_pessal='$id_pessal' " );
        $dataa = $data1->getRowArray();

        return $dataa;  
    }
    public function updatepessal($dataupdate, $id_pessal){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_sales')
            ->update($dataupdate, ['id_pessal' => $id_pessal]);
    }    
}