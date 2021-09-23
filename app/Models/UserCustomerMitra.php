<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCustomerMitra extends Model
{
    protected $table = "customer_mitra";
    //protected $primaryKey = "nik_customer";
    protected $allowedFields = [ "nik_customer_mit", "nama_cusmit","jenis_kelamin", "no_telp", "alamat", "foto_ktp", "foto_customer","id_mitra"];
    protected $useTimestamps = false;

    
    public function getdataCustomer_Mit(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('customer_mitra')
        ->join('mitra','mitra.id_mitra=customer_mitra.id_mitra')
        ->select('customer_mitra.nik_customer_mit, customer_mitra.nama_cusmit')
        ->where('mitra.email',['email' => $data])
        ->get()->getResultArray();  
    }
    public function postdataCustomer(){
        
    }

    
}