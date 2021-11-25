<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_iku5_a;

class iku5_a extends BaseController
{
    public function __construct()
    {
        $this->iku5_a = new M_iku5_a();
        helper('form', 'url');
    }

    public function index()
    {
        $iku5_a = new M_iku5_a();
        $data['iku5_a'] = $this->iku5_a->findAll();
        echo view('iku5/a/index', $data);
    }

    public function save()
    {
        $iku5_a = new M_iku5_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'karya_ilmiah' => $this->request->getPost('karya_ilmiah'),
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'afiliasi' => $this->request->getPost('afiliasi'),
            'penerbit' => $this->request->getPost('penerbit'),
            'quartile' => $this->request->getPost('quartile'),
            'link_scopus' => $this->request->getPost('link_scopus'),
            'volume' => $this->request->getPost('volume'),
            'nomor' => $this->request->getPost('nomor'),
            'tautan_jurnal' => $this->request->getPost('tautan_jurnal'),
            'tautan_buku' => $this->request->getPost('tautan_buku'),
            'tautan_sertifikat' => $this->request->getPost('tautan_sertifikat'),
            'tautan_ss' => $this->request->getPost('tautan_ss'),
            'jml_sitasi' => $this->request->getPost('jml_sitasi'),
            'tautan_case_study' => $this->request->getPost('tautan_case_study'),
            'tautan_laporan_penelitian' => $this->request->getPost('tautan_laporan_penelitian'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku5_a->save_iku5_a($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku5_a = new M_iku5_a();
        $data['iku5_a'] = $this->iku5_a->get_iku5_a($id);
        echo view('iku5/a/edit', $data);
    }

    public function update($id)
    {
        $iku5_a = new M_iku5_a();
        $data = array(
            'id' => $this->request->getPost('id'),
            'karya_ilmiah' => $this->request->getPost('karya_ilmiah'),
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'afiliasi' => $this->request->getPost('afiliasi'),
            'penerbit' => $this->request->getPost('penerbit'),
            'quartile' => $this->request->getPost('quartile'),
            'link_scopus' => $this->request->getPost('link_scopus'),
            'volume' => $this->request->getPost('volume'),
            'nomor' => $this->request->getPost('nomor'),
            'tautan_jurnal' => $this->request->getPost('tautan_jurnal'),
            'tautan_buku' => $this->request->getPost('tautan_buku'),
            'tautan_sertifikat' => $this->request->getPost('tautan_sertifikat'),
            'tautan_ss' => $this->request->getPost('tautan_ss'),
            'jml_sitasi' => $this->request->getPost('jml_sitasi'),
            'tautan_case_study' => $this->request->getPost('tautan_case_study'),
            'tautan_laporan_penelitian' => $this->request->getPost('tautan_laporan_penelitian'),
            'tautan_mou' => $this->request->getPost('tautan_mou'),
            'tautan_update_sister' => $this->request->getPost('tautan_update_sister'),
            'status_validasi' => $this->request->getPost('status_validasi')
        );
        $ubah = $this->iku5_a->update_iku5_a($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku5_a')); 
        }
    }

    public function delete($id)
    {
        $iku5_a = new M_iku5_a();
        $hapus = $this->iku5_a->delete_iku5_a($id);
        if($hapus)
        {
            session()->setFlashdata('error', 'Deleted data');
            return redirect()->to(base_url('iku5_a'));
        };
    }
}