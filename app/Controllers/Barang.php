<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\SuplayModel;
use App\Models\StokModel;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

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
        echo view('barang/lihat_data', $data);
        echo view('layout/datatable');
        //return view('barang/databarang', $data1);

    }


    public function input_barang()
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
        $model = new SuplayModel();
        $data['suplayer'] = $model->getsuplayer();
        $model = new StokModel();
        $data['kategori'] = $model->getstok();
        $model = new BarangModel();
        $data['title'] = 'Input Barang';
        $data['barang'] = $model->getbarang();
        echo view('layout/datepicker');
        echo view('barang/form_input', $data);
    }
    public function aksi_input()
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

        //var_dump($stok);
        //var_dump($data['jumlah']);
        //jumlahkan
        $upjum = $stok + $data['jumlah'];
        //$upjum = 10 + $data['jumlah'];
        //update stoknya
        $dataupdate = [
            'stok' => $upjum
        ];
        $kat = $data['nama_kategori'];

        $update = $this->stokModel->updatejumstok($dataupdate, $kat);
        // Jika berhasil melakukan ubah
        if ($update) {

            //input ke tabel barang
            $this->barangModel = new BarangModel();
            $this->barangModel->save([
                'nama_sup' => $data['nama_sup'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_masuk' => $data['tgl_masuk'],
                'jumlah' => $data['jumlah'],
                'harga' => $data['harga']
            ]);
            return redirect()->to('/barang/tampil');
            echo view('template/datatables');
        }
    }

    public function edit_barang($id)
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
        $model = new SuplayModel();
        $data['suplayer'] = $model->getsuplayer();
        $model = new StokModel();
        $data['kategori'] = $model->getstok();
        $model = new BarangModel();
        $data['title'] = 'Edit Barang';
        $data['barang'] = $model->editbarang($id);
        return view('barang/form_edit', $data);
    }
    public function update_barang()
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
        if($data['sum'] == 'tambah'){
            //akses ke tabel barang tambah barang
            $hasil = $data['jumlah'] + $data['jumlah_tambah'];
            $this->barangModel = new BarangModel();
            $dataupdate = [
                'nama_sup' => $data['nama_sup'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_masuk' => $data['tgl_masuk'],
                'jumlah' => $hasil,
                'harga' => $data['harga']
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
        }else if($data['sum'] == 'kurang'){
            
            //akses ke tabel barang tambah barang
            $hasil = $data['jumlah'] - $data['jumlah_tambah'];
            $this->barangModel = new BarangModel();
            $dataupdate = [
                'nama_sup' => $data['nama_sup'],
                'nama_kategori' => $data['nama_kategori'],
                'tgl_masuk' => $data['tgl_masuk'],
                'jumlah' => $hasil,
                'harga' => $data['harga']
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
        
    }
    public function hapus_barang($id)
    {
        //akses ke tabel barang
        $this->barangModel = new BarangModel();
        // Memanggil function delete_barang
        $hapus = $this->barangModel->deletebarang($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
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
        if ($this->session->get('status') == 1) {
            $model = new UserModel();
            $data['user'] = $model->getdataAdmin();
            $model = new StokModel();
            $data['title'] = 'Stok Barang';
            $data['stok'] = $model->getstok();
            echo view('barang/stok', $data);
            echo view('layout/datatable');
        }else
        if ($this->session->get('status') == 3) {
            $model = new UserModel();
            $data['user'] = $model->getdataSales();
            $model = new StokModel();
            $data['title'] = 'Stok Barang';
            $data['stok'] = $model->getstok();
            echo view('barang/stoks', $data);
            echo view('layout/datatable');
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
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }

        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $model = new StokModel();
        $data['edit_stok'] = $model->edit_stok($id);
        $data['title'] = 'Update Stok Barang';
        return view('barang/edit_stok', $data);
    }
    public function update_stok(){
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
         $this->stokModel = new StokModel();
         $dataupdate = [
             'nama_kategori' => $data['nama_kategori'],
             'harga_mitra1' => $data['harga_mitra1'],
             'harga_mitra2' => $data['harga_mitra2'],
             'harga_mitra' => $data['harga_mitra'],
             'harga_sales' => $data['harga_sales'],
             'harga_outlet' => $data['harga_outlet'],
             'harga_dusan' => $data['harga_dusan'],
             'stok' => $data['stok']
         ];
         $id = $data['nama_kategori'];
         $update = $this->stokModel->updatestok($dataupdate, $id);
         // Jika berhasil melakukan ubah
         if ($update) {
             // Deklarasikan session flashdata dengan tipe info
             echo session()->setFlashdata('info', 'Updated barang successfully');
             // Redirect ke halaman product
             return redirect()->to('/barang/stok');
         }
    }
    public function hapus_stok($id)
    {
        //akses ke tabel barang
        $this->stokModel = new StokModel();
        // Memanggil function delete_barang
        $hapus = $this->stokModel->deletestok($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted Barang sukses');
            // Redirect ke halaman barang
            return redirect()->to('/barang/stok');
        }
    }
    public function input_stok()
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
        $data['title'] = 'Tambah Nama Barang';
        $data['stok'] = $model->getstok();
        return view('barang/tambah_stok', $data);
    }
    public function aksi_inputstok()
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

        //input ke tabel barang
        $this->stokModel = new StokModel();
        $this->stokModel->save([
            'nama_kategori' => $data['nama_kategori'],
            'harga_mitra' => '0',
            'harga_mitra1' => '0',
            'harga_mitra2' => '0',
            'harga_sales' => '0',
            'harga_outlet' => '0',
            'harga_dusan' => '0'
        ]);
        return redirect()->to('/barang/stok');
    }
}
