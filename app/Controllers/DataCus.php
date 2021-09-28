<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserCustomer;
use App\Models\UserCustomerMitra;

class DataCus extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    /*public function customer()
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
        $data['title'] = ' Daftar Supplier';
        $data['user'] = $model->getdataAdmin();
        $data['barang'] = $model->tampilsuplayer();
        echo view('supp/lihat_customer', $data);
        //return view('admin/index')   
    }*/
    public function inputcus(){
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
        $data['title'] = 'Tambah Customer';
        return view('customer/tambah_customer', $data);
    }
    public function aksitambah(){
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
        $this->userCustomer = new UserCustomer();
        $this->userCustomer->save([
            'no_telp_customer' => $data['no_telp_customer'],
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jk'],
            'alamat' => $data['alamat']
        ]);
        return redirect()->to('/penjualan');
    }
    public function inputcusmit(){
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
        $data['title'] = 'Tambah Customer Mitra';
        return view('customer/tambah_customer_mitra', $data);
    }
    public function aksitambahcusmit(){
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

       //input ke tabel barang
       $this->userCustomerMitra = new UserCustomerMitra();
       $this->userCustomerMitra->save([
           'no_telp_customer_mit' => $data['no_telp_customer_mit'],
           'nama_cusmit' => $data['nama'],
           'jenis_kelamin' => $data['jk'],
           'alamat' => $data['alamat'],
           'id_mitra' => $data['id_mitra']
       ]);
       return redirect()->to('/penjualan/laporan_mitra');
   }
}
