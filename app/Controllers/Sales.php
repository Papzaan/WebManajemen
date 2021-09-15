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
        echo view('sales/index', $data);
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
    public function tambah_pes(){
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
    public function aksi_pesan(){
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
        
        if($stok == 0){
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Habis!!!!</div>');
            return redirect()->to('/sales/tambah_pes');
        } else if($stok < $pesan){
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
            return redirect()->to('/sales/tambah_pes');
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
                        'harga' => $data['harga'],
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
                    if($update)
                    {
                        return redirect()->to('/penjualan/catatan');
                        
                    }
                }

    }
}
