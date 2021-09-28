<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserPesanModel;
use App\Models\StokModel;


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
        $model = new StokModel();
        $data['kategori'] = $model->getstok();
        $data['jumlah_kategori'] = $model->getjumlahkategori();
        $data['tot_pen_sales'] = $model->gettotalpenjualansales();
        //var_dump($data['tot_pen_sales']);
        echo view('sales/index', $data);
        echo view('layout/chart-pie-sales');
        echo view('layout/chart-bar-sales');
    }

    public function profile()
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
        $data['title'] = 'Profile Sales';

        echo view('sales/profil', $data);
        //return view('admin/index')


    }
    public function pesanan_sales()
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
        $data['title'] = 'Daftar Pesanan Sales';
        $data['user'] = $model->getdataSales();
        $model = new UserPesanModel();
        $data['pesan'] = $model->getpesanansales();
        echo view('sales/pesanan', $data);
        echo view('layout/datatable');
    }
    public function tambah_pes()
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
        $data['title'] = 'Tambah Pesanan Sales';
        $data['user'] = $model->getdataSales();
        $model = new StokModel();
        $data['kategori'] = $model->getstok();
        echo view('sales/tambah_pesanan', $data);
    }
    public function aksi_pesan()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 3) {
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
            return redirect()->to('/sales/tambah_pes');
        } else if ($stok < $pesan) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
            return redirect()->to('/sales/tambah_pes');
        } else {
            var_dump($kate);
            var_dump($data['tgl_pesan']);
            var_dump($data['jumlah']);
            var_dump($data['tgl_pesan']);
            var_dump($data['harga_total']);
            var_dump($data['metode']);
            var_dump($data['id_sales']);


            $this->userpesansModel = new UserPesanSModel();
            $this->userpesansModel->save([
                'id_sales' => $data['id_sales'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_pesan' => $data['tgl_pesan'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga_total'],
                'utang' => $data['harga_total'],
                'bayar' => 0,
                'met_bayar' => $data['metode']
            ]);
            //kurangkan
            $upjum = $stok - $data['jumlah'];

            //update stoknya
            $dataupdate = [
                'stok' => $upjum
            ];
            $kat = $data['nama_kategori'];

            $update = $this->stokModel->updatejumstok($dataupdate, $kat);
            // Jika berhasil melakukan ubah
            if ($update) {
                return redirect()->to('/sales/pesanan_sales');
            }
        }
    }
}
