<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku3_a;

class iku3_a extends BaseController
{
    public function __construct()
    {
        $this->iku3_a = new M_iku3_a();
        helper('form', 'url');
    }

    public function index()
    {
        $iku3_a = new M_iku3_a();
        $data['iku3_a'] = $this->iku3_a->findAll();
        echo view('iku3/a/index', $data);
    }

    public function save()
    {
        $iku3_a = new M_iku3_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_pt' => $this->request->getPost('jenis_pt'),
            'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
            'nama' => $this->request->getPost('nama'),
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tempat_kegiatan' => $this->request->getPost('tempat_kegiatan'),
            'tahun_kegiatan' => $this->request->getPost('tahun_kegiatan'),
            'tautan_data_dukung' => $this->request->getPost('tautan_data_dukung'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku3_a->save_iku3_a($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku3_a = new M_iku3_a();
        $data['iku3_a'] = $this->iku3_a->get_iku3_a($id);
        echo view('iku3/a/edit', $data);
    }

    public function update($id)
    {
        $iku3_a = new M_iku3_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_pt' => $this->request->getPost('jenis_pt'),
            'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
            'nama' => $this->request->getPost('nama'),
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'tempat_kegiatan' => $this->request->getPost('tempat_kegiatan'),
            'tahun_kegiatan' => $this->request->getPost('tahun_kegiatan'),
            'tautan_data_dukung' => $this->request->getPost('tautan_data_dukung'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'bukti_update_sister' => $this->request->getPost('bukti_update_sister'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku3_a->update_iku3_a($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku3_a')); 
        }
    }

    public function delete($id)
    {
        $iku3_a = new M_iku3_a();
        $hapus = $this->iku3_a->delete_iku3_a($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku3_a'));
        };
    }
}