<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplayModel extends Model
{
    protected $table = "suplayer";
    //protected $primaryKey = "id_barang";
    protected $allowedFields = ["nama_sup", "no_telp","alamat"];
    protected $useTimestamps = false;

    public function getsuplayer(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('suplayer')
          ->get()->getResultArray();
    }
    public function deletesuplier($id){
        return $this->db->table('suplayer')
            ->delete(['nama_sup' => $id]);
    } 
}