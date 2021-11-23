<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Dafop extends Model
{
    protected $table = 'dafop';
    public $db;
    public $builder;

    public function get_Dafop($id = false)
    {
        if($id === false){
            return $this->table('dafop')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('dafop')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_Dafop($data)
    {
        $query = $this->db->table('dafop')->insert($data);
        return $query;
    }

    public function update_Dafop($data, $id)
    {
        $query = $this->db->table('dafop')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_Dafop($id)
    {
        $query = $this->db->table('dafop')->delete(array('id' => $id));
        return $query;
    }
}