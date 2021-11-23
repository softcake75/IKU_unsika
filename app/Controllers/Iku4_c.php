<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku4_c;

class iku4_c extends BaseController
{
    public function __construct()
    {
        $this->iku4_c = new M_iku4_c();
        helper('form', 'url');
    }

    public function index()
    {
        $iku4_c = new M_iku4_c();
        $data['iku4_c'] = $this->iku4_c->findAll();
        echo view('iku4/c/index', $data);
    }

    public function save()
    {
        $iku4_c = new M_iku4_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_pengalaman' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('id'),
            'nama_instansi' => $this->request->getPost('id'),
            'tautan_pengalaman_kerja' => $this->request->getPost('id'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku4_c->save_iku4_c($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku4_c = new M_iku4_c();
        $data['iku4_c'] = $this->iku4_c->get_iku4_c($id);
        echo view('iku4_c/edit', $data);
    }

    public function update($id)
    {
        $iku4_c = new M_iku4_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_pengalaman' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('id'),
            'nama_instansi' => $this->request->getPost('id'),
            'tautan_pengalaman_kerja' => $this->request->getPost('id'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku4_c->update_iku4_c($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku4_c')); 
        }
    }

    public function delete($id)
    {
        $iku4_c = new M_iku4_c();
        $hapus = $this->iku4_c->delete_iku4_c($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku4_c'));
        };
    }
}