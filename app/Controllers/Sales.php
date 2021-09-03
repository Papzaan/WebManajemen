<?php

namespace App\Controllers;

use App\Models\UserModel;

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
        //return view('admin/index')


    }
}
