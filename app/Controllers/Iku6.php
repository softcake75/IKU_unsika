<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku6;

class iku6 extends BaseController
{
    public function __construct()
    {
        $this->iku6 = new M_iku6();
        helper('form', 'url');
    }

    public function index()
    {
        $iku6 = new M_iku6();
        $data['iku6'] = $this->iku6->findAll();
        echo view('iku6/index', $data);
    }

    public function save()
    {
        $iku6 = new M_iku6();
        $data = array(
            'id' => $this->request->getPost('id'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'fakultas' => $this->request->getPost('fakultas'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'bentuk_kerjasama' => $this->request->getPost('bentuk_kerjasama'),
            'kriteria_mitra' => $this->request->getPost('kriteria_mitra'),
            'nama_mitra' => $this->request->getPost('nama_mitra'),
            'kegiatan_kerjasama' => $this->request->getPost('kegiatan_kerjasama'),
            'periode' => $this->request->getPost('periode'),
            'mou' => $this->request->getPost('mou'),
            'moa' => $this->request->getPost('moa'),
            'ia' => $this->request->getPost('ia'),
            'jenis_luaran' => $this->request->getPost('jenis_luaran'),
            'jumlah_luaran' => $this->request->getPost('jumlah_luaran'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku6->save_iku6($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku6 = new M_iku6();
        $data['iku6'] = $this->iku6->get_iku6($id);
        echo view('iku6/edit', $data);
    }

    public function update($id)
    {
        $iku6 = new M_iku6();
        $data = array(
            'id' => $this->request->getPost('id'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'fakultas' => $this->request->getPost('fakultas'),
            'status_keaktifan' => $this->request->getPost('status_keaktifan'),
            'bentuk_kerjasama' => $this->request->getPost('bentuk_kerjasama'),
            'kriteria_mitra' => $this->request->getPost('kriteria_mitra'),
            'nama_mitra' => $this->request->getPost('nama_mitra'),
            'kegiatan_kerjasama' => $this->request->getPost('kegiatan_kerjasama'),
            'periode' => $this->request->getPost('periode'),
            'mou' => $this->request->getPost('mou'),
            'moa' => $this->request->getPost('moa'),
            'ia' => $this->request->getPost('ia'),
            'jenis_luaran' => $this->request->getPost('jenis_luaran'),
            'jumlah_luaran' => $this->request->getPost('jumlah_luaran'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku6->update_iku6($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku6')); 
        }
    }

    public function delete($id)
    {
        $iku6 = new M_iku6();
        $hapus = $this->iku6->delete_iku6($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku6'));
        };
    }
}