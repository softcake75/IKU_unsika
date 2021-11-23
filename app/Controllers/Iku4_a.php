<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku4_a;

class iku4_a extends BaseController
{
    public function __construct()
    {
        $this->iku4_a = new M_iku4_a();
        helper('form', 'url');
    }

    public function index()
    {
        $iku4_a = new M_iku4_a();
        $data['iku4_a'] = $this->iku4_a->findAll();
        echo view('iku4/a/index', $data);
    }

    public function save()
    {
        $iku4_a = new M_iku4_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'prodi_mengajar' => $this->request->getPost('prodi_mengajar'),
            'prodi_s3' => $this->request->getPost('prodi_s3'),
            'tautan_ijazah' => $this->request->getPost('tautan_ijazah'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku4_a->save_iku4_a($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku4_a = new M_iku4_a();
        $data['iku4_a'] = $this->iku4_a->get_iku4_a($id);
        echo view('iku4_a/edit', $data);
    }

    public function update($id)
    {
        $iku4_a = new M_iku4_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'prodi_mengajar' => $this->request->getPost('prodi_mengajar'),
            'prodi_s3' => $this->request->getPost('prodi_s3'),
            'tautan_ijazah' => $this->request->getPost('tautan_ijazah'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku4_a->update_iku4_a($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku4_a')); 
        }
    }

    public function delete($id)
    {
        $iku4_a = new M_iku4_a();
        $hapus = $this->iku4_a->delete_iku4_a($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku4_a'));
        };
    }
}