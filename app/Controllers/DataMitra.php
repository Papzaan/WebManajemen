<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegism;

class DataMitra extends BaseController
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
        $data['mitra'] = $model->tampilmitra();
        $data['title'] = 'Mitra';
        echo view('mitra/lihat_mitra', $data);
        echo view('layout/datatable');
        echo view('datatable/dataTableMitra');
        //return view('barang/databarang', $data1);
    }

    public function input_mitra()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('status') != 1) {
            return redirect()->to('/user');
        }
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
        //$data['mitra'] = $model->tampilmitra();
        $data['sales_se'] = $model->getdatadafSales();
        $data['title'] = 'Input Mitra';
        return view('mitra/form_input', $data);
    }
    public function aksi_input()
    {

        //tangkap data dari form 
        $data = $this->request->getPost();

        //hash password digabung dengan salt
        $password = md5($data['password']);
        //masukan data ke tabel mitra sebagai mitra
        $this->userModel = new UserModel();
        $user = $this->userModel->where('email', $data['email'])->first();
        if($user){
            //jika email sudah terdaftar
            session()->setFlashdata('info', '<div class="alert alert-danger text-center">Email sudah terpakai!</div>');
            return redirect()->to('/datamitra/input_mitra');
        }else{
                
                //masukan data ke tabel user sebagai mitra
                $this->userModel->save([
                    'email' => $data['email'],
                    'password' => $password,
                    'status' => 2,
                    'status_kepegawaian' => 'non pegawai'
                ]);
                //masukan data ke tabel mitra sebagai mitra
                $this->userRegism = new UserRegism();
                //$this->userRegis->tambahMitra($data);
                $this->userRegism->save([
                    'nama' => $data['nama'],
                    'nik' => $data['nik'],
                    'no_telp' => $data['no_telp'],
                    'alamat' => $data['alamat'],
                    'jenis_kelamin' => $data['jk'],
                    'email' => $data['email'],
                    'kedudukan' => $data['kedudukan'],
                    'id_sales' => $data['id_sales']
                ]);
                return redirect()->to('/datamitra/tampil');
            }
    }
    public function edit_mitra($id)
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
        $model = new UserRegism();
        $data['mitra'] = $model->editmitra($id);
        $data['title'] = 'Update Mitra';
        return view('mitra/form_edit', $data);
    }
    public function update_mitra()
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

        $this->userRegism = new UserRegism();
        $dataupdate = [
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'jenis_kelamin' => $data['jk'],
            'email' => $data['email']
        ];
        $id = $data['id_mitra'];
        $update = $this->userRegism->updatemitra($dataupdate, $id);
        // Jika berhasil melakukan ubah
        if ($update) {
            // Deklarasikan session flashdata dengan tipe info
            echo session()->setFlashdata('info', '<div class="alert alert-success text-center">Update Pegawai Sukses</div>');
            // Redirect ke halaman product
            return redirect()->to('/datamitra/tampil');
        }
    }
    public function hapus_mitra()
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
                session()->setFlashdata('info', '<div class="alert alert-danger text-center">Password Salah Tidak Bisa Menghapus Mitra!!!!</div>');
                return redirect()->to('/datamitra/tampil');
            }else{
                 //akses ke tabel mitra
                $email = $data['email'];
                $this->userRegism = new UserRegism();
                $this->userModel = new UserModel();
                // Memanggil function delete_mitra
                $hapus = $this->userRegism->deletemitra($email);
                $hapus = $this->userModel->deleteuser($email);


                // Jika berhasil melakukan hapus
                if ($hapus) {
                    // Deklarasikan session flashdata dengan tipe warning
                    session()->setFlashdata('info', '<div class="alert alert-success text-center">Berhasil Menghapus Pegawai</div>');
                    // Redirect ke halaman barang
                    return redirect()->to('/datamitra/tampil');
                }
            }
        }
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
            echo session()->setFlashdata('info', '<div class="alert alert-success text-center">Sukses Menerima Pegawai Mitra</div>');
            // Redirect ke halaman product
            return redirect()->to('/datamitra/tampil');
        }
    }
}
