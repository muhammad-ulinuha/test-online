<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';

    public function getPost($id = false){
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['idpost'=>$id]);
        }
    }

    public function getPostAuthor($id = false){
        $builder = $this->db->table($this->table);
        $builder->where('username', $id);
        return $builder->get()->getResultArray();
    }

    public function savePost($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editPost($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('idpost', $id);
        return $builder->update($data);
    }

    public function deletePost($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['idpost' => $id]);
    }
}