<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
 
class UserModel extends Model
{
    public $db;
    public $builder;

    protected $table = "user";
    // protected $primaryKey = "id_skpd";
    // protected $returnType = "object";
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'nama_user', 'nidn_user', 'password', 'fakultas', 'prodi', 'keterangan'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getUser($id = false)
    {
        if($id === false){
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('id_user', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }
 
    public function deleteUser($id)
    {
        $query = $this->db->table('user')->delete(array('id_user' => $id));
        return $query;
    } 

    protected function _get_datatables_query($table, $column_order, $column_search, $order)
 {
     $this->builder = $this->db->table($table);
     //jika ingin join formatnya adalah sebagai berikut :
     //$this->builder->join('tabel_lain','tabel_lain.kolom_yang_sama = pengguna.kolom_yang_sama','left');
     //end Join
     $i = 0;
 
     foreach ($column_search as $item) {
         if ($_POST['search']['value']) {
 
             if ($i === 0) {
                 $this->builder->groupStart();
                 $this->builder->like($item, $_POST['search']['value']);
             } else {
                 $this->builder->orLike($item, $_POST['search']['value']);
             }
 
             if (count($column_search) - 1 == $i)
                 $this->builder->groupEnd();
         }
         $i++;
     }
 
     if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
     } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
     }
 
 }
 
 public function get_datatables($table, $column_order, $column_search, $order, $data = '')
 {
     $this->_get_datatables_query($table, $column_order, $column_search, $order);
     if ($_POST['length'] != -1)
         $this->builder->limit($_POST['length'], $_POST['start']);
     if ($data) {
         $this->builder->where($data);
     }
 
     $query = $this->builder->get();
     return $query->getResult();
 }
 
 public function count_filtered($table, $column_order, $column_search, $order, $data = '')
 {
     $this->_get_datatables_query($table, $column_order, $column_search, $order);
     if ($data) {
         $this->builder->where($data);
     }
     $this->builder->get();
     return $this->builder->countAll();
 }
 
 public function count_all($table, $data = '')
 {
     if ($data) {
         $this->builder->where($data);
     }
     $this->builder->from($table);
 
     return $this->builder->countAll();
 }
}
