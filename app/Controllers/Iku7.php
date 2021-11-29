<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku7;

class iku7 extends BaseController
{
    public function __construct()
    {
        $this->iku7 = new M_iku7();
        helper('form', 'url');
    }

    public function index()
    {
        $iku7 = new M_iku7();
        $data['iku7'] = $this->iku7->findAll();
        echo view('iku7/index', $data);
    }

    public function save()
    {
        $iku7 = new M_iku7();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'sks' => $this->request->getPost('sks'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'jenis_matkul' => $this->request->getPost('jenis_matkul'),
            'jenis_pembelajaran' => $this->request->getPost('jenis_pembelajaran'),
            'formula_penilaian' => $this->request->getPost('formula_penilaian'),
            'tautan_rps' => $this->request->getPost('tautan_rps'),
            'tautan_laporan' => $this->request->getPost('tautan_laporan'),
            'bukti_pddikti' => $this->request->getPost('bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku7->save_iku_7($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku7 = new M_iku7();
        $data['iku7'] = $this->iku7->get_iku_7($id);
        echo view('iku7/edit', $data);
    }

    public function update($id)
    {
        $iku7 = new M_iku7();
        $data = array(
            'id' => $this->request->getPost('id'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'sks' => $this->request->getPost('sks'),
            'prodi' => $this->request->getPost('prodi'),
            'jenjang' => $this->request->getPost('jenjang'),
            'jenis_matkul' => $this->request->getPost('jenis_matkul'),
            'jenis_pembelajaran' => $this->request->getPost('jenis_pembelajaran'),
            'formula_penilaian' => $this->request->getPost('formula_penilaian'),
            'tautan_rps' => $this->request->getPost('tautan_rps'),
            'tautan_laporan' => $this->request->getPost('tautan_laporan'),
            'bukti_pddikti' => $this->request->getPost('bukti_pddikti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku7->update_iku_7($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku7')); 
        }
    }

    public function delete($id)
    {
        $iku7 = new M_iku7();
        $hapus = $this->iku7->delete_iku_7($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku7'));
        };
    }
}