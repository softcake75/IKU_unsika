<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku4_c extends Model
{
    protected $table = 'iku_4_c';
    public $db;
    public $builder;

    public function get_iku4_c($id = false)
    {
        if($id === false){
            return $this->table('iku_4_c')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_4_c')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku4_c($data)
    {
        $query = $this->db->table('iku_4_c')->insert($data);
        return $query;
    }

    public function update_iku4_c($data, $id)
    {
        $query = $this->db->table('iku_4_c')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku4_c($id)
    {
        $query = $this->db->table('iku_4_c')->delete(array('id' => $id));
        return $query;
    }
}