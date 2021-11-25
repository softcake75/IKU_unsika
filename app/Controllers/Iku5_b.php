<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku5_b;

class iku5_b extends BaseController
{
    public function __construct()
    {
        $this->iku5_b = new M_iku5_b();
        helper('form', 'url');
    }

    public function index()
    {
        $iku5_b = new M_iku5_b();
        $data['iku5_b'] = $this->iku5_b->findAll();
        echo view('iku5/b/index', $data);
    }

    public function save()
    {
        $iku5_b = new M_iku5_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_karya' => $this->request->getPost('jenis_karya'),
            'judul' => $this->request->getPost('judul'),
            'inventor' => $this->request->getPost('inventor'),
            'tautan_penghargaan_internasional' => $this->request->getPost('tautan_penghargaan_internasional'),
            'no_hak_paten' => $this->request->getPost('no_hak_paten'),
            'tautan' => $this->request->getPost('tautan'),
            'tautan_sertif_asosiasi' => $this->request->getPost('tautan_sertif_asosiasi'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku5_b->save_iku5_b($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku5_b = new M_iku5_b();
        $data['iku5_b'] = $this->iku5_b->get_iku5_b($id);
        echo view('iku5/b/edit', $data);
    }

    public function update($id)
    {
        $iku5_b = new M_iku5_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_karya' => $this->request->getPost('jenis_karya'),
            'judul' => $this->request->getPost('judul'),
            'inventor' => $this->request->getPost('inventor'),
            'tautan_penghargaan_internasional' => $this->request->getPost('tautan_penghargaan_internasional'),
            'no_hak_paten' => $this->request->getPost('no_hak_paten'),
            'tautan' => $this->request->getPost('tautan'),
            'tautan_sertif_asosiasi' => $this->request->getPost('tautan_sertif_asosiasi'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku5_b->update_iku5_b($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku5_b')); 
        }
    }

    public function delete($id)
    {
        $iku5_b = new M_iku5_b();
        $hapus = $this->iku5_b->delete_iku5_b($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku5_b'));
        };
    }
}