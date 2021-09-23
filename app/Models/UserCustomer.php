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
    public function postdataCustomer(){
        
    }

    
}