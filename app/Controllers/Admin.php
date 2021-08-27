<?php

namespace App\Controllers;
use App\Models\UserModel;

class Admin extends BaseController
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
        if($this->session->get('status') != 1){
            return redirect()->to('/user');
        }
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        echo view('admin/index',$data);
        //return view('admin/index');


        
        
    }
    
}