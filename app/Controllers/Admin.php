<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\StokModel;

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
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $model->getdataAdmin();

        $model = new StokModel();
        $data['kategori'] = $model->get_kategori();
        // Chart
        //  $db = \Config\Database::connect();
        //  $builder = $db->table('kategori');

        //  $query   = $builder->get();
        // $record = $query->getResult();

        // $productData = [];

        // foreach ($record as $row) {
        //     $productData[] = array(
        //         'nama_kategori'   => $row->nama_kategori,
        //         'stok' => floatval($row->stok)
        //     );
        // }

        // $data['productData'] = ($productData);



        echo view('admin/index', $data);
        echo view('layout/chart-pie');
        //return view('admin/index')   
    }

    public function pesanan()
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
        $data['title'] = 'Daftar Pesanan';
        $data['user'] = $model->getdataAdmin();
        echo view('pesanan/pesanan', $data);
        //return view('admin/index')   
    }
}
