<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku3_b;

class iku3_b extends BaseController
{
    public function __construct()
    {
        $this->iku3_b = new M_iku3_b();
        helper('form', 'url');
    }

    public function index()
    {
        $iku3_b = new M_iku3_b();
        $data['iku3_b'] = $this->iku3_b->findAll();
        echo view('iku3/b/index', $data);
    }

    public function save()
    {
        $iku3_b = new M_iku3_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'kriteria_pengalaman' => $this->request->getPost('kriteria_pengalaman'),
            'nama' => $this->request->getPost('nama'),
            'tempat_kegiatan' => $this->request->getPost('tempat_kegiatan'),
            'tahun_kegiatan' => $this->request->getPost('tahun_kegiatan'),
            'tautan_dukung_data' => $this->request->getPost('tautan_dukung_data'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku3_b->save_iku3_b($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku3_b = new M_iku3_b();
        $data['iku3_b'] = $this->iku3_b->get_iku3_b($id);
        echo view('iku3/b/edit', $data);
    }

    public function update($id)
    {
        $iku3_b = new M_iku3_b();
        $data = array(
            'id' => $this->request->getPost('id'),
            'kriteria_pengalaman' => $this->request->getPost('kriteria_pengalaman'),
            'nama' => $this->request->getPost('nama'),
            'tempat_kegiatan' => $this->request->getPost('tempat_kegiatan'),
            'tahun_kegiatan' => $this->request->getPost('tahun_kegiatan'),
            'tautan_dukung_data' => $this->request->getPost('tautan_dukung_data'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku3_b->update_iku3_b($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku3_b')); 
        }
    }

    public function delete($id)
    {
        $iku3_b = new M_iku3_b();
        $hapus = $this->iku3_b->delete_iku3_b($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku3_b'));
        };
    }
}