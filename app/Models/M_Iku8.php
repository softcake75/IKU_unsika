<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku8 extends Model
{
    protected $table = 'iku_8';
    public $db;
    public $builder;

    public function get_iku_8($id = false)
    {
        if($id === false){
            return $this->table('iku_8')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_8')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku_8($data)
    {
        $query = $this->db->table('iku_8')->insert($data);
        return $query;
    }

    public function update_iku_8($data, $id)
    {
        $query = $this->db->table('iku_8')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku_8($id)
    {
        $query = $this->db->table('iku_8')->delete(array('id' => $id));
        return $query;
    }
}