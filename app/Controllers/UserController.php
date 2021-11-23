<?php
 
namespace App\Controllers;

use Config\Services; 
use App\Models\UserModel;

 
class UserController extends BaseController
{
    protected $user;
 
    function __construct()
    {
        helper('url');
        helper('form');
        $this->user = new UserModel();
    }
 
    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('User/index', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nidn_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'fakultas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'prodi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
 
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->user->insert([
            'nama_user' => $this->request->getVar('nama_user'),
            'nidn_user' => $this->request->getVar('nidn_user'),
            'password' => $this->request->getVar('password'),
            'fakultas' => $this->request->getVar('fakultas'),
            'prodi' => $this->request->getVar('prodi'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('message', 'Tambah Data Berhasil');
        return redirect()->to('/user');
    }

    public function edit($id)
    {
       $user = new UserModel();
        $data['user'] = $this->user->getUser($id);
        echo view('User/edit', $data);
    }

    public function update($id)
    {
        $this->user->insert([
            'nama_user' => $this->request->getVar('nama_user'),
            'nidn_user' => $this->request->getVar('nidn_user'),
            'fakultas' => $this->request->getVar('fakultas'),
            'prodi' => $this->request->getVar('prodi'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('message', 'Tambah Data User Berhasil');
        return redirect()->to('/user');
    }
        
    }
 
    function delete($id)
        {
            $dataUser = $this->user->find($id);
            if (empty($dataUser)) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user Tidak ditemukan !');
            }
            $this->user->delete($id);
            session()->setFlashdata('message', 'Delete Data user Berhasil');
            return redirect()->to('/user');
        }

    // public function listdata()
    // {
    //     $request = \Config\Services::request();
    //     $list_data = $this->M_Utama;
    //     $where = ['id_skpd !=' => 0];
    //             //Column Order Harus Sesuai Urutan Kolom Pada Header Tabel di bagian View
    //             //Awali nama kolom tabel dengan nama tabel->tanda titik->nama kolom seperti pengguna.nama
    //     $column_order = array(NULL,'utama.skpd','utama.tanggal','utama.no_skpd', 'utama.jumlah');
    //     $column_search = array('utama.skpd','utama.tanggal','utama.no_skpd', 'utama.jumlah');
    //     $order = array('utama.skpd' => 'asc');
    //     $list = $list_data->get_datatables('utama', $column_order, $column_search, $order, $where);
    //     $data = array();
    //     $no = $request->getPost("start");
    //     foreach ($list as $lists) {
    //         $no++;
    //         $row    = array();
    //         $row[] = $no;
    //         $row[] = $lists->skpd;
    //         $row[] = $lists->tanggal;
    //         $row[] = $lists->no_skpd;
    //         $row[] = $lists->jumlah;
    //         $data[] = $row;
    //     }
    //     $output = array(
    //         "draw" => $request->getPost("draw"),
    //         "recordsTotal" => $list_data->count_all('utama', $where),
    //         "recordsFiltered" => $list_data->count_filtered('utama', $column_order, $column_search, $order, $where),
    //         "data" => $data,
    //     );
 
    //     return json_encode($output);
    // }