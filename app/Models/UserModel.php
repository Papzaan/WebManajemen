<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    //protected $primaryKey = "email";
    protected $allowedFields = ["email","password", "status", "status_kepegawaian"];
    protected $useTimestamps = false;

    
    public function getdataAdmin(){
      $session = session();
      $data = $session->get('email');
        return $this->db->table('user')
        ->join('admin','admin.email=user.email')
        ->where('admin.email',['email'=> $data])
        ->get()->getResultArray();  
    }
    public function getdataidAdmin(){
      $session = session();
      $data = $session->get('email');
      $data1 = $this->db->query("SELECT id_admin FROM admin WHERE email='$data' " );
      $dataa = $data1->getRowArray();

      return $dataa['id_admin'];
    }

    public function getdataMitra(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
      ->join('mitra','mitra.email=user.email')
      ->where('mitra.email',['email'=> $data])
      ->get()->getResultArray();  
    }
    public function getdatadafMitra(){
      return $this->db->table('mitra')
      ->join('user','user.email=mitra.email')
      ->select('mitra.nama,mitra.id_mitra')
      ->where('user.status_kepegawaian',['status_kepegawaian' => 'pegawai'])
      ->get()->getResultArray();  
    }
    public function getdatadafSales(){
      return $this->db->table('sales')
      ->join('user','user.email=sales.email')
      ->select('sales.nama_se,sales.id_sales')
      ->where('user.status_kepegawaian',['status_kepegawaian' => 'pegawai'])
      ->get()->getResultArray();  
    }
    // public function getidmitra($mitra){
    //   $data1 = $this->db->query("SELECT id_mitra FROM mitra WHERE nama='$mitra' " );
    //     $dataa = $data1->getRowArray();

    //     return $dataa['id_mitra'];
    // }

    public function getdataSales(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
      ->join('sales','sales.email=user.email')
      ->where('sales.email',['email'=> $data])
      ->get()->getResultArray();  
    }
    public function getdataSalesnyamitra(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
      ->join('salesnya_mitra','salesnya_mitra.email=user.email')
      ->where('salesnya_mitra.email',['email'=> $data])
      ->get()->getResultArray();  
    }

    public function tampilmitra(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
        ->join('mitra','mitra.email=user.email')
        ->where('status',['status' => 2])
        ->get()->getResultArray();  
    }
    public function terima_pegawai($dataupdate, $email){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
          ->update($dataupdate, ['email' => $email]);
    }
    public function tampilsales(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('user')
        ->join('sales','sales.email=user.email')
        ->where('status',['status' => 3])
        ->get()->getResultArray();  
    }

    public function tampilsuplayer(){
      $session = session();
      $data = $session->get('email');
      return $this->db->table('suplayer')
        ->get()->getResultArray();
    }
    //edit update delete
    public function edituser($id){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('user')
            ->where('user.email',['email'=> $id])
            ->get()->getResultArray();  
    }
    public function deleteuser($email){
      return $this->db->table('user')
            ->delete(['email' => $email]);
    }

    
}