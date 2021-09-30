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
        if ($this->session->get('status') == 2) {
           //tampilin data
            $model = new UserModel();
            $data['user'] = $model->getdataMitra();
            $model = new BarangMitraModel();
            $data['title'] = 'Stok Barang Mitra';
            $data['stok'] = $model->getstok();
            return view('mitra/lihat_stok', $data);
        }else
        if ($this->session->get('status') == 4) {
            //tampilin data
            $model = new UserModel();
            $data['user'] = $model->getdataSalesnyamitra();
            $model = new BarangMitraModel();
            $data['title'] = 'Stok Barang Mitra';
            $data['stok'] = $model->getstoksm();
            return view('salesnyamitra/lihat_stok', $data);
        }else{
            return redirect()->to('/user');
        }
        
    }
    
    public function edit_stok($id){
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
       $model = new BarangMitraModel();
       $data['edit_stok'] = $model->edit_stok($id);
       $data['title'] = 'Update Stok Barang Mitra';
       return view('barang/edit_stok', $data);
   }
}
