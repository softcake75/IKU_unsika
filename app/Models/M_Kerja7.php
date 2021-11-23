<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kerja7 extends Model
{
    protected $table = 'kertas_kerja7';
    public $db;
    public $builder;

    public function get_kerja7($id = false)
    {
        if($id === false){
            return $this->table('kertas_kerja7')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kertas_kerja7')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_kerja7($data)
    {
        $query = $this->db->table('kertas_kerja7')->insert($data);
        return $query;
    }

    public function update_kerja7($data, $id)
    {
        $query = $this->db->table('kertas_kerja7')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_kerja7($id)
    {
        $query = $this->db->table('kertas_kerja7')->delete(array('id' => $id));
        return $query;
    }
}