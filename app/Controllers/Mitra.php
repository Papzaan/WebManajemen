<?php

namespace App\Controllers;
use App\Models\UserModel;

class Mitra extends BaseController
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
        if($this->session->get('status') != 2){
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataMitra();
        echo view('mitra/index',$data);
        //return view('admin/index')
        
        
    }
    
}