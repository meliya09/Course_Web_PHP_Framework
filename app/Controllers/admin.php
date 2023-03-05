<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use stdClass;

class Admin extends BaseController
{
    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->buildkota = $db->table('kota');
        $this->buildpengguna = $db->table('pengguna');
    }

    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        cekakses($this->response);

    }
    public function index()
    {
        return view('beranda');
    }

    public function testemplate()
    {
        return view('templateadmin');
    }

    public function kota()
    {
        $kota = $this->buildkota->get();
        $data['kota'] = $kota->getResult();
        return view('kota',$data);
    }

    public function pengguna()
    {
        $this->buildpengguna->select('*');
        $this->buildpengguna->join('kota','pengguna.kota_id = kota.kota_id');
        $pengguna = $this->buildpengguna->get();
        $data['pengguna'] = $pengguna->getResult();
        return view('pengguna',$data);
    }

    public function penggunaform($id=0)
    {
        //untuk select
        $kota = $this->buildkota->get()->getResult();
        $data['kota'] = $kota;
        //mode menambah
        $obj = new stdClass();
        $obj ->pengguna_id = 0;
        $obj ->pengguna_email = 'pengguna@domain.com';
        $obj ->pengguna_sandi = 'rahasia';
        $obj ->pengguna_kota = '0';
        $data['pengguna'] = $obj;

        //mode edit
        if($id!=0){
            $this->buildpengguna->where('pengguna_id',$id);
            $pengguna = $this->buildpengguna->get()->getResult()[0];
            $data['pengguna']= $pengguna;
        }
        return view('penggunaform',$data);
    }

    public function penggunahapus($id=0)
    {
        $this->buildpengguna->where('pengguna_id',$id);
        $this->buildpengguna->delete();
        redirect()->to('admin/pengguna');
    }

    public function penggunaproses($id=0)
    {
        $data['pengguna_id'] = $this->request->getPost('pengguna_id');
        $data['pengguna_email'] = $this->request->getPost('pengguna_email');
        $data['pengguna_sandi']= $this->request->getPost('pengguna_sandi');
        $data['kota_id'] = $this->request->getPost('kota_id');
        if($data['pengguna_id']== 0){
            $this->buildpengguna->insert($data);
        }else{
            $this->buildpengguna->where('pengguna_id',$data['pengguna_id']);
            $this->buildpengguna->update($data);
        }
        return redirect()->to('admin/pengguna');
    }
    public function logout()
    {
        $session = session();
        $session->set('email','');
        $session->set('id','');
        $session->destroy();
        return redirect()->to('publik/login');
    }
}
