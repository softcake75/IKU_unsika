<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja5 extends Model
{
    protected $table = 'kertas_kerja5';
    public $db;
    public $builder;

    public function get_kerja5($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja5')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja5')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja5($data)
    {
        $query = $this->db->table('kertas_kerja5')->insert($data);
        return $query;
    }

    public function update_kerja5($data, $id)
    {
        $query = $this->db->table('kertas_kerja5')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja5($id)
    {
        $query = $this->db->table('kertas_kerja5')->delete(array('id' => $id));
        return $query;
    }
}