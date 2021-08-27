<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        //echo view('template/header');
        echo view('/admin/index');
        //echo view('tempalte/footer');
    }
}
