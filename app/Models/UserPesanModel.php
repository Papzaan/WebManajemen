<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPesanModel extends Model
{
    

    public function getpesanansales(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('pesanan_sales')
        ->join('kategori','kategori.nama_kategori=pesanan_sales.nama_kategori')
        ->join('sales','sales.id_sales=pesanan_sales.id_sales')
        ->where('sales.email',['email'=> $data])
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