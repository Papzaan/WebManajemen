<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PenjualanModel;
use App\Models\StokModel;
use App\Models\UserCustomer;

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
        $model = new UserCustomer();
        $data['nama_cus'] = $model->getdataCustomer();
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
        $pesan = $data['jumlah'];
        if ($stok == 0) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Habis!!!!</div>');
            return redirect()->to('/penjualan');
        } else if ($stok < $pesan) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
            return redirect()->to('/penjualan');
        } else {
            //masukan catatan penjualan
            $model1 = new UserModel();
            $id_admin = $model1->getdataidAdmin();
            $nama = $data['nama_cus'];
            $model2 = new UserCustomer();
            $nik = $model2->getnikCustomer($nama);
            //var_dump($nik);

            $this->penjualanModel = new PenjualanModel();
            $this->penjualanModel->save([
                'id_admin' => $id_admin,
                'nik_customer' => $nik,
                'nama_kategori' => $data['nama_kategori'],
                'tgl_jual' => $data['tgl_jual'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga_total'],
                'alamat_trank' => $data['alamat'],
                'status' => "lunas"
            ]);
            //var_dump($stok);
            //var_dump($data['jumlah']);
            //jumlahkan
            $upjum = $stok - $data['jumlah'];
            //$upjum = 10 + $data['jumlah'];
            //update stoknya
            $dataupdate = [
                'stok' => $upjum
            ];
            $kat = $data['nama_kategori'];

            $update = $this->stokModel->updatejumstok($dataupdate, $kat);
            // Jika berhasil melakukan ubah
            if ($update) {
                return redirect()->to('/penjualan/catatan');
            }
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
    public function laporan_penmitra()
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
        $data['penmit'] = $model->getpenjualanmitra();
        $data['title'] = 'Catatan Penjualan Admin';
        echo view('penjualan/laporan_penjualan_mitra', $data);
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
        if ($this->session->get('status') == 3) {
            $model = new UserModel();
            $data['user'] = $model->getdataSales();
            $data['title'] = 'Penjualan User';
            return view('penjualan/penjualan_sales', $data);
        }
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $data['title'] = 'Penjualan User';
        return view('penjualan/penjualan_mitra', $data);
    }
}
