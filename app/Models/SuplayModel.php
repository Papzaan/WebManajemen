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
    public function editsuplayer($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('suplayer')
            ->where('suplayer.nama_sup',['nama_sup'=> $id])
            ->get()->getResultArray();  
    }
    public function updatesuplayer($dataupdate, $id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('suplayer')
            ->update($dataupdate, ['nama_sup' => $id]);
    }
    public function deletesuplier($id){
        return $this->db->table('suplayer')
            ->delete(['nama_sup' => $id]);
    } 
}