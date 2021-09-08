<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PenjualanModel;


class Penjualan extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        helper('number');
    }
    public function index()
    {

        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $data['title'] = 'Penjualan Admin';
        return view('penjualan/penjualan', $data);
        
    }
    public function catatan(){
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $model = new PenjualanModel();
        $data['catpen'] = $model->getpenjualan();
        $data['title'] = 'Catatan Penjualan Admin';
        return view('penjualan/catatanpenjualan', $data);
    }
    public function penjualan_user(){
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') == 1) {
            return redirect()->to('/admin');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $data['title'] = 'Penjualan User';
        return view('penjualan/penjualan_user', $data);
        
    }
}
