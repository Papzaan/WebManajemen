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

        //akses ke tabel pesanan mitra/sales
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
    public function pesanan_sales()
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
        $data['title'] = 'Daftar Pesanan Sales';
        $data['user'] = $model->getdataAdmin();
        $model = new PesananModel();
        $data['pessal'] = $model->getpesanansales();
        echo view('pesanan/pesanan_sales', $data);
        echo view('layout/datatable');
    }
    public function update_pessal()
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

        //akses ke tabel pesanan mitra/sales
        //panggil model stok
        $this->pesananModel = new PesananModel();
        //panggil stok berdasarkan nama kategori
        $id_pessal = $data['id_pesan'];
        $model = new PesananModel();
        $utang = $model->editpessal($id_pessal);
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
        $update = $this->pesananModel->updatepessal($dataupdate, $id_pessal);
        // Jika berhasil melakukan ubah
        if ($update) {

            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', 'Updated barang successfully');
            // Redirect ke halaman product
            return redirect()->to('/pesanan/pesanan_sales');
        }
    }
}
