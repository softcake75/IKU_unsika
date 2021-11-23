<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja8;

class Kerja8 extends BaseController
{
    public function __construct()
    {
        $this->Kerja8 = new M_Kerja8();
        helper('form', 'url');
    }

    public function index()
    {
        $Kerja8 = new M_Kerja8();
        $data['Kerja8'] = $this->Kerja8->findAll();
        echo view('Kerja8/index', $data);
    }

    public function save()
    {
        $Kerja8 = new M_Kerja8();
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
        $Kerja8->save_Kerja8($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $Kerja8 = new M_Kerja8();
        $data['Kerja8'] = $this->Kerja8->get_Kerja8($id);
        echo view('Kerja8/edit', $data);
    }

    public function update($id)
    {
        $Kerja8 = new M_Kerja8();
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
        $ubah = $this->Kerja8->update_Kerja8($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Kerja8')); 
        }
    }

    public function delete($id)
    {
        $Kerja8 = new M_Kerja8();
        $hapus = $this->Kerja8->delete_Kerja8($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('Kerja8'));
        };
    }
}