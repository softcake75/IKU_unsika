<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku5_c;

class iku5_c extends BaseController
{
    public function __construct()
    {
        $this->iku5_c = new M_iku5_c();
        helper('form', 'url');
    }

    public function index()
    {
        $iku5_c = new M_iku5_c();
        $data['iku5_c'] = $this->iku5_c->findAll();
        echo view('iku5/c/index', $data);
    }

    public function save()
    {
        $iku5_c = new M_iku5_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_karya' => $this->request->getPost('jenis_karya'),
            'judul' => $this->request->getPost('judul'),
            'tautan_katalog' => $this->request->getPost('tautan_katalog'),
            'sertif_pameran' => $this->request->getPost('sertif_pameran'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku5_c->save_iku5_c($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku5_c = new M_iku5_c();
        $data['iku5_c'] = $this->iku5_c->get_iku5_c($id);
        echo view('iku5_c/edit', $data);
    }

    public function update($id)
    {
        $iku5_c = new M_iku5_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_karya' => $this->request->getPost('jenis_karya'),
            'judul' => $this->request->getPost('judul'),
            'tautan_katalog' => $this->request->getPost('tautan_katalog'),
            'sertif_pameran' => $this->request->getPost('sertif_pameran'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),'id' => $this->request->getPost('id'),
            'jenis_karya' => $this->request->getPost('jenis_karya'),
            'judul' => $this->request->getPost('judul'),
            'tautan_katalog' => $this->request->getPost('tautan_katalog'),
            'sertif_pameran' => $this->request->getPost('sertif_pameran'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku5_c->update_iku5_c($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku5_c')); 
        }
    }

    public function delete($id)
    {
        $iku5_c = new M_iku5_c();
        $hapus = $this->iku5_c->delete_iku5_c($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku5_c'));
        };
    }
}