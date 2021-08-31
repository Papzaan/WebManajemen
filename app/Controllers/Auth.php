<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserRegis;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('auth/login');
    }

    public function register()
    {
        //menampilkan halaman register
        return view('auth/register');
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //hash password digabung dengan salt
        //$password = md5($data['password']);
        
        if($data['mitra']){
            //masukan data ke database sebagai mitra
            /*$this->userModel->save([
            'email' => $data['email'],
            'password' => $password,
            'status' => 2
            ]);*/
            //send data ke model regis
            $this->userRegis->tambahMitra($data);
            //$id_user = $this->userModel->where('email',$data['email']);
            //$data = $this->db->query("SELECT id_user FROM user WHERE email = 'email'");
            //nyari id_user
            /*return $this->db->table('user')
            ->where('email',$data['email'])
            ->get()->getResultArray();*/

        
        }else if($data['sales']){
            //masukan data ke database sebagai mitra
            $this->userModel->save([
                'email' => $data['email'],
                'password' => $password,
                'status' => 3
                ]);

        }
        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        
        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('email', $data['email'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password'])) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'email' => $user['email'],
                    'status' => $user['status']
                ];
                //$this->userModel->getdataMitra->insert($data);
                $this->session->set($sessLogin);
                if (!$this->session->set($sessLogin) == 1) {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('email', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}
