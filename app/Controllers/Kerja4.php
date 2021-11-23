<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja4;

class Kerja4 extends BaseController
{
    public function __construct()
    {
        $this->Kerja4 = new M_Kerja4();
        helper('form', 'url');
    }

    public function index()
    {
        $Kerja4 = new M_Kerja4();
        $data['Kerja4'] = $this->Kerja4->findAll();
        echo view('Kerja4/index', $data);
    }

    public function save()
    {
        $Kerja4 = new M_Kerja4();
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
        $Kerja4->save_Kerja4($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $Kerja4 = new M_Kerja4();
        $data['Kerja4'] = $this->Kerja4->get_Kerja4($id);
        echo view('Kerja4/edit', $data);
    }

    public function update($id)
    {
        $Kerja4 = new M_Kerja4();
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
        $ubah = $this->Kerja4->update_Kerja4($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Kerja4')); 
        }
    }

    public function delete($id)
    {
        $Kerja4 = new M_Kerja4();
        $hapus = $this->Kerja4->delete_Kerja4($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('Kerja4'));
        };
    }
}