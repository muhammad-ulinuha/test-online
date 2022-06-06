<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table = 'account';

    public function getAkun($id = false){
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['username'=>$id]);
        }
    }

    public function saveAkun($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editAkun($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('username', $id);
        return $builder->update($data);
    }

    public function deleteAkun($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['username' => $id]);
    }

    public function jmlCriteria($id=false)
    {
        return $this->getWhere(['username'=>$id])->rowCount();
    }
}