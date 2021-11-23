<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku2_b extends Model
{
    protected $table = 'iku2_b';
    public $db;
    public $builder;

    public function get_iku2_b($id = false)
    {
        if($id === false){
            return $this->table('iku2_b')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku2_b')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku2_b($data)
    {
        $query = $this->db->table('iku2_b')->insert($data);
        return $query;
    }

    public function update_iku2_b($data, $id)
    {
        $query = $this->db->table('iku2_b')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku2_b($id)
    {
        $query = $this->db->table('iku2_b')->delete(array('id' => $id));
        return $query;
    }
}