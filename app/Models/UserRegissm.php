<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegissm extends Model
{
    protected $table = "salesnya_mitra";
    protected $primaryKey = "id_salmit";
    protected $allowedFields = ["id_mitra","nama_salmit", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;
    
    public function deletesales($email){
        return $this->db->table('salesnya_mitra')
            ->delete(['email' => $email]);
    }
    
    public function tampilsalmit(){
        $session = session();
        $data = $session->get('email');
        //var_dump($data);
        return $this->db->table('salesnya_mitra')
        ->join('mitra','mitra.id_mitra=salesnya_mitra.id_mitra')
        ->select('salesnya_mitra.id_salmit, salesnya_mitra.nama_salmit, salesnya_mitra.nik, salesnya_mitra.no_telp, salesnya_mitra.alamat, salesnya_mitra.jenis_kelamin, salesnya_mitra.email')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
}