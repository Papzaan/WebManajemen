<?php

namespace App\Models;

use CodeIgniter\Model;

class StokModel extends Model
{
    protected $table = "kategori";
    //protected $primaryKey = "nama_kategori";
    protected $allowedFields = ["nama_kategori","harga_mitra", "harga_sales", "harga_outlet", "harga_dusan", "stok"];
    protected $useTimestamps = false;


    public function getstok()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->get()->getResultArray();
    }
    
    public function editstok($id)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->where('barang.id_barang', ['id_barang' => $id])
            ->get()->getResultArray();
    }

    public function updatestok($dataupdate, $id)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->update($dataupdate, ['id_barang' => $id]);
    }
    public function editstokju($kate)
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT stok FROM kategori WHERE nama_kategori='$kate' ");
        $dataa = $data1->getRowArray();
        return $dataa['stok'];
    }
    public function updatejumstok($dataupdate, $kat)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->update($dataupdate, ['nama_kategori' => $kat]);
    }
    public function deletestok($id)
    {
        return $this->db->table('kategori')
            ->delete(['id_barang' => $id]);
    }
    public function getstokadmin()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(stok) FROM kategori");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(stok)'];
    }
    public function getstokmitra()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(stok_mitra) FROM stok_barang_mitra");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(stok_mitra)'];
    }
    public function getjumlahkategori()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT COUNT(nama_kategori) FROM `kategori`");
        $dataa = $data1->getRowArray();
        return $dataa['COUNT(nama_kategori)'];
    }
    
    public function gettotalpenjualan_admin()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(jumlah) FROM `catatan_admin`");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(jumlah)'];
    }
    
    public function gettotalpenjualan_mitra()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(jumlah) FROM `penjualan_mitra`");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(jumlah)'];
    }
    public function gettotalpenjualan_sales()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(jumlah) FROM `penjualan_sales`");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(jumlah)'];
    }
    public function gettotalpenjualan_salmit()
    {
        $session = session();
        $data = $session->get('email');
        $data1 = $this->db->query("SELECT SUM(jumlah) FROM `penjualan_salmit`");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(jumlah)'];
    }
}
