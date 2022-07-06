<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class blog extends Model
{
    use HasFactory;
    public function getAllBlog () {
       return DB::select('SELECT * FROM blogs ORDER BY created_at DESC');
    }
    public function getDetail ($id) {
        return DB::select('SELECT * FROM blogs WHERE id = ?', [$id]);
    }
    public function addBlog ($data) 
    {
        DB::insert('INSERT INTO blogs (id, title,  content, author, link, created_at) values (?,?,?, ?, ?, ?)', $data);
    }
   
    public function updateBlog ($data, $id) {
        $data[] = $id;
        return DB::update('UPDATE blogs SET id=?, title=?, content=?, author=?, link=?, updated_at=? WHERE id = ?', $data);
    }
    public function deleteBlog ($id) {
        return DB::delete('DELETE FROM blogs WHERE id = ?', [$id]);
    }
}
