<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku4_a extends Model
{
    protected $table = 'iku_4_a';
    public $db;
    public $builder;

    public function get_iku4_a($id = false)
    {
        if($id === false){
            return $this->table('iku_4_a')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_4_a')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku4_a($data)
    {
        $query = $this->db->table('iku_4_a')->insert($data);
        return $query;
    }

    public function update_iku4_a($data, $id)
    {
        $query = $this->db->table('iku_4_a')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku4_a($id)
    {
        $query = $this->db->table('iku_4_a')->delete(array('id' => $id));
        return $query;
    }
}