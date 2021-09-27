<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PesananModel;
class Pesanan extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    public function pesanan_mitra()
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
        $data['title'] = 'Daftar Pesanan Mitra';
        $data['user'] = $model->getdataAdmin();
        $model = new PesananModel();
        $data['pesmit'] = $model->getpesananmitra();
        echo view('pesanan/pesanan_mitra', $data);
        echo view('layout/datatable');
    }
    public function update_pesmit()
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
        $this->pesananModel = new PesananModel();
        //panggil stok berdasarkan nama kategori
        $id_pesmit = $data['id_pesan'];
        $model = new PesananModel();
        $utang = $model->editpesmit($id_pesmit);
        $bayar = $data['bayar'];
        
        //pengurangan hutang
        $total = $utang['utang'] - $bayar ;
        
        if($total == 0){
            if($utang['bayar'] < 3){
                $pinal = $utang['bayar'] + 1;
            }else{
                $pinal = $utang['bayar'];
            }
        }
        if($total != 0){
            //penambahan pinalty
            $pinal = $utang['bayar'] + 1;
        }
        
        //var_dump($pinal);
        $dataupdate = [
            'utang' => $total,
            'bayar' => $pinal
        ];
        $update = $this->pesananModel->updatepesmit($dataupdate, $id_pesmit);
        // Jika berhasil melakukan ubah
        if ($update) {

            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', 'Updated barang successfully');
            // Redirect ke halaman product
            return redirect()->to('/pesanan/pesanan_mitra');
        }
    }
}
