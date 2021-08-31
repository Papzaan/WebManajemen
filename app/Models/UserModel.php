<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "email";
    protected $allowedFields = ["password", "status"];
    protected $useTimestamps = false;

    
    public function getdataAdmin(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('user')
        ->join('admin','admin.email=user.email')
        ->where('admin.email',['admin'=> $data])
        ->get()->getResultArray();  
    }

    public function getdataMitra(){
      $session = session();
      $data = $session->get('email');
      //var_dump($data);
      return $this->db->table('user')
      ->join('mitra','mitra.email=user.email')
      ->where('mitra.email',['email'=> $data])
      ->get()->getResultArray();  
    }

    public function getdataSales(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
      ->join('sales','sales.email=user.email')
      ->where('sales.email',['email'=> $data])
      ->get()->getResultArray();  
    }

    public function tampilmitra(){
      return $this->db->table('user')
        ->join('mitra','mitra.email=user.email')
        ->where('status',['status' => 2])
        ->get()->getResultArray();  
    }
    public function tampilsales(){
      return $this->db->table('user')
        ->join('sales','sales.email=user.email')
        ->where('status',['status' => 3])
        ->get()->getResultArray();  
    }

    
}