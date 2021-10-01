<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserCustomer;
use App\Models\UserCustomerMitra;
use App\Models\UserCustomerSales;
use App\Models\UserCustomerSalMit;

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
    public function inputcustomer(){
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') == 2) {
            $model = new UserModel();
            $data['user'] = $model->getdataMitra();
            $data['title'] = 'Tambah Customer Mitra';
            return view('customer/tambah_customer_mitra', $data);
        }else 
        if($this->session->get('status') == 3){
            $model = new UserModel();
            $data['user'] = $model->getdataSales();
            $data['title'] = 'Tambah Customer Sales';
            return view('customer/tambah_customer_sales', $data);
        }else
        if($this->session->get('status') == 4){
            $model = new UserModel();
            $data['user'] = $model->getdataSalesnyamitra();
            $data['title'] = 'Tambah Customer Salesnya Mitra';
            return view('customer/tambah_customer_salmit', $data);
        }else{
            return redirect()->to('/user');
        }

        
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
       return redirect()->to('/penjualan/penjualan_user');
   }
   public function aksitambahcussal(){
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

        //input ke tabel barang
        $this->userCustomerSales = new UserCustomerSales();
        $this->userCustomerSales->save([
            'no_telp_customer_sal' => $data['no_telp_customer_sal'],
            'nama_cussal' => $data['nama'],
            'jenis_kelamin' => $data['jk'],
            'alamat' => $data['alamat'],
            'id_sales' => $data['id_sales']
        ]);
        return redirect()->to('/penjualan/penjualan_user');
    }
    public function aksitambahcussalmit(){
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
        return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 4) {
            return redirect()->to('/user');
        }
        //tangkap data dari form 
        $data = $this->request->getPost();

        //input ke tabel barang
        $this->userCustomerSalMit = new UserCustomerSalMit();
        $this->userCustomerSalMit->save([
            'no_telp_customer_salmit' => $data['no_telp_customer_salmit'],
            'nama_cussalmit' => $data['nama'],
            'jenis_kelamin' => $data['jk'],
            'alamat' => $data['alamat'],
            'id_salmit' => $data['id_salmit']
        ]);
        return redirect()->to('/penjualan/penjualan_user');
    }
}
