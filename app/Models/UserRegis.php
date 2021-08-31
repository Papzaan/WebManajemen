<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegis extends Model
{
    protected $table = "mitra";
    protected $primaryKey = "id_mitra";
    protected $allowedFields = ["nama", "nik","no_telp","alamat","jenis_kelamin","email"];
    protected $useTimestamps = false;
    /*public function tambahMitra($data){
        $password = md5($data['password']);

        //$this->db->table('email',$data['email']);
        //$query = $this->db->get('user');
        /*$query = $this->db->table('user')
        ->where('email',$data['email'])
        ->get()->getResultArray();
        //var_dump($query);

        if($query->num_rows()>0)
		{
			echo "<script> alert('Username sudah ada!'); </script>";
		}
		else
		{*/
			/*$data1 = array(
                'email' => $data['email'],
                'password' => $password,
                'status' => $data['mitra']
            );
            $data2 = array(
                'nama' => $data['nama'],
                'nik' => $data['nik'],
                'no_telp' => $data['no_telp'],
                'alamat' => $data['alamat'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'email' => $data['email'] 
            );

            /*$db = db_connect('asldatabase');
            $user = $db->table('user');
            $mitra = $db->table('mitra');

            $user->insert($data1);
            $mitra->insert($data2);

            $this->db->insert('user', $data1);
            $this->db->insert('mitra', $data2);
            echo "<script> alert('Data berhasil ditambah!'); </script>";
            redirect(base_url('auth/login'), 'refresh');
		//}
		
    }*/
}