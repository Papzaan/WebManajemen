<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\SuplayModel;

class Penjualan extends BaseController
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
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $model = new BarangModel();
        $data['barang'] = $model->getbarang();
        return view('penjualan/index', $data);
        //return view('barang/databarang', $data1);
    }

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
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $model = new BarangModel();
        $data['barang'] = $model->getbarang();
        return view('pe/lihat_data', $data);
        //return view('barang/databarang', $data1);

    }
    public function input_barang()
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
        $model = new SuplayModel();
        $data['suplayer'] = $model->getsuplayer();
        $model = new BarangModel();
        $data['barang'] = $model->getbarang();
        return view('barang/form_input', $data);
    }
    public function aksi_input()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //input ke tabel barang
        $this->barangModel = new BarangModel();
        $this->barangModel->save([
            'nama_sup' => $data['nama_sup'],
            'nama' => $data['nama'],
            'tgl_masuk' => $data['tgl_masuk'],
            'jumlah' => $data['jumlah'],
            'harga' => $data['harga']
        ]);
        return redirect()->to('/barang/tampil');
    }

    public function edit_barang()
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
        $model = new BarangModel();
        $data['barang'] = $model->getbarang();
        return view('barang/form_edit', $data);
    }
}
