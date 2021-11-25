<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku4_b extends Model
{
    protected $table = 'iku_4_b';
    public $db;
    public $builder;

    public function get_iku4_b($id = false)
    {
        if($id === false){
            return $this->table('iku_4_b')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_4_b')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku4_b($data)
    {
        $query = $this->db->table('iku_4_b')->insert($data);
        return $query;
    }

    public function update_iku4_b($data, $id)
    {
        $query = $this->db->table('iku_4_b')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku4_b($id)
    {
        $query = $this->db->table('iku_4_b')->delete(array('id' => $id));
        return $query;
    }
}