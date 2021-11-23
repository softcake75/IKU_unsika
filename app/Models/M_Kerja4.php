<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja4 extends Model
{
    protected $table = 'kertas_kerja4';
    public $db;
    public $builder;

    public function get_kerja4($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja4')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja4')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja4($data)
    {
        $query = $this->db->table('kertas_kerja4')->insert($data);
        return $query;
    }

    public function update_kerja4($data, $id)
    {
        $query = $this->db->table('kertas_kerja4')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja4($id)
    {
        $query = $this->db->table('kertas_kerja4')->delete(array('id' => $id));
        return $query;
    }
}