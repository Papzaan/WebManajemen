<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserPesanModel;
use App\Models\BarangMitraModel;
use App\Models\StokModel;
use App\Models\UserRegism;



class Salesnyamitra extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 4) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataSalesnyamitra();
        $data['title'] = 'Salesnya Mitra';
        $model = new BarangMitraModel();
        $data['stok'] = $model->getstoksm();
        $data['jumlah_kategori'] = $model->getjumlahkategorisales();
        $data['tot_pen_salmit'] = $model->gettotalpenjualan_sales();
        //var_dump($data['tot_pen_salmit']);
        echo view('salesnyamitra/index', $data);
        echo view('layout/chart-pie-salesnya-mitra');
        echo view('layout/chart-bar-salesnya-mitra');
    }

    public function profile()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 4) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataSalesnyamitra();
        $model = new UserRegism();
        $data['mitra'] = $model->getnamamitra();
        $data['title'] = 'Profile Sales';
        echo view('salesnyamitra/profil', $data);
        //return view('admin/index')


    }
}
