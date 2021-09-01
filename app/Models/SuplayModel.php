<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplayModel extends Model
{
    protected $table = "suplayer";
    //protected $primaryKey = "id_barang";
    protected $allowedFields = ["nama_sup", "no_telp","alamat"];
    protected $useTimestamps = false;
}