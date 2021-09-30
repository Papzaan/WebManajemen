<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMitraModel extends Model
{
    protected $table = "stok_barang_mitra";
    protected $primaryKey = "id_stokbarmit";
    protected $allowedFields = ["id_mitra","nama_kategori","stok_mitra"];
    protected $useTimestamps = false;
    

    public function getstok(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->join('kategori','kategori.nama_kategori=stok_barang_mitra.nama_kategori')
        ->select('stok_barang_mitra.id_stokbarmit, stok_barang_mitra.harga_customer, kategori.harga_mitra, stok_barang_mitra.harga_sales, stok_barang_mitra.harga_outlet, stok_barang_mitra.stok_mitra, stok_barang_mitra.nama_kategori')
        ->where('mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
    public function getstoksm(){
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->join('salesnya_mitra','salesnya_mitra.id_mitra=mitra.id_mitra')
        ->join('kategori','kategori.nama_kategori=stok_barang_mitra.nama_kategori')
        ->select('kategori.harga_dusan, kategori.harga_mitra, kategori.harga_sales, kategori.harga_outlet, stok_barang_mitra.stok_mitra, stok_barang_mitra.nama_kategori')
        ->where('salesnya_mitra.email',['email'=> $data])
        ->get()->getResultArray();
    }
    
    public function getjum_stok()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->select('SUM(stok_mitra)')
        ->where('mitra.email',['email'=> $data])
        ->get()->getRowArray();
    } 
    public function getjumlahkategori()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->selectCount('stok_barang_mitra.nama_kategori')
        ->where('mitra.email',['email'=> $data])
        ->get()->getRowArray();
    }
    public function getjumlahkategorisales()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
        ->join('mitra','mitra.id_mitra=stok_barang_mitra.id_mitra')
        ->join('salesnya_mitra','salesnya_mitra.id_mitra=mitra.id_mitra')
        ->selectCount('stok_barang_mitra.nama_kategori')
        ->where('salesnya_mitra.email',['email'=> $data])
        ->get()->getRowArray();
    }
    public function editstokju($kate, $id)
    {   
        $session = session();
        $data = $session->get('email');
        $session = session();
        return $this->db->table('stok_barang_mitra')
        ->select('stok_mitra, id_stokbarmit')
        ->where('nama_kategori',['nama_kategori'=> $kate])
        ->where('id_mitra',['email'=> $id])
        ->get()->getRowArray();
    }
    public function updatejumstok($dataupdatemit, $idbar)
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('stok_barang_mitra')
            ->update($dataupdatemit, ['id_stokbarmit' => $idbar]);
    }
    public function gettotalpenjualan_mitra()
    {
        $session = session();
        $data = $session->get('email');
        $id =  $this->db->query("SELECT id_mitra FROM mitra WHERE email='$data'")->getRowArray();
        $id_mitra = $id['id_mitra'];
        $data1 = $this->db->query("SELECT SUM(jumlah) FROM penjualan_mitra WHERE id_mitra='$id_mitra' ");
        $dataa = $data1->getRowArray();
        return $dataa['SUM(jumlah)'];
    }
    public function gettotalpenjualan_salmit()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_salmit')
            ->join('salesnya_mitra','salesnya_mitra.id_salmit=penjualan_salmit.id_salmit')
            ->join('mitra','mitra.id_mitra=salesnya_mitra.id_mitra')
            ->selectSum('penjualan_salmit.jumlah')
            ->where('mitra.email',['email'=> $data])
            ->get()->getRowArray();
    }
    public function gettotalpenjualan_sales()
    {
        $session = session();
        $data = $session->get('email');
        return $this->db->table('penjualan_salmit')
            ->join('salesnya_mitra','salesnya_mitra.id_salmit=penjualan_salmit.id_salmit')
            ->selectSum('penjualan_salmit.jumlah')
            ->where('salesnya_mitra.email',['email'=>$data])
            ->get()->getRowArray();
    }
}