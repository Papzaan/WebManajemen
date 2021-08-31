<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRegis extends Model
{

    public function tambahMitra($data){
        $password = md5($data['password']);

        $this->db->where('email',$data['email']);
        $query = $this->db->get('user');

        if($query->num_rows()>0)
		{
			echo "<script> alert('Username sudah ada!'); </script>";
		}
		else
		{
			$data1 = array(
                'email' => $data['email'],
                'password' => $password,
                'status' => $data['status']
            );
            $data2 = array(
                'nama' => $data['nama'],
                'nik' => $data['nik'],
                'no_telp' => $data['no_telp'],
                'alamat' => $data['alamat'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'email' => $data['email'] 
            );

            $this->db->insert('user', $data1);
            $this->db->insert('mitra', $data2);
            echo "<script> alert('Data berhasil ditambah!'); </script>";
            redirect(base_url('data_user'), 'refresh');
		}
		
    }
}