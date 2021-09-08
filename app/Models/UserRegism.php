<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegism extends Model
{
    protected $table = "mitra";
    protected $primaryKey = "id_mitra";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;

    public function editmitra($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('mitra')
            ->where('mitra.email',['email'=> $id])
            ->get()->getResultArray();  
    }
    public function updatemitra($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('mitra')
            ->update($dataupdate, ['id_mitra' => $id]);
    }
    public function deletemitra($email){
        return $this->db->table('mitra')
            ->delete(['email' => $email]);
    } 
}