<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserPesanModel;
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
        echo view('salesnyamitra/index', $data);
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
