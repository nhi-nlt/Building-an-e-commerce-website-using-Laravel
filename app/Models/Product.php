<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function getAllProduct () 
    {
        $products =DB::select('SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id ORDER BY created_at DESC');
        return $products;
    }
    public function getProductByCategory ($category) 
    {
        $products =DB::select('SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE category_name = ? ORDER BY products.category_id DESC', [$category]);
        return $products;
    }
   
    public function addProduct ($data) 
    {
        DB::insert('INSERT INTO products (id, name, category_id, description, price, quantity, img_path, created_at) values (?,?, ?, ?, ?, ?, ?, ?)', $data); 
    }
    public function getDetail ($id) {
        return DB::select('SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE product_id = ?', [$id]);
    }
    public function updateProduct ($data, $id) {
        $data[] = $id;
        return DB::update('UPDATE products SET id=?, name=?, category_id=?, description=?, price=?, quantity=?, img_path=?, updated_at=? WHERE id = ?', $data);
    }
    public function deleteProduct ($id) {
        return DB::delete('DELETE FROM products WHERE product_id = ?', [$id]);
    }
}
