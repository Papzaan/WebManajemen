<?php

namespace App\Controllers;

use App\Models\UserModel;

class DataMitra extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    /*public function index()
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
        $data['user'] = $model->tampilmitra();
        // echo view('admin/datamitra',$data);
        return view('admin/lihat_mitra');
    }*/

    public function tampil()
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
        $data['mitra'] = $model->tampilmitra();
        $data['title'] = 'Mitra';
        return view('mitra/lihat_mitra', $data);
        //return view('barang/databarang', $data1);
    }

    public function input_mitra()
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
        //$data['mitra'] = $model->tampilmitra();
        $data['title'] = 'Input Mitra';
        return view('mitra/form_input', $data);
    }
}
