<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegiss extends Model
{
    protected $table = "sales";
    protected $primaryKey = "id_sales";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;
    
    public function editsales($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('sales')
            ->where('sales.email',['email'=> $id])
            ->get()->getResultArray();  
    }
    public function updatesales($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('sales')
            ->update($dataupdate, ['id_sales' => $id]);
    }
    public function deletesales($email){
        return $this->db->table('sales')
            ->delete(['email' => $email]);
    }
}