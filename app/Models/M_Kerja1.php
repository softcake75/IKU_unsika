<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja1 extends Model
{
    protected $table = 'kertas_kerja1';
    public $db;
    public $builder;

    public function get_Kerja1($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja1')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja1')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_Kerja1($data)
    {
        $query = $this->db->table('kertas_kerja1')->insert($data);
        return $query;
    }

    public function update_Kerja1($data, $id)
    {
        $query = $this->db->table('kertas_kerja1')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_Kerja1($id)
    {
        $query = $this->db->table('kertas_kerja1')->delete(array('id' => $id));
        return $query;
    }
}