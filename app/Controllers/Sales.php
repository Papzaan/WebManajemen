<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserPesanModel;

class Sales extends BaseController
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
        if ($this->session->get('status') != 3) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataSales();
        $data['title'] = 'Sales';
        echo view('sales/index', $data);
    }

    public function profile()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 3) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataSales();
        $data['title'] = 'Profile Sales';

        echo view('sales/profil', $data);
        //return view('admin/index')


    }
    public function pesanan_sales()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 3) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['title'] = 'Daftar Pesanan Sales';
        $data['user'] = $model->getdataAdmin();
        $model = new UserPesanModel();
        $data['pesan'] = $model->getpesanansales();
        echo view('sales/pesanan', $data);
        echo view('layout/datatable');
    }
    public function tambah_pes(){
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 3) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['title'] = 'Tambah Pesanan Sales';
        $data['user'] = $model->getdataAdmin();
        echo view('sales/tambah_pesanan', $data);
    }
}
