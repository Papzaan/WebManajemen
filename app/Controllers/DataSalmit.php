<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegiss;
use App\Models\UserRegissm;
class DataSalmit extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }
    public function tampil_salmit()
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
        $data['data_mitra'] = $model->getdatadafMitra();
        $model = new UserRegissm();
        $data['salesa'] = $model->tampilsalmit1();
        $data['title'] = ' Daftar Salesnya Mitra';
        echo view('salesnyamitra/lihat_salesnyamitra', $data);
        echo view('layout/datatable');
        //return view('barang/databarang', $data1);
    }
    public function gettampil_salmit()
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
        $data1 = $this->request->getPost();
        if($data1['id_mitra'] == "belum"){
            session()->setFlashdata('pilih_mitra', '<div class="alert alert-danger text-center">Pilih Mitra!</div>');
            return redirect()->to('/datasalmit/tampil_salmit');
        }else{
        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $data['data_mitra'] = $model->getdatadafMitra();
        $model = new UserRegissm();
        $data['sales'] = $model->tampilsalmita($data1['id_mitra']);
        $data['title'] = ' Daftar Salesnya Mitra';
        echo view('salesnyamitra/lihat_salesnyamitra', $data);
        echo view('layout/datatable');
        //return view('barang/databarang', $data1);
        }
    }
    public function tampil()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }

        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $model = new UserRegissm();
        $data['sales'] = $model->tampilsalmit();
        $data['title'] = ' Daftar Sales';
        echo view('salesnyamitra/lihat_sales', $data);
        echo view('layout/datatable');
        //return view('barang/databarang', $data1);
    }
    public function hapus_sales($email)
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //akses ke tabel mitra
        $this->userRegissm = new UserRegissm();
        $this->userModel = new UserModel();
        // Memanggil function delete_mitra
        $hapus = $this->userRegissm->deletesales($email);
        $hapus = $this->userModel->deleteuser($email);


        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman barang
            return redirect()->to('/datasalmit/tampil');
        }
    }
}
