<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Dafop;

class Dafop extends BaseController
{
    public function __construct()
    {
        $this->Dafop = new M_Dafop();
        helper('form', 'url');
    }

    public function index()
    {
        $Dafop = new M_Dafop();
        $data['dafop'] = $this->Dafop->findAll();
        echo view('Dafop/index', $data);
    }

    public function save()
    {
        $Dafop = new M_Dafop();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'defenisi' => $this->request->getPost('defenisi'),
            'catatan' => $this->request->getPost('catatan'),
            'satuan' => $this->request->getPost('satuan'),
        );
        $Dafop->save_Dafop($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $Dafop = new M_Dafop();
        $data['Dafop'] = $this->Dafop->get_Dafop($id);
        echo view('Dafop/edit', $data);
    }

    public function update($id)
    {
        $Dafop = new M_Dafop();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'defenisi' => $this->request->getPost('defenisi'),
            'catatan' => $this->request->getPost('catatan'),
            'satuan' => $this->request->getPost('satuan'),
        );
        $ubah = $this->Dafop->update_Dafop($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Dafop')); 
        }
    }

    public function delete($id)
    {
        $Dafop = new M_Dafop();
        $hapus = $this->Dafop->delete_Dafop($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('Dafop'));
        };
    }
}