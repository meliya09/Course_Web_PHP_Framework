<?php

namespace App\Controllers;

class Latihan extends BaseController
{
    public function index()
    {
        echo 'ini halaman index';
    }

    public function coba()
    {
        echo 'ini halaman coba';
    }

    public function jumlah($a=0,$b=0)
    {
        $hasil = $a + $b;
        echo "hasil penjumlahan $a dan $b adalah $hasil";
    }

    public function kali()
    {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $hasil = $a + $b;
        echo "hasil penjumlahan $a dan $b adalah $hasil";
    }

    public function bagi()
    {
        $a = $this->request->getGet('a');
        $b = $this->request->getGet('b');
        $hasil = $a / $b;
        echo "hasil bagi $a dan $b adalah $hasil";
    }

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->builder = $db->table('kota');
    }

    public function ambil(){
        $hasil = $this->builder->get();
        foreach($hasil->getResult() as $baris){
            echo "$baris->kota_id $baris->kota_nama <br/>";
        }
    }

    public function tambah($nama=''){
        $this->builder->insert(['kota_nama'=>$nama]);
        echo 'data sudah ditambahkan';
    }

    public function ubah($id=0,$nama=''){
        $this->builder->set('kota_nama',$nama);
        $this->builder->where('kota_id',$id);
        $this->builder->update();
        echo 'data sudah diubah';
    }

    public function hapus($id){
        $this->builder->where('kota_id',$id);
        $this->builder->delete();
        echo 'data sudah dihapus';
    }

    public function ambilmodel(){
        $modelkota = new \App\Models\ModelKota();
        $kota = $modelkota->findAll();
        foreach($kota as $baris){
            echo "$baris->kota_id $baris->kota_nama <br/>";
        }
    }

    public function simpanmodel($id=0,$nama=''){
        $modelkota = new \App\Models\ModelKota();
        $data = ['kota_id'=>$id,'kota_nama'=>$nama];
        $modelkota->save($data);
    }

    public function hapusmodel($id=0){
        $modelkota = new \App\Models\ModelKota();
        $modelkota->delete($id);
    }

    public function latihanview(){
        $data = ['judul'=>'aplikasi ABC','pesan'=>'selamat datang'];
        $data['nama'] = 'amir';
        echo view('latihan_view',$data);
    }

    public function gabungview(){
        echo view('latihanheader');
        echo view('latihancontent');
        echo view('latihanfooter');
    }

    public function haladmin(){
        echo view('halamanadmin');
    }
    
    public function halpublik(){
        echo view('halamanpublik');
    }
}
