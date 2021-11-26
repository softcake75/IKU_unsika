<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja1;

class kerja1 extends BaseController
{
    public function __construct()
    {
        $this->kerja1 = new M_Kerja1();
        helper('form', 'url');
    }

    public function index()
    {
        $kerja1 = new M_Kerja1();
        $data['kerja1'] = $this->kerja1->findAll();
        echo view('kerja1/index', $data);
    }

    public function save()
    {
        $kerja1 = new M_Kerja1();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'satuan' => $this->request->getPost('satuan'),
            'kinerja_target' => $this->request->getPost('kinerja_target'),
            'kinerja_realisasi' => $this->request->getPost('kinerja_realisasi'),
            'kinerja_capaian' => $this->request->getPost('kinerja_capaian'),
        );
        $kerja1->save_kerja1($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $kerja1 = new M_Kerja1();
        $data['kerja1'] = $this->kerja1->get_kerja1($id);
        echo view('kerja1/edit', $data);
    }

    public function update($id)
    {
        $kerja1 = new M_Kerja1();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'satuan' => $this->request->getPost('satuan'),
            'kinerja_target' => $this->request->getPost('kinerja_target'),
            'kinerja_realisasi' => $this->request->getPost('kinerja_realisasi'),
            'kinerja_capaian' => $this->request->getPost('kinerja_capaian'),
        );
        $ubah = $this->kerja1->update_kerja1($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('kerja1')); 
        }
    }

    public function delete($id)
    {
        $kerja1 = new M_Kerja1();
        $hapus = $this->kerja1->delete_kerja1($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('kerja1'));
        };
    }
}