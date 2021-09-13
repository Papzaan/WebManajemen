<?php

namespace App\Controllers;

use App\Models\UserModel;

class Mitra extends BaseController
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
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $data['title'] = 'Daftar Mitra';
        echo view('mitra/index', $data);
        //return view('admin/index')


    }
    public function profile()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $data['title'] = 'Profile';
        echo view('mitra/profil', $data);
        //return view('admin/index')
    }

    public function pesanan_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['title'] = 'Daftar Pesanan Mitra';
        $data['user'] = $model->getdataAdmin();
        echo view('mitra/pesanan', $data);
        echo view('layout/datatable');
    }
}
