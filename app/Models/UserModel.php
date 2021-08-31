<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id_admin";
    protected $allowedFields = ["email", "password", "status"];
    protected $useTimestamps = false;

    
    public function getdataAdmin(){
        return $this->db->table('user')
        ->join('admin','admin.id_user=user.id_user')
        ->get()->getResultArray();  
    }

    public function getdataMitra(){
      return $this->db->table('user')
      ->join('mitra','mitra.id_user=user.id_user')
      ->get()->getResultArray();  
    }

    public function getdataSales(){
      return $this->db->table('user')
      ->join('sales','sales.id_user=user.id_user')
      ->get()->getResultArray();  
    }

    public function tampilmitra(){
      return $this->db->table('user')
        ->join('mitra','mitra.id_user=user.id_user')
        ->where('status',['status' => 2])
        ->get()->getResultArray();  
    }
}