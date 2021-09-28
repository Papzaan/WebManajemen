<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCustomer extends Model
{
    protected $table = "customer";
    //protected $primaryKey = "nik_customer";
    protected $allowedFields = [ "no_telp_customer", "nama","jenis_kelamin", "alamat"];
    protected $useTimestamps = false;

    
    public function getdataCustomer(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('customer')
        ->get()->getResultArray();  
    } 
}