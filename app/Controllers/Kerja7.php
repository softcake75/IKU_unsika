<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Kerja7;

class Kerja7 extends BaseController
{
    public function __construct()
    {
        $this->Kerja7 = new M_Kerja7();
        helper('form', 'url');
    }

    public function index()
    {
        $Kerja7 = new M_Kerja7();
        $data['Kerja7'] = $this->Kerja7->findAll();
        echo view('Kerja7/index', $data);
    }

    public function save()
    {
        $Kerja7 = new M_Kerja7();
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
        $Kerja7->save_Kerja7($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $Kerja7 = new M_Kerja7();
        $data['Kerja7'] = $this->Kerja7->get_Kerja7($id);
        echo view('Kerja7/edit', $data);
    }

    public function update($id)
    {
        $Kerja7 = new M_Kerja7();
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
        $ubah = $this->Kerja7->update_Kerja7($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Kerja7')); 
        }
    }

    public function delete($id)
    {
        $Kerja7 = new M_Kerja7();
        $hapus = $this->Kerja7->delete_Kerja7($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('Kerja7'));
        };
    }
}