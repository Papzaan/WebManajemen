<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserPesanModel;
use App\Models\BarangMitraModel;
use App\Models\StokModel;

class Mitra extends BaseController
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
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $data['title'] = 'Daftar Mitra';
        $model = new BarangMitraModel();
        $data['stok'] = $model->getstok();
        $data['jumlah_stok'] = $model->getjum_stok();
        $data['jumlah_kategori'] = $model->getjumlahkategori();
        $data['tot_pen_mitra'] = $model->gettotalpenjualan_mitra();
        $data['tot_pen_salmit'] = $model->gettotalpenjualan_salmit();
        //var_dump( $data['tot_pen_salmit']);
        echo view('mitra/index', $data);
        echo view('layout/chart-pie-mitra');
        echo view('layout/chart-bar-mitra');
        //return view('admin/index')


    }
    public function profile()
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
        $data['title'] = 'Profile';
        echo view('mitra/profil', $data);
        //return view('admin/index')
    }

    public function pesanan_mitra()
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
        $data['title'] = 'Daftar Pesanan Mitra';
        $data['user'] = $model->getdataMitra();
        $model = new UserPesanModel();
        $data['pesan'] = $model->getpesananmitra();
        echo view('mitra/pesanan', $data);
        echo view('layout/datatable');
        echo view('datatable/datatablepenjualanmitra');
    }
    public function tambah_pes()
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
        $data['title'] = 'Tambah Pesanan Mitra';
        $data['user'] = $model->getdataMitra();
        $model = new StokModel();
        $data['kategori'] = $model->getstokm();
        //var_dump($data['kategori']);
        echo view('mitra/tambah_pesanan', $data);
        echo view('layout/datepicker');
    }
    public function aksi_pesan()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        //tangkap data dari form 
        $data = $this->request->getPost();
        //panggil model stok
        $this->barangMitraModel = new BarangMitraModel();
        $adakategori = $this->barangMitraModel->where('nama_kategori', $data['nama_kategori'])->where('id_mitra', $data['id_mitra'])->first();

        //cek ada kategori atau tidak
        if ($adakategori) {
            //kondisi ada kategori
            //panggil stok berdasarkan nama kategori
            $kate = $data['nama_kategori'];
            $model = new StokModel();
            $stok = $model->editstokju($kate);
            $pesan = $data['jumlah'];
            if ($stok == 0) {
                // kirim peringatan 
                session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Habis!!!!</div>');
                return redirect()->to('/mitra/tambah_pes');
            } else if ($stok < $pesan) {
                // kirim peringatan 
                session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
                return redirect()->to('/mitra/tambah_pes');
            } else {

                $this->userpesanModel = new UserPesanModel();
                $this->userpesanModel->save([
                    'id_mitra' => $data['id_mitra'],
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

                //tambah stok kemitra
                $model = new BarangMitraModel();
                $id = $data['id_mitra'];
                $stokmit = $model->editstokju($kate, $id);
                $upstokmit = $stokmit['stok_mitra'] + $data['jumlah'];
                $dataupdatemit = [
                    'stok_mitra' => $upstokmit
                ];
                $kat = $data['nama_kategori'];
                $idbar = $stokmit['id_stokbarmit'];
                $this->stokModel = new StokModel();
                $update = $this->stokModel->updatejumstok($dataupdate, $kat);
                $this->barangMitraModel = new BarangMitraModel();
                $update1 = $this->barangMitraModel->updatejumstok($dataupdatemit, $idbar);
                // Jika berhasil melakukan ubah
                if ($update) {
                    if ($update1) {
                        return redirect()->to('/mitra/pesanan_mitra');
                    }
                }
            }
        } else {
            //masukin kategori ke barang mitra
            $this->barangMitraModel = new BarangMitraModel();
            $this->barangMitraModel->save([
                'id_mitra' => $data['id_mitra'],
                'nama_kategori' => $data['nama_kategori'],
                'stok_mitra' => '0'
            ]);
            //lanjutkan aksi masukin ke laporan pemesanan
            //panggil stok berdasarkan nama kategori
            $kate = $data['nama_kategori'];
            $model = new StokModel();
            $stok = $model->editstokju($kate);
            $pesan = $data['jumlah'];
            if ($stok == 0) {
                // kirim peringatan 
                session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Habis!!!!</div>');
                return redirect()->to('/mitra/tambah_pes');
            } else if ($stok < $pesan) {
                // kirim peringatan 
                session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
                return redirect()->to('/mitra/tambah_pes');
            } else {

                $this->userpesanModel = new UserPesanModel();
                $this->userpesanModel->save([
                    'id_mitra' => $data['id_mitra'],
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

                //tambah stok kemitra
                $model = new BarangMitraModel();
                $id = $data['id_mitra'];
                $stokmit = $model->editstokju($kate, $id);
                $upstokmit = $stokmit['stok_mitra'] + $data['jumlah'];
                $dataupdatemit = [
                    'stok_mitra' => $upstokmit
                ];
                $kat = $data['nama_kategori'];
                $idbar = $stokmit['id_stokbarmit'];
                $this->stokModel = new StokModel();
                $update = $this->stokModel->updatejumstok($dataupdate, $kat);
                $this->barangMitraModel = new BarangMitraModel();
                $update1 = $this->barangMitraModel->updatejumstok($dataupdatemit, $idbar);
                // Jika berhasil melakukan ubah
                if ($update) {
                    if ($update1) {
                        return redirect()->to('/mitra/pesanan_mitra');
                    }
                }
            }
        }
    }
}
