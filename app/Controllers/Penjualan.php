<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PenjualanModel;
use App\Models\PenjualanMitraModel;
use App\Models\PenjualanSalesModel;
use App\Models\PenjualanSalesMitraModel;
use App\Models\StokModel;
use App\Models\UserCustomer;
use App\Models\UserCustomerMitra;
use App\Models\UserCustomerSales;
use App\Models\BarangMitraModel;

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

            $this->penjualanModel = new PenjualanModel();
            $this->penjualanModel->save([
                'id_admin' => $id_admin,
                'no_telp_customer' => $data['no_telp_customer'],
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
        $data['title'] = 'Laporan Penjualan Mitra';
        echo view('penjualan/laporan_penjualan_mitra', $data);
        echo view('layout/datatable');
    }
    public function laporan_pensales()
    {//penjualan sales admin
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
        $data['pensal'] = $model->getpenjualansales();
        $data['title'] = 'Laporan Penjualan Sales';
        echo view('penjualan/laporan_penjualan_sales', $data);
        echo view('layout/datatable');
    }
    public function laporan_pensalmit()
    {//penjualan sales admin
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
        $data['pensalmit'] = $model->getpenjualansalmit();
        $data['title'] = 'Laporan Penjualan Salesnya Mitra';
        echo view('penjualan/laporan_penjualan_sales-mitra', $data);
        echo view('layout/datatable');
    }
    public function penjualan_user()
    {//penjualan sales dan mitranya admin, saat mereka login
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') == 1) {
            return redirect()->to('/admin');
        }else 
        if ($this->session->get('status') == 3) {
            $model = new UserModel();
            $data['user'] = $model->getdataSales();
            $model = new StokModel();
            $data['kategori'] = $model->getstok();
            $model = new UserCustomerSales();
            $data['nama_cus'] = $model->getdataCustomer_Sal();
            $data['title'] = 'Penjualan Sales';
            return view('penjualan/penjualan_sales', $data);

        }else
        if ($this->session->get('status') == 2) {
            $model = new UserModel();
            $data['user'] = $model->getdataMitra();
            $model = new BarangMitraModel();
            $data['kategori'] = $model->getstok();
            $model = new UserCustomerMitra();
            $data['nama_cusmit'] = $model->getdataCustomer_Mit();
            //var_dump($data['nama_cusmit'] );
            $data['title'] = 'Penjualan Mitra';
            return view('penjualan/penjualan_mitra', $data);
        }else{
            return redirect()->to('/user');
        }
        
    }
    public function input_penjualan_mitra()
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
        //panggil stok berdasarkan nama kategori
        $kate = $data['nama_kategori'];
        $id = $data['id'];
        $model = new BarangMitraModel();
        $stok = $model->editstokju($kate, $id);
        $pesan = $data['jumlah'];
        if ($stok['stok_mitra'] == 0) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Habis!!!!</div>');
            return redirect()->to('/penjualan/penjualan_user');
        } else if ($stok['stok_mitra']  < $pesan) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
            return redirect()->to('/penjualan/penjualan_user');
        } else {
            //masukan catatan penjualan
            $this->penjualanMitraModel = new PenjualanMitraModel();
            $this->penjualanMitraModel->save([
                'id_mitra' => $data['id'],
                'no_telp_customer_mit' => $data['no_telp_customer'],
                'id_stokbarmit' => $stok['id_stokbarmit'],
                'tgl_jual' => $data['tgl_jual'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga_total'],
                'alamat_trank' => $data['alamat'],
                'status' => "lunas"
            ]);
            //var_dump($stok);
            //var_dump($data['jumlah']);
            //jumlahkan
            $upjum = $stok['stok_mitra'] - $data['jumlah'];
            //$upjum = 10 + $data['jumlah'];
            //update stoknya
            $dataupdatemit = [
                'stok_mitra' => $upjum
            ];
            $idbar = $stok['id_stokbarmit'];

            $update1 = $this->barangMitraModel->updatejumstok($dataupdatemit, $idbar);
            // Jika berhasil melakukan ubah
            if ($update1) {
                return redirect()->to('/penjualan/penjualan_user');
            }
        }
    }
    public function input_penjualan_sales()
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
            return redirect()->to('/penjualan/penjualan_user');
        } else if ($stok < $pesan) {
            // kirim peringatan 
            session()->setFlashdata('stok_habis',  '<div class="alert alert-danger text-center">Stok Kurang Dari Pesanan!!!!</div>');
            return redirect()->to('/penjualan/penjualan_user');
        } else {

            $this->penjualansalesModel = new PenjualanSalesModel();
            $this->penjualansalesModel->save([
                'id_sales' =>$data['id'],
                'no_telp_customer_sal' => $data['no_telp_customer'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_jual' => $data['tgl_jual'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga_total'],
                'alamat_trank' => $data['alamat'],
                'status' => "lunas"
            ]);
            //jumlahkan
            $upjum = $stok - $data['jumlah'];

            //update stoknya
            $dataupdate = [
                'stok' => $upjum
            ];
            $kat = $data['nama_kategori'];

            $update = $this->stokModel->updatejumstok($dataupdate, $kat);
            // Jika berhasil melakukan ubah
            if ($update) {
                return redirect()->to('/penjualan/laporan_sales');
            }
        }
    }
    public function laporan_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $model = new PenjualanMitraModel();
        $data['penmit'] = $model->getpenjualanmitra();
        $data['title'] = 'Laporan Penjualan Mitra';
        echo view('penjualan/catatanpenjualanmitra', $data);
        echo view('layout/datatable');
    }
    public function laporan_salesnya_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 2) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        $model = new PenjualanSalesMitraModel();
        $data['pensalmit'] = $model->getpenjualansalmit();
        $data['title'] = 'Laporan Penjualan Salesnya Mitra';
        echo view('penjualan/laporanpenjualansalmit', $data);
        echo view('layout/datatable');
    }
    public function laporan_sales()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 3) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataSales();
        $model = new PenjualanSalesModel();
        $data['pensal'] = $model->getpenjualansales();
        $data['title'] = 'Laporan Penjualan Sales';
        echo view('penjualan/catatanpenjualansales', $data);
        echo view('layout/datatable');
    }
    public function laporan_sales_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 4) {
            return redirect()->to('/user');
        }
        $model = new UserModel();
        $data['user'] = $model->getdataSalesnyamitra();
        $model = new PenjualanSalesMitraModel();
        $data['pensalmit'] = $model->getpenjualansales_mitra();
        $data['title'] = 'Laporan Penjualan Salesnya Mitra';
        echo view('penjualan/catatanpenjualansalmit', $data);
        echo view('layout/datatable');
    }
}
