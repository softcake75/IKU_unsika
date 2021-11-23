<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja3 extends Model
{
    protected $table = 'kertas_kerja3';
    public $db;
    public $builder;

    public function get_kerja3($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja3')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja3')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja3($data)
    {
        $query = $this->db->table('kertas_kerja3')->insert($data);
        return $query;
    }

    public function update_kerja3($data, $id)
    {
        $query = $this->db->table('kertas_kerja3')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja3($id)
    {
        $query = $this->db->table('kertas_kerja3')->delete(array('id' => $id));
        return $query;
    }
}