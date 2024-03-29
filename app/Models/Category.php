<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{   
    use HasFactory;
    protected $table = 'categories';
    public function getAllCategories(){
        $categories = DB::select('SELECT * FROM categories ORDER BY category_id ASC');
        return $categories;
    }
}
