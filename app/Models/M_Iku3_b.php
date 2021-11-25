<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku3_b extends Model
{
    protected $table = 'iku_3_b';
    public $db;
    public $builder;

    public function get_iku3_b($id = false)
    {
        if($id === false){
            return $this->table('iku_3_b')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_3_b')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku3_b($data)
    {
        $query = $this->db->table('iku_3_b')->insert($data);
        return $query;
    }

    public function update_iku3_b($data, $id)
    {
        $query = $this->db->table('iku_3_b')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku3_b($id)
    {
        $query = $this->db->table('iku_3_b')->delete(array('id' => $id));
        return $query;
    }
}