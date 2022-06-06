<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "account";
    protected $primaryKey = 'username';

    public function getRole($id){
        $builder = $this->db->table($this->table);
        $builder->where('role', $id);
        return $builder->get()->getResultArray();
    }
    
}