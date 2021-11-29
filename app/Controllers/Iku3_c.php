<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku3_c;

class iku3_c extends BaseController
{
    public function __construct()
    {
        $this->iku3_c = new M_iku3_c();
        helper('form', 'url');
    }

    public function index()
    {
        $iku3_c = new M_iku3_c();
        $data['iku3_c'] = $this->iku3_c->findAll();
        echo view('iku3/c/index', $data);
    }

    public function save()
    {
        $iku3_c = new M_iku3_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'nama_kompetisi' => $this->request->getPost('nama_kompetisi'),
            'tingkat_kompetisi' => $this->request->getPost('tingkat_kompetisi'),
            'tautan_data_dukung' => $this->request->getPost('tautan_data_dukung'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'bukti_prestasi_mahasiswa' => $this->request->getPost('bukti_prestasi_mahasiswa'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku3_c->save_iku3_c($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku3_c = new M_iku3_c();
        $data['iku3_c'] = $this->iku3_c->get_iku3_c($id);
        echo view('iku3/c/edit', $data);
    }

    public function update($id)
    {
        $iku3_c = new M_iku3_c();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'nama_kompetisi' => $this->request->getPost('nama_kompetisi'),
            'tingkat_kompetisi' => $this->request->getPost('tingkat_kompetisi'),
            'tautan_data_dukung' => $this->request->getPost('tautan_data_dukung'),
            'tautan_sk' => $this->request->getPost('tautan_sk'),
            'bukti_prestasi_mahasiswa' => $this->request->getPost('bukti_prestasi_mahasiswa'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku3_c->update_iku3_c($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku3_c')); 
        }
    }

    public function delete($id)
    {
        $iku3_c = new M_iku3_c();
        $hapus = $this->iku3_c->delete_iku3_c($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku3_c'));
        };
    }
}