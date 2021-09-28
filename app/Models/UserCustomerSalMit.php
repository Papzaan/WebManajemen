<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCustomerSalMit extends Model
{
    protected $table = "customer_salmit";
    //protected $primaryKey = "nik_customer";
    protected $allowedFields = [ "no_telp_customer_salmit", "nama_cussalmit","jenis_kelamin", "alamat", "idsalmit"];
    protected $useTimestamps = false;

    
    public function getdataCustomer_SalMit(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('customer_salmit')
        ->join('salesnya_mitra','salesnya_mitra.id_salmit=customer_salmit.id_salmit')
        ->select('customer_salmit.no_telp_customer_salmit, customer_salmit.nama_cussalmit')
        ->where('salesnya_mitra.email',['email' => $data])
        ->get()->getResultArray();  
    }    
}