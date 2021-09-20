<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegiss;

class DataSales extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

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
        $data['sales'] = $model->tampilsales();
        $data['title'] = ' Daftar Sales';
        echo view('sales/lihat_sales', $data);
        echo view('layout/datatable');
        //return view('barang/databarang', $data1);
    }
    public function input_sales()
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
        //$data['barang'] = $model->tampilsales();
        $data['title'] = ' Tambah Sales';
        return view('sales/form_input', $data);
        //return view('barang/databarang', $data1);
    }
    public function aksi_input()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }

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
            'status' => 3
        ]);
        //masukan data ke tabel mitra sebagai mitra
        $this->userRegiss = new UserRegiss();
        //$this->userRegis->tambahMitra($data);
        $this->userRegiss->save([
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jk'],
            'email' => $data['email']
        ]);
        return redirect()->to('/datasales/tampil');
    }
    public function hapus_sales($email)
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //akses ke tabel mitra
        $this->userRegiss = new UserRegiss();
        $this->userModel = new UserModel();
        // Memanggil function delete_mitra
        $hapus = $this->userRegiss->deletesales($email);
        $hapus = $this->userModel->deleteuser($email);


        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman barang
            return redirect()->to('/datasales/tampil');
        }
    }
}
