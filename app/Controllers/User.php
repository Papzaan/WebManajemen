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
        }

        return view('user/index');
    }
    
}