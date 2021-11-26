<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja6;

class Kerja6 extends BaseController
{
    public function __construct()
    {
        $this->kerja6 = new M_Kerja6();
        helper('form', 'url');
    }

    public function index()
    {
        $kerja6 = new M_Kerja6();
        $data['kerja6'] = $this->kerja6->findAll();
        echo view('kerja6/index', $data);
    }

    public function save()
    {
        $kerja6 = new M_Kerja6();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'satuan' => $this->request->getPost('satuan'),
            'kinerja_target' => $this->request->getPost('kinerja_target'),
            'kinerja_realisasi' => $this->request->getPost('kinerja_realisasi'),
            'kinerja_capaian' => $this->request->getPost('kinerja_capaian'),
            'ket' => $this->request->getPost('ket'),
            'verif_taget' => $this->request->getPost('verif_taget'),
            'verif_realisasi' => $this->request->getPost('verif_realisasi'),
            'verif_capaian' => $this->request->getPost('verif_capaian'),
            'pic' => $this->request->getPost('pic'),
        );
        $kerja6->save_kerja6($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $kerja6 = new M_Kerja6();
        $data['kerja6'] = $this->kerja6->get_kerja6($id);
        echo view('kerja6/edit', $data);
    }

    public function update($id)
    {
        $kerja6 = new M_Kerja6();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'satuan' => $this->request->getPost('satuan'),
            'kinerja_target' => $this->request->getPost('kinerja_target'),
            'kinerja_realisasi' => $this->request->getPost('kinerja_realisasi'),
            'kinerja_capaian' => $this->request->getPost('kinerja_capaian'),
            'ket' => $this->request->getPost('ket'),
            'verif_taget' => $this->request->getPost('verif_taget'),
            'verif_realisasi' => $this->request->getPost('verif_realisasi'),
            'verif_capaian' => $this->request->getPost('verif_capaian'),
            'pic' => $this->request->getPost('pic'),
        );
        $ubah = $this->kerja6->update_kerja6($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('kerja6')); 
        }
    }

    public function delete($id)
    {
        $kerja6 = new M_Kerja6();
        $hapus = $this->kerja6->delete_kerja6($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('kerja6'));
        };
    }
}