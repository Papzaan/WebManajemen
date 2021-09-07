<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegism;

class DataMitra extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    /*public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->tampilmitra();
        // echo view('admin/datamitra',$data);
        return view('admin/lihat_mitra');
    }*/

    public function tampil()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }

        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $data['mitra'] = $model->tampilmitra();
        $data['title'] = 'Mitra';
        return view('mitra/lihat_mitra', $data);
        //return view('barang/databarang', $data1);
    }

    public function input_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        //$data['mitra'] = $model->tampilmitra();
        $data['title'] = 'Input Mitra';
        return view('mitra/form_input', $data);
    }
    public function aksi_input()
    {

        //tangkap data dari form 
        $data = $this->request->getPost();

        //hash password digabung dengan salt
        $password = md5($data['password']);
        //masukan data ke tabel mitra sebagai mitra
        $this->userModel = new UserModel();
        //masukan data ke tabel user sebagai mitra
        $this->userModel->save([
            'email' => $data['email'],
            'password' => $password,
            'status' => 2
        ]);
        //masukan data ke tabel mitra sebagai mitra
        $this->userRegism = new UserRegism();
        //$this->userRegis->tambahMitra($data);
        $this->userRegism->save([
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jk'],
            'email' => $data['email']
        ]);
        return redirect()->to('/datamitra/tampil');
    }
    public function edit_mitra(){

    }
    public function update_mitra(){

    }
    public function hapus_mitra($email){
        //akses ke tabel mitra
        $this->userRegism = new UserRegism();
        $this->userModel = new UserModel();
        // Memanggil function delete_mitra
        $hapus = $this->userRegism->deletemitra($email);
        $hapus = $this->userModel->deleteuser($email);

    
        // Jika berhasil melakukan hapus
        if($hapus)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman barang
            return redirect()->to('/datamitra/tampil');
        }
    }
}
