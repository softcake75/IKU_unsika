<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku8;

class iku8 extends BaseController
{
    public function __construct()
    {
        $this->iku8 = new M_iku8();
        helper('form', 'url');
    }

    public function index()
    {
        $iku8 = new M_iku8();
        $data['iku8'] = $this->iku8->findAll();
        echo view('iku8/index', $data);
    }

    public function save()
    {
        $iku8 = new M_iku8();
        $data = array(
            'id' => $this->request->getPost('id'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang_studi' => $this->request->getPost('jenjang_studi'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'akreditasi_internasional' => $this->request->getPost('akreditasi_internasional'),
            'lembaga_akreditasi_internasional' => $this->request->getPost('lembaga_akreditasi_internasional'),
            'tautan_sertif_akreditasi' => $this->request->getPost('tautan_sertif_akreditasi'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku8->save_iku8($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku8 = new M_iku8();
        $data['iku8'] = $this->iku8->get_iku8($id);
        echo view('iku8/edit', $data);
    }

    public function update($id)
    {
        $iku8 = new M_iku8();
        $data = array(
            'id' => $this->request->getPost('id'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang_studi' => $this->request->getPost('jenjang_studi'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'akreditasi_internasional' => $this->request->getPost('akreditasi_internasional'),
            'lembaga_akreditasi_internasional' => $this->request->getPost('lembaga_akreditasi_internasional'),
            'tautan_sertif_akreditasi' => $this->request->getPost('tautan_sertif_akreditasi'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku8->update_iku8($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku8')); 
        }
    }

    public function delete($id)
    {
        $iku8 = new M_iku8();
        $hapus = $this->iku8->delete_iku8($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku8'));
        };
    }
}