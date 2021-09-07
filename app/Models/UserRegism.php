<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegism extends Model
{
    protected $table = "mitra";
    protected $primaryKey = "id_mitra";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;

    public function deletemitra($email){
        return $this->db->table('mitra')
            ->delete(['email' => $email]);
    } 
}