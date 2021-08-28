<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ["email", "password", "status"];
    protected $useTimestamps = false;
    
    public function getdataAdmin(){
        return $this->db->table('user')
        ->join('admin','admin.id_user=user.id_user')
        ->get()->getResultArray();  
    }

    public function tambahmitra($data,$table){
		$this->db->insert($table,$data);
    }
}