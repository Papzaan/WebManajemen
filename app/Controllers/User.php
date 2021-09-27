<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
         //cek role dari session
         if($this->session->get('status') == 1){
            return redirect()->to('/admin');
        }else if($this->session->get('status') == 2){
            return redirect()->to('/mitra');
        }else if($this->session->get('status') == 3){
            return redirect()->to('/sales');
        }else if($this->session->get('status') == 4){
            return redirect()->to('/salesnyamitra');
        }
    }
}