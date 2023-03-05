<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class ContohSeeder extends Seeder{
    public function run(){
        $kota1 = ['kota_nama'=>'jakarta'];
        $kota2 = ['kota_nama'=>'surabaya'];
        $kota3 = ['kota_nama'=>'yogyakarta'];

        $pengguna1 =['pengguna_email'=>'amir@gmail.com','pengguna_sandi'=>'rahasia','kota_id'=>1];
        $pengguna2 =['pengguna_email'=>'badu@gmail.com','pengguna_sandi'=>'rahasia','kota_id'=>2];
        $pengguna3 =['pengguna_email'=>'cica@gmail.com','pengguna_sandi'=>'rahasia','kota_id'=>3];

        $this->db->table('kota')->insert($kota1);
        $this->db->table('kota')->insert($kota2);
        $this->db->table('kota')->insert($kota3);
        $this->db->table('pengguna')->insert($pengguna1);
        $this->db->table('pengguna')->insert($pengguna2);
        $this->db->table('pengguna')->insert($pengguna3);
    }
}