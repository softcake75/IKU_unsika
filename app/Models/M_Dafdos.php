<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Dafdos extends Model
{
    protected $table = 'daftar_dosen';
    public $db;
    public $builder;

    public function get_Dafdos($id = false)
    {
        if($id === false){
            return $this->table('daftar_dosen')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('daftar_dosen')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_Dafdos($data)
    {
        $query = $this->db->table('daftar_dosen')->insert($data);
        return $query;
    }

    public function update_Dafdos($data, $id)
    {
        $query = $this->db->table('daftar_dosen')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_Dafdos($id)
    {
        $query = $this->db->table('daftar_dosen')->delete(array('id' => $id));
        return $query;
    }
}