<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Iku2_b;

class Iku2_b extends BaseController
{
    public function __construct()
    {
        $this->iku2_b = new M_Iku2_b();
        helper('form', 'url');
    }

    public function index()
    {
        $iku2_b = new M_Iku2_b();
        $data['iku_2_b'] = $this->iku2_b->findAll();
        echo view('iku2/b/index', $data);
    }

    public function save()
    {
        $iku2_b = new M_iku2_b();
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
        $iku2_b->save_iku2_b($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku2_b = new M_iku2_b();
        $data['iku_2_b'] = $this->iku2_b->get_iku2_b($id);
        echo view('iku2_b/edit', $data);
    }

    public function update($id)
    {
        $iku2_b = new M_iku2_b();
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
        $ubah = $this->iku2_b->update_iku2_b($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku2_b')); 
        }
    }

    public function delete($id)
    {
        $iku2_b = new M_iku2_b();
        $hapus = $this->iku2_b->delete_iku2_b($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('iku2_b'));
        };
    }
}