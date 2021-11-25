<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku5_a extends Model
{
    protected $table = 'iku_5_a';
    public $db;
    public $builder;

    public function get_iku5_a($id = false)
    {
        if($id === false){
            return $this->table('iku_5_a')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_5_a')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku5_a($data)
    {
        $query = $this->db->table('iku_5_a')->insert($data);
        return $query;
    }

    public function update_iku5_a($data, $id)
    {
        $query = $this->db->table('iku_5_a')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku5_a($id)
    {
        $query = $this->db->table('iku_5_a')->delete(array('id' => $id));
        return $query;
    }
}