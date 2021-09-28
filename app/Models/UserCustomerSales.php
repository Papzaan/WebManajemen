<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCustomerSales extends Model
{
    protected $table = "customer_sales";
    //protected $primaryKey = "nik_customer";
    protected $allowedFields = [ "no_telp_customer_sal", "nama_cussal","jenis_kelamin", "alamat", "id_sales"];
    protected $useTimestamps = false;

    
    public function getdataCustomer_Sal(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('customer_sales')
        ->join('sales','sales.id_sales=customer_sales.id_sales')
        ->where('sales.email',['email'=>$data])
        ->get()->getResultArray();  
    }  
}