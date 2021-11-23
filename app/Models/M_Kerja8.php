<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja8 extends Model
{
    protected $table = 'kertas_kerja8';
    public $db;
    public $builder;

    public function get_kerja8($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja8')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja8')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja8($data)
    {
        $query = $this->db->table('kertas_kerja8')->insert($data);
        return $query;
    }

    public function update_kerja8($data, $id)
    {
        $query = $this->db->table('kertas_kerja8')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja8($id)
    {
        $query = $this->db->table('kertas_kerja8')->delete(array('id' => $id));
        return $query;
    }
}