<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\SuplayModel;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    /*public function index()
    {

       //cek apakah ada session bernama isLogin
       if(!$this->session->has('isLogin')){
        return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('status') != 1){
            return redirect()->to('/user');
        }
        //tampilin data
        /*$model = new BarangModel();
        $data['user'] = $model->getbarang();
        echo view('barang/databarang',$data);
        
    }*/

    public function tampil()
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
        $model = new BarangModel();
        $data['title'] = 'Barang';
        $data['barang'] = $model->getbarang();
        return view('barang/lihat_data', $data);
        //return view('barang/databarang', $data1);

    }

    public function input_barang(){

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
        $model = new SuplayModel();
        $data['suplayer'] = $model->getsuplayer();
        $model = new BarangModel();
        $data['title'] = 'Input Barang';
        $data['barang'] = $model->getbarang();
        return view('barang/form_input', $data);
    }
    public function aksi_input(){
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
        $this->barangModel = new BarangModel();
        $this->barangModel->save([
            'nama_sup' => $data['nama_sup'],
            'nama' => $data['nama'],
            'tgl_masuk' => $data['tgl_masuk'],
            'jumlah' => $data['jumlah'],
            'harga' => $data['harga']
        ]);
        return redirect()->to('/barang/tampil');
    }

    public function edit_barang($id){

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
        $model = new SuplayModel();
        $data['suplayer'] = $model->getsuplayer();
        $model = new BarangModel();
        $data['title'] = 'Edit Barang';
        $data['barang'] = $model->editbarang($id);
        return view('barang/form_edit', $data);
    }
    public function update_barang(){
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
        $this->barangModel = new BarangModel();
        $dataupdate = [
            'nama_sup' => $data['nama_sup'],
            'nama' => $data['nama'],
            'tgl_masuk' => $data['tgl_masuk'],
            'jumlah' => $data['jumlah'],
            'harga' => $data['harga']
        ];
        $id = $data['id_barang'];
        $update = $this->barangModel->updatebarang($dataupdate, $id);
        // Jika berhasil melakukan ubah
        if($update)
        {
            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', 'Updated barang successfully');
            // Redirect ke halaman product
            return redirect()->to('/barang/tampil');
        }
    }
    public function hapus_barang($id){
        //akses ke tabel barang
        $this->barangModel = new BarangModel();
        // Memanggil function delete_barang
        $hapus = $this->barangModel->deletebarang($id);
    
        // Jika berhasil melakukan hapus
        if($hapus)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman barang
            return redirect()->to('/barang/tampil');
        }
    }

    public function stok()
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
        $model = new BarangModel();
        $data['title'] = 'Stok Barang';
        $data['stok'] = $model->getstok();
        return view('barang/stok', $data);
        //return view('barang/databarang', $data1);

    }
}
