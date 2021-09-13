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

        //akses ke tabel barang
        $this->pesananModel = new PesananModel();
        $pesananModel = [
            'nama_sup' => $data['nama_sup'],
        ];
        $id = $data['id_barang'];
        $update = $this->barangModel->updatebarang($dataupdate, $id);
        // Jika berhasil melakukan ubah
        if ($update) {

            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', 'Updated barang successfully');
            // Redirect ke halaman product
            return redirect()->to('/barang/tampil');
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
}
