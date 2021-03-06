<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegiss;

class DataSales extends BaseController
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

        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        $data['sales'] = $model->tampilsales();
        $data['title'] = ' Daftar Sales';
        echo view('sales/lihat_sales', $data);
        echo view('layout/datatable');
        echo view('datatable/datatablesales');
        //return view('barang/databarang', $data1);
    }
    public function input_sales()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }

        //get data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        //$data['barang'] = $model->tampilsales();
        $data['title'] = ' Tambah Sales';
        return view('sales/form_input', $data);
        //return view('barang/databarang', $data1);
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

        //hash password digabung dengan salt
        $password = md5($data['password']);
        //masukan data ke tabel mitra sebagai mitra
        $this->userModel = new UserModel();
        //masukan data ke tabel user sebagai mitra
        $this->userModel->save([
            'email' => $data['email'],
            'password' => $password,
            'status' => 3,
            'status_kepegawaian' => 'pegawai'
        ]);
        //masukan data ke tabel mitra sebagai mitra
        $this->userRegiss = new UserRegiss();
        //$this->userRegis->tambahMitra($data);
        $this->userRegiss->save([
            'nama_se' => $data['nama'],
            'nik' => $data['nik'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jk'],
            'email' => $data['email']
        ]);
        return redirect()->to('/datasales/tampil');
    }
    public function terima_pegawai($email)
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }

        $dataupdate = [
            'status_kepegawaian' => 'pegawai'
        ];
        $this->userModel = new UserModel();
        $update = $this->userModel->terima_pegawai($dataupdate, $email);
        // Jika berhasil melakukan ubah
        if ($update) {

            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', '<div class="alert alert-success text-center">Sukses Menerima Sales sebagai Pegawai</div>');
            // Redirect ke halaman product
            return redirect()->to('/datasales/tampil');
        }
    }
    public function edit_sales($id)
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
        $data['useredit'] = $model->edituser($id);
        $model = new UserRegiss();
        $data['sales'] = $model->editsales($id);
        $data['title'] = 'Update Sales';
        return view('sales/form_edit', $data);
    }
    public function update_sales()
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

        $this->userRegiss = new UserRegiss();
        $dataupdate = [
            'nama_se' => $data['nama'],
            'nik' => $data['nik'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jk'],
            'email' => $data['email']
        ];
        $id = $data['id_sales'];
        $update = $this->userRegiss->updatesales($dataupdate, $id);
        // Jika berhasil melakukan ubah
        if ($update) {
            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', '<div class="alert alert-success text-center">Update Pegawai Sukses</div>');
            // Redirect ke halaman product
            return redirect()->to('/datasales/tampil');
        }
    }
    public function hapus_sales()
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

        //hash password digabung dengan salt
        $password = md5($data['password']);
        //ambil data user di database yang usernamenya sama 
        $this->userModel = new UserModel();
        $user = $this->userModel->where('email', $data['email_admin'])->first();
        if($user){
            if($user['password'] != md5($data['password'])) {
                //session()->setFlashdata('password', 'Password salah');
                // Set message
                //session()->setFlashdata('login_failed', 'Email dan password salah!');
                session()->setFlashdata('info', '<div class="alert alert-danger text-center">Password Salah Tidak Bisa Menghapus Sales!!!!</div>');
                return redirect()->to('/datasales/tampil');
            }else{
                 
                $email = $data['email'];
                //akses ke tabel sales
                $this->userRegiss = new UserRegiss();
                $this->userModel = new UserModel();
                // Memanggil function delete_mitra
                $hapus = $this->userRegiss->deletesales($email);
                $hapus = $this->userModel->deleteuser($email);
                // Jika berhasil melakukan hapus
                if ($hapus) {
                    // Deklarasikan session flashdata dengan tipe warning
                    session()->setFlashdata('info', '<div class="alert alert-success text-center">Berhasil Menghapus Pegawai</div>');
                    // Redirect ke halaman barang
                    return redirect()->to('/datasales/tampil');
                }
            }
        }
    }
}
