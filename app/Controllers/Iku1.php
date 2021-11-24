<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Iku1;

class Iku1 extends BaseController
{
    public function __construct()
    {
        $this->iku1 = new M_Iku1();
        helper('form', 'url');
    }

    public function index()
    {
        $iku1 = new M_Iku1();
        $data['iku_1'] = $this->iku1->findAll();
        $data['totalMhs'] = $this->iku1->totalMhs();
        echo view('iku1/index', $data);
    }

    // public function hitung()
    // {
    //     $iku1 = new M_Iku1();
    //     $this->db->like('id', '0');
    //     $this->db->from('iku1');
    //     echo $this->db-countResultArray();
    // }

    public function save()
    {
        $iku1 = new M_Iku1();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis' => $this->request->getPost('jenis'),
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jenjang' => $this->request->getPost('jenjang'),
            'prodi' => $this->request->getPost('prodi'),
            'fakultas' => $this->request->getPost('fakultas'),
            'no_ijazah' => $this->request->getPost('no_ijazah'),
            'masa_tunggu' => $this->request->getPost('masa_tunggu'),
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'lokasi_perusahaan' => $this->request->getPost('lokasi_perusahaan'),
            'pendapatan' => $this->request->getPost('pendapatan'),
            'lanjut_studi' => $this->request->getPost('lanjut_studi'),
            'tautan_bukti' => $this->request->getPost('tautan_bukti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $iku1->save_Iku1($data);
        return redirect()->to('index');
    }

    public function edit($id)
    {
        $iku1 = new M_Iku1();
        $data['iku_1'] = $this->iku1->get_Iku1($id);
        echo view('iku1/edit', $data);
    }

    public function update($id)
    {
        $iku1 = new M_Iku1();
        $data = array(
            'id' => $this->request->getPost('id'),
            'jenis' => $this->request->getPost('jenis'),
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jenjang' => $this->request->getPost('jenjang'),
            'prodi' => $this->request->getPost('prodi'),
            'fakultas' => $this->request->getPost('fakultas'),
            'no_ijazah' => $this->request->getPost('no_ijazah'),
            'masa_tunggu' => $this->request->getPost('masa_tunggu'),
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'lokasi_perusahaan' => $this->request->getPost('lokasi_perusahaan'),
            'pendapatan' => $this->request->getPost('pendapatan'),
            'lanjut_studi' => $this->request->getPost('lanjut_studi'),
            'tautan_bukti' => $this->request->getPost('tautan_bukti'),
            'status_validasi' => $this->request->getPost('status_validasi'),
        );
        $ubah = $this->iku1->update_Iku1($data, $id);
     
    // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('message', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('iku1')); 
        }
    }

    public function delete($id)
    {
        $iku1 = new M_Iku1();
        $hapus = $this->iku1->delete_Iku1($id);
        if($hapus)
        {
            session()->setFlashdata('message', 'Deleted data');
            return redirect()->to(base_url('iku1'));
        };
    }
}