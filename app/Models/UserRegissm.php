<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegissm extends Model
{
    protected $table = "salesnya_mitra";
    protected $primaryKey = "id_salmit";
    protected $allowedFields = ["id_mitra","nama_salmit", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;
    
    public function deletesalesmitra($email){
        return $this->db->table('salesnya_mitra')
            ->delete(['email' => $email]);
    }
}