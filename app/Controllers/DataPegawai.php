<?php

namespace App\Controllers;
use App\Models\UserModel;


class DataPegawai extends BaseController
{
    public function __construct()
    {
        //masih memiliki session 1
        $this->session = session();
    }

    public function tambahmitra(){
        //halaman tambah pegawai
        return view('admin/tambah_mitra');
    }

    public function valid_tambahmitra(){

    }

}

?>