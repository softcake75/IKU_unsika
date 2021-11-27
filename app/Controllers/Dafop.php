<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Dafop;

class Dafop extends BaseController
{
    public function __construct()
    {
        $this->dafop = new M_Dafop();
        helper('form', 'url');
    }

    public function index()
    {
        $dafop = new M_Dafop();
        $data['dafop'] = $this->dafop->findAll();
        echo view('dafop/index', $data);
    }

    public function save()
    {
        $dafop = new M_Dafop();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'definisi' => $this->request->getPost('definisi'),
            'catatan' => $this->request->getPost('catatan'),
            'satuan' => $this->request->getPost('satuan'),
        );
        $dafop->save_dafop($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $dafop = new M_Dafop();
        $data['dafop'] = $this->dafop->get_dafop($id);
        echo view('dafop/edit', $data);
    }

    public function update($id)
    {
        $dafop = new M_Dafop();
        $data = array(
            'id' => $this->request->getPost('id'),
            'indikator' => $this->request->getPost('indikator'),
            'definisi' => $this->request->getPost('definisi'),
            'catatan' => $this->request->getPost('catatan'),
            'satuan' => $this->request->getPost('satuan'),
        );
        $ubah = $this->dafop->update_dafop($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('dafop')); 
        }
    }

    public function delete($id)
    {
        $dafop = new M_Dafop();
        $hapus = $this->dafop->delete_dafop($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('dafop'));
        };
    }
}