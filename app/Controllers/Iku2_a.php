<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku2_a;

class iku2_a extends BaseController
{
    public function __construct()
    {
        $this->iku2_a = new M_iku2_a();
        helper('form', 'url');
    }

    public function index()
    {
        $iku2_a = new M_iku2_a();
        $data['iku_2_a'] = $this->iku2_a->findAll();
        echo view('iku2/a/index', $data);
    }

    public function save()
    {
        $iku2_a = new M_iku2_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi'),
            'fakultas' => $this->request->getPost('fakultas'),
            'kegiatan_merdeka_belajar' => $this->request->getPost('kegiatan_merdeka_belajar'),
            'sks_diakui' => $this->request->getPost('sks_diakui'),
            'dosen_pembimbing' => $this->request->getPost('dosen_pembimbing'),
            'tautan_sk_rektor' => $this->request->getPost('tautan_sk_rektor'),
            'tautan_sk_konversi' => $this->request->getPost('tautan_sk_konversi'),
            'tautan_panduan_kegiatan' => $this->request->getPost('tautan_panduan_kegiatan'),
            'tautan_data_lainnya' => $this->request->getPost('tautan_data_lainnya'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku2_a->save_iku2_a($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku2_a = new M_iku2_a();
        $data['iku_2_a'] = $this->iku2_a->get_iku2_a($id);
        echo view('iku2/a/edit', $data);
    }

    public function update($id)
    {
        $iku2_a = new M_iku2_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi'),
            'fakultas' => $this->request->getPost('fakultas'),
            'kegiatan_merdeka_belajar' => $this->request->getPost('kegiatan_merdeka_belajar'),
            'sks_diakui' => $this->request->getPost('sks_diakui'),
            'dosen_pembimbing' => $this->request->getPost('dosen_pembimbing'),
            'tautan_sk_rektor' => $this->request->getPost('tautan_sk_rektor'),
            'tautan_sk_konversi' => $this->request->getPost('tautan_sk_konversi'),
            'tautan_panduan_kegiatan' => $this->request->getPost('tautan_panduan_kegiatan'),
            'tautan_data_lainnya' => $this->request->getPost('tautan_data_lainnya'),
            'tautan_bukti_pddikti' => $this->request->getPost('tautan_bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku2_a->update_iku2_a($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku2_a')); 
        }
    }

    public function delete($id)
    {
        $iku2_a = new M_iku2_a();
        $hapus = $this->iku2_a->delete_iku2_a($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('iku2_a'));
        };
    }
}