<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegism extends Model
{
    protected $table = "mitra";
    protected $primaryKey = "id_mitra";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email","id_sales","kedudukan"];
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
    public function getnamamitra(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('salesnya_mitra')
                ->join('mitra','mitra.id_mitra=salesnya_mitra.id_mitra')
                ->where('salesnya_mitra.email',['email'=> $data])
                ->get()->getResultArray();
    }
}