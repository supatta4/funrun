<?php namespace App\Models;

use CodeIgniter\Model;

class RegisModel extends Model {
    protected $table = 'regis';
    protected $primarykey = "ID";
    protected $allowedFields = ['ID','member','category_run'];
}