<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SuplayModel;

class DataSup extends BaseController
{

    public function __construct()
    {
        $this->session = session();
    }

    public function supplier()
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
        echo view('supp/lihat_supplier', $data);
        //return view('admin/index')   
    }
    public function inputsup(){
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
        //$model = new SuplayModel();
        //$data['suplayer'] = $model->getsuplayer();
        $data['title'] = 'Tambah Supplaier';
        return view('supp/tambah_supp', $data);
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
        $this->suplayModel = new SuplayModel();
        $this->suplayModel->save([
            'nama_sup' => $data['nama_sup'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat']
        ]);
        return redirect()->to('datasup/supplier');
    }


    //edit
    public function edit_sup($id){

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
        $data['suplayer'] = $model->editsuplayer($id);
        $data['title'] = 'Update Suplaier';
        return view('supp/edit_suplai', $data);
    }
    //update
    public function update_suplayer(){
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
        $this->suplayModel = new SuplayModel();
        $dataupdate = [
            'nama_sup' => $data['nama_sup'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat']
        ];
        $id = $data['nama_sup'];
        $update = $this->suplayModel->updatesuplayer($dataupdate, $id);
        // Jika berhasil melakukan ubah
        if($update)
        {
            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', 'Updated barang successfully');
            // Redirect ke halaman product
            return redirect()->to('/datasup/supplier');
        }
    }
    //hapus
    public function hapus_sup($id){
        //akses ke tabel barang
        $this->suplayModel = new SuplayModel();
        // Memanggil function delete_barang
        $hapus = $this->suplayModel->deletesuplier($id);
    
        // Jika berhasil melakukan hapus
        if($hapus)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman barang
            return redirect()->to('datasup/supplier');
        }
    }
}
