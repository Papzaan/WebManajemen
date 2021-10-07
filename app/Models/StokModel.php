<?php

namespace App\Models;

use CodeIgniter\Model;

class StokModel extends Model
{
    protected $table = "kategori";
    //protected $primaryKey = "nama_kategori";
    protected $allowedFields = ["nama_kategori", "harga_sales","harga_mitra1", "harga_mitra2","harga_mitra", "harga_outlet", "harga_dusan", "stok"];
    protected $useTimestamps = false;


    public function getstok()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->get()->getResultArray();
    }
    public function getstok_paramitra()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->join('stok_barang_mitra','stok_barang_mitra.nama_kategori=kategori.nama_kategori')
            ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
            ->select('mitra.nama,kategori.nama_kategori,stok_barang_mitra.stok_mitra')
            ->get()->getResultArray();
    }
    public function getstokm()
    {
        $session = session();
        $data = $session->get('email');
        $kedudukan =  $this->db->query("SELECT kedudukan FROM mitra WHERE email='$data' ");
        $dataa = $kedudukan->getRowArray();
        if($dataa['kedudukan'] == 'md'){
            return $this->db->table('kategori')
                ->select('nama_kategori, harga_mitra')
                ->get()->getResultArray();
        }else if($dataa['kedudukan'] == 'md1'){
            return $this->db->table('kategori')
                ->select('nama_kategori, harga_mitra1')
                ->get()->getResultArray();
        }else if($dataa['kedudukan'] == 'md2'){
            return $this->db->table('kategori')
                ->select('nama_kategori, harga_mitra2')
                ->get()->getResultArray();
        }
    }
    public function getharga_stokadmin($kate){
        //$kate menampung nilai nama kategori dari kontroller
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
        ->where('nama_kategori',['nama_kategori' => $kate])
        ->get()->getRowArray();
    }
    public function edit_stok($id)
    {//admin update dari kategori
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->where('kategori.nama_kategori',['nama_kategori' => $id])
            ->get()->getResultArray();
    }

    public function updatestok($dataupdate, $id)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('kategori')
            ->update($dataupdate, ['nama_kategori' => $id]);
    }
    public function deletestok($id){
        return $this->db->table('kategori')
            ->delete(['nama_kategori' => $id]);
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
    public function gettotalpenjualansales()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_sales')
        ->join('sales','sales.id_sales=penjualan_sales.id_sales')
        ->selectSum('penjualan_sales.jumlah')
        ->where('sales.email',['email'=>$data])
        ->get()->getRowArray();
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
