<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model {
    protected $table = 'category';
    protected $primarykey = "category_id";
    protected $allowedFields = ['category_id','category_name','length','price'];
}