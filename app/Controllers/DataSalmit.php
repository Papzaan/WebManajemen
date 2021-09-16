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
