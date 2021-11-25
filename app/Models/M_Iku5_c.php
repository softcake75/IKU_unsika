<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku5_c extends Model
{
    protected $table = 'iku_5_c';
    public $db;
    public $builder;

    public function get_iku5_c($id = false)
    {
        if($id === false){
            return $this->table('iku_5_c')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_5_c')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku5_c($data)
    {
        $query = $this->db->table('iku_5_c')->insert($data);
        return $query;
    }

    public function update_iku5_c($data, $id)
    {
        $query = $this->db->table('iku_5_c')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku5_c($id)
    {
        $query = $this->db->table('iku_5_c')->delete(array('id' => $id));
        return $query;
    }
}