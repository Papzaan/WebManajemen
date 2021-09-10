<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCustomer extends Model
{
    protected $table = "customer";
    //protected $primaryKey = "nik_customer";
    protected $allowedFields = [ "nik_customer", "nama","jenis_kelamin", "no_telp", "alamat", "foto_ktp", "foto_customer"];
    protected $useTimestamps = false;

    
    public function getdataCustomer(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('customer')
        ->get()->getResultArray();  
    }
    public function getnikCustomer($nama){
      $session = session();
      $data = $session->get('email');
      /*return $this->db->table('kategori')
          ->select('stok')
          ->where('nama_kategori',['nama_kategori'=> $kate])
          ->get()->getResultArray();*/
      $data1 = $this->db->query("SELECT nik_customer FROM customer WHERE nama='$nama' " );
      $dataa = $data1->getRowArray();

      return $dataa['nik_customer'];
    }
    public function postdataCustomer(){
        
    }

    
}