<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja2;

class Kerja2 extends BaseController
{
    public function __construct()
    {
        $this->kerja2 = new M_Kerja2();
        helper('form', 'url');
    }

    public function index()
    {
        $kerja2 = new M_Kerja2();
        $data['kerja2'] = $this->kerja2->findAll();
        echo view('kerja2/index', $data);
    }

    public function save()
    {
        $kerja2 = new M_Kerja2();
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
        $kerja2->save_kerja2($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $kerja2 = new M_Kerja2();
        $data['kerja2'] = $this->kerja2->get_kerja2($id);
        echo view('kerja2/edit', $data);
    }

    public function update($id)
    {
        $kerja2 = new M_Kerja2();
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
        $ubah = $this->kerja2->update_kerja2($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('kerja2')); 
        }
    }

    public function delete($id)
    {
        $kerja2 = new M_Kerja2();
        $hapus = $this->kerja2->delete_kerja2($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('kerja2'));
        };
    }
}