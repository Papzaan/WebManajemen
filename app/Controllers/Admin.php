<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
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
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['title'] = 'Admin';
        $data['user'] = $model->getdataAdmin();
        echo view('admin/index', $data);
        //return view('admin/index')   
    }

    public function supplier()
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
        $data['title'] = 'Supplier';
        $data['user'] = $model->getdataAdmin();
        $data['barang'] = $model->tampilsuplayer();
        echo view('admin/lihat_supplier', $data);
        //return view('admin/index')   
    }
}
