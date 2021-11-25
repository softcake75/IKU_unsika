<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
 
class UserModel extends Model
{
    public $db;
    public $builder;

    protected $table = "user";
    protected $allowedFields = ['id_user', 'nama_user', 'password', 'fakultas', 'level'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getUser($id = false)
    {
        if($id === false){
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('id_user', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id));
        return $query;
    }
 
    public function deleteUser($id)
    {
        $query = $this->db->table('user')->delete(array('id_user' => $id));
        return $query;
    } 

}