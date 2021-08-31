<?php

namespace App\Controllers;

use App\Models\UserModel;

class Barang extends BaseController
{
    public function index()
    {
        //tampilin data
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        return view('barang/lihat_data', $data);
    }

    public function input_barang()
    {
        $model = new UserModel();
        $data['user'] = $model->getdataAdmin();
        return view('barang/form_input', $data);
    }
}