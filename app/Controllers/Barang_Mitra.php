<?php

namespace App\Controllers;

use App\Models\BarangMitraModel;
use App\Models\UserModel;
use App\Models\StokModel;

class Barang_Mitra extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }


    public function stok()
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
        $model = new BarangMitraModel();
        $data['title'] = 'Stok Barang Mitra';
        $data['stok'] = $model->getstok();
        return view('mitra/lihat_stok', $data);
    }
    public function input_stok()
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
        $data['user'] = $model->getdataMitra();
        $model = new StokModel();
        $data['title'] = 'Tambah Nama Barang';
        $data['stok'] = $model->getstok();
        return view('barang/tambah_stok', $data);
    }
    public function aksi_inputstok()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
        //tangkap data dari form 
        $data = $this->request->getPost();

        //input ke tabel barang
        $this->stokModel = new StokModel();
        $this->stokModel->save([
            'nama_kategori' => $data['nama_kategori'],
            'harga_dusan' => $data['harga_dusan'],
        ]);
        return redirect()->to('/barang/stok');
    }
}
