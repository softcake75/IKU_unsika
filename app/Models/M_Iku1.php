<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Iku1 extends Model
{
    protected $table = 'iku_1';
    public $db;
    public $builder;

    public function get_Iku1($id = false)
    {
        if($id === false){
            return $this->table('iku_1')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_1')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_Iku1($data)
    {
        $query = $this->db->table('iku_1')->insert($data);
        return $query;
    }

    public function update_Iku1($data, $id)
    {
        $query = $this->db->table('iku_1')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_Iku1($id)
    {
        $query = $this->db->table('iku_1')->delete(array('id' => $id));
        return $query;
    }
}