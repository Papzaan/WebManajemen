<?php

namespace App\Models;

use CodeIgniter\Model;

class StokModel extends Model
{
    protected $table = "kategori";
    //protected $primaryKey = "nama_kategori";
    protected $allowedFields = ["nama_kategori","harga_dusan", "stok"];
    protected $useTimestamps = false;
    

    public function getstok(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
        ->get()->getResultArray();
    }
    public function editstok($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->where('barang.id_barang',['id_barang'=> $id])
            ->get()->getResultArray();  
    }
    public function updatestok($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->update($dataupdate, ['id_barang' => $id]);
    }
    public function editstokju($kate){
        $session = session();
        $data = $session->get('email');
        /*return $this->db->table('kategori')
            ->select('stok')
            ->where('nama_kategori',['nama_kategori'=> $kate])
            ->get()->getResultArray();*/
        $data1 = $this->db->query("SELECT stok FROM kategori WHERE nama_kategori='$kate' " );
        $dataa = $data1->getRowArray();

        return $dataa['stok'];
    }
    public function updatejumstok($dataupdate, $kat){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->update($dataupdate, ['nama_kategori' => $kat]);
    }
    public function deletestok($id){
        return $this->db->table('kategori')
            ->delete(['id_barang' => $id]);
    } 
    
}