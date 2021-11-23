<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Dafdos;

class Dafdos extends BaseController
{
    public function __construct()
    {
        $this->dafdos = new M_Dafdos();
        helper('form', 'url');
    }

    public function index()
    {
        $dafdos = new M_Dafdos();
        $data['dafdos'] = $this->dafdos->findAll();
        echo view('dafdos/index', $data);
    }

    public function save()
    {
        $dafdos = new M_Dafdos();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'ttl' => $this->request->getPost('ttl'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'prodi_mengajar' => $this->request->getPost('prodi_mengajar'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'jk' => $this->request->getPost('jk'),
            'pt' => $this->request->getPost('pt'),
            'bidang_ilmu' => $this->request->getPost('bidang_ilmu'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kepakaran' => $this->request->getPost('kepakaran'),
            'validasi' => $this->request->getPost('validasi'),
        );
        $dafdos->save_dafdos($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $dafdos = new M_Dafdos();
        $data['dafdos'] = $this->dafdos->get_dafdos($id);
        echo view('dafdos/edit', $data);
    }

    public function update($id)
    {
        $dafdos = new M_Dafdos();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'ttl' => $this->request->getPost('ttl'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'prodi_mengajar' => $this->request->getPost('prodi_mengajar'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'jk' => $this->request->getPost('jk'),
            'pt' => $this->request->getPost('pt'),
            'bidang_ilmu' => $this->request->getPost('bidang_ilmu'),
            'jabatan' => $this->request->getPost('jabatan'),
            'kepakaran' => $this->request->getPost('kepakaran'),
            'validasi' => $this->request->getPost('validasi'),
        );
        $ubah = $this->dafdos->update_dafdos($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('dafdos')); 
        }
    }

    public function delete($id)
    {
        $dafdos = new M_Dafdos();
        $hapus = $this->dafdos->delete_dafdos($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('dafdos'));
        };
    }
}