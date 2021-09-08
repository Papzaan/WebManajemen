<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pesanan extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    public function pesanan_mitra()
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
        $data['title'] = 'Daftar Pesanan Mitra';
        $data['user'] = $model->getdataAdmin();
        echo view('pesanan/pesanan_mitra', $data);
    }
    public function pesanan_sales()
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
        $data['title'] = 'Daftar Pesanan Sales';
        $data['user'] = $model->getdataAdmin();
        echo view('pesanan/pesanan_sales', $data);
    }
}
