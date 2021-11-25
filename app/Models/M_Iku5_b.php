<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku5_b extends Model
{
    protected $table = 'iku_5_b';
    public $db;
    public $builder;

    public function get_iku5_b($id = false)
    {
        if($id === false){
            return $this->table('iku_5_b')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_5_b')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku5_b($data)
    {
        $query = $this->db->table('iku_5_b')->insert($data);
        return $query;
    }

    public function update_iku5_b($data, $id)
    {
        $query = $this->db->table('iku_5_b')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku5_b($id)
    {
        $query = $this->db->table('iku_5_b')->delete(array('id' => $id));
        return $query;
    }
}