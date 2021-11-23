<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja2 extends Model
{
    protected $table = 'kertas_kerja2';
    public $db;
    public $builder;

    public function get_kerja2($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja2')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja2')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja2($data)
    {
        $query = $this->db->table('kertas_kerja2')->insert($data);
        return $query;
    }

    public function update_kerja2($data, $id)
    {
        $query = $this->db->table('kertas_kerja2')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja2($id)
    {
        $query = $this->db->table('kertas_kerja2')->delete(array('id' => $id));
        return $query;
    }
}