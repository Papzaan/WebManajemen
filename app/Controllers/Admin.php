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
        $data['kategori'] = $model->getstok();
        $stokadmin = $model->getstokadmin();
        $stokmitra = $model->getstokmitra();
        //untuk mendapatkan stok yang masih ada
        $total_stokbar = $stokadmin + $stokmitra;
        $data['stok_admin'] = $model->getstokadmin();
        $data['stok_mitra'] = $model->getstokmitra();
        $data['total_stok'] = $total_stokbar;
        $data['jumlah_kategori'] = $model->getjumlahkategori();
        //untuk mendapatkan jumlah penjualan
        $data['tot_pen_admin'] = $model->gettotalpenjualan_admin();
        $data['tot_pen_mitra'] = $model->gettotalpenjualan_mitra();
        $data['tot_pen_sales'] = $model->gettotalpenjualan_sales();
        $data['total_penjualan'] = $data['tot_pen_admin'] + $data['tot_pen_mitra'] + $data['tot_pen_sales'];
        //var_dump($totalpenjualan);
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
