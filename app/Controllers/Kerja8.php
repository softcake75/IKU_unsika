<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja8;

class Kerja8 extends BaseController
{
    public function __construct()
    {
        $this->kerja8 = new M_Kerja8();
        helper('form', 'url');
    }

    public function index()
    {
        $kerja8 = new M_Kerja8();
        $data['kerja8'] = $this->kerja8->findAll();
        echo view('kerja8/index', $data);
    }

    public function save()
    {
        $kerja8 = new M_Kerja8();
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
        $kerja8->save_Kerja8($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $kerja8 = new M_Kerja8();
        $data['kerja8'] = $this->kerja8->get_Kerja8($id);
        echo view('kerja8/edit', $data);
    }

    public function update($id)
    {
        $kerja8 = new M_Kerja8();
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
        $ubah = $this->kerja8->update_Kerja8($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('kerja8')); 
        }
    }

    public function delete($id)
    {
        $kerja8 = new M_Kerja8();
        $hapus = $this->kerja8->delete_Kerja8($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('kerja8'));
        };
    }
}