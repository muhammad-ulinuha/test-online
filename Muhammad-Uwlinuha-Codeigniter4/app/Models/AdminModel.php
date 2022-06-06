<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "account";
    protected $primaryKey = 'username';
    protected $rule = 'rule';
    
}