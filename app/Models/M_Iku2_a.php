<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku2_a extends Model
{
    protected $table = 'iku_2_a';
    public $db;
    public $builder;

    public function get_iku2_a($id = false)
    {
        if($id === false){
            return $this->table('iku_2_a')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_2_a')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku2_a($data)
    {
        $query = $this->db->table('iku_2_a')->insert($data);
        return $query;
    }

    public function update_iku2_a($data, $id)
    {
        $query = $this->db->table('iku_2_a')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku2_a($id)
    {
        $query = $this->db->table('iku_2_a')->delete(array('id' => $id));
        return $query;
    }
}