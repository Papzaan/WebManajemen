<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegiss extends Model
{
    protected $table = "sales";
    protected $primaryKey = "id_sales";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;
    
    public function deletesales($email){
        return $this->db->table('sales')
            ->delete(['email' => $email]);
    }
}