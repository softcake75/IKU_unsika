<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja6 extends Model
{
    protected $table = 'kertas_kerja6';
    public $db;
    public $builder;

    public function get_kerja6($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja6')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja6')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja6($data)
    {
        $query = $this->db->table('kertas_kerja6')->insert($data);
        return $query;
    }

    public function update_kerja6($data, $id)
    {
        $query = $this->db->table('kertas_kerja6')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja6($id)
    {
        $query = $this->db->table('kertas_kerja6')->delete(array('id' => $id));
        return $query;
    }
}