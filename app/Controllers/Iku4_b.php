<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku4_b;

class iku4_b extends BaseController
{
    public function __construct()
    {
        $this->iku4_b = new M_iku4_b();
        helper('form', 'url');
    }

    public function index()
    {
        $iku4_b = new M_iku4_b();
        $data['iku4_b'] = $this->iku4_b->findAll();
        echo view('iku4/b/index', $data);
    }

    public function save()
    {
        $iku4_b = new M_iku4_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_lembaga' => $this->request->getPost('jenis_lembaga'),
            'nama' => $this->request->getPost('nama'),
            'lembaga_sertifikasi' => $this->request->getPost('lembaga_sertifikasi'),
            'tautan_sertifikat' => $this->request->getPost('tautan_sertifikat'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku4_b->save_iku4_b($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku4_b = new M_iku4_b();
        $data['iku4_b'] = $this->iku4_b->get_iku4_b($id);
        echo view('iku4/b/edit', $data);
    }

    public function update($id)
    {
        $iku4_b = new M_iku4_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_lembaga' => $this->request->getPost('jenis_lembaga'),
            'nama' => $this->request->getPost('nama'),
            'lembaga_sertifikasi' => $this->request->getPost('lembaga_sertifikasi'),
            'tautan_sertifikat' => $this->request->getPost('tautan_sertifikat'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku4_b->update_iku4_b($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku4_b')); 
        }
    }

    public function delete($id)
    {
        $iku4_b = new M_iku4_b();
        $hapus = $this->iku4_b->delete_iku4_b($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku4_b'));
        };
    }
}