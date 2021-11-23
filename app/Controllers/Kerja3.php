<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja3;

class Kerja3 extends BaseController
{
    public function __construct()
    {
        $this->Kerja3 = new M_Kerja3();
        helper('form', 'url');
    }

    public function index()
    {
        $Kerja3 = new M_Kerja3();
        $data['Kerja3'] = $this->Kerja3->findAll();
        echo view('Kerja3/index', $data);
    }

    public function save()
    {
        $Kerja3 = new M_Kerja3();
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
        $Kerja3->save_Kerja3($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $Kerja3 = new M_Kerja3();
        $data['Kerja3'] = $this->Kerja3->get_Kerja3($id);
        echo view('Kerja3/edit', $data);
    }

    public function update($id)
    {
        $Kerja3 = new M_Kerja3();
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
        $ubah = $this->Kerja3->update_Kerja3($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Kerja3')); 
        }
    }

    public function delete($id)
    {
        $Kerja3 = new M_Kerja3();
        $hapus = $this->Kerja3->delete_Kerja3($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('Kerja3'));
        };
    }
}