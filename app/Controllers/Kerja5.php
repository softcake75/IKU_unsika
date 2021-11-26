<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja5;

class Kerja5 extends BaseController
{
    public function __construct()
    {
        $this->kerja5 = new M_Kerja5();
        helper('form', 'url');
    }

    public function index()
    {
        $kerja5 = new M_Kerja5();
        $data['kerja5'] = $this->kerja5->findAll();
        echo view('kerja5/index', $data);
    }

    public function save()
    {
        $kerja5 = new M_Kerja5();
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
        $kerja5->save_kerja5($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $kerja5 = new M_Kerja5();
        $data['kerja5'] = $this->kerja5->get_kerja5($id);
        echo view('kerja5/edit', $data);
    }

    public function update($id)
    {
        $kerja5 = new M_Kerja5();
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
        $ubah = $this->kerja5->update_kerja5($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('kerja5')); 
        }
    }

    public function delete($id)
    {
        $kerja5 = new M_Kerja5();
        $hapus = $this->kerja5->delete_kerja5($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('kerja5'));
        };
    }
}