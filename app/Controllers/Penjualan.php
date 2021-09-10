<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PenjualanModel;
use App\Models\StokModel;

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
        $model = new StokModel();
        $data['kategori'] = $model->getstok();
        $data['title'] = 'Penjualan Admin';
        return view('penjualan/penjualan', $data);
    }
    public function input_penjualan()
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
        //panggil model stok
        $this->stokModel = new StokModel();
        //panggil stok berdasarkan nama kategori
        $kate = $data['nama_kategori'];
        $model = new StokModel();
        $stok = $model->editstokju($kate);

        //var_dump($stok);
        //var_dump($data['jumlah']);
        //jumlahkan
        $upjum = $stok + $data['jumlah'];
        //$upjum = 10 + $data['jumlah'];
        //update stoknya
        $dataupdate = [
            'stok' => $upjum
        ];
        $kat = $data['nama_kategori'];

        $update = $this->stokModel->updatejumstok($dataupdate, $kat);
        // Jika berhasil melakukan ubah
        if ($update) {

            //input ke tabel barang
            $this->barangModel = new BarangModel();
            $this->barangModel->save([
                'nama_sup' => $data['nama_sup'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_masuk' => $data['tgl_masuk'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga']
            ]);
            return redirect()->to('/barang/tampil');
        }
    }
    public function catatan()
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
        $model = new PenjualanModel();
        $data['catpen'] = $model->getpenjualan();
        $data['title'] = 'Catatan Penjualan Admin';
        echo view('penjualan/catatanpenjualan', $data);
        echo view('layout/datatable');
    }
    public function penjualan_user()
    {
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
