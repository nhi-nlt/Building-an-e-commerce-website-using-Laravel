<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rule;
use  Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use App\Models\blog;
use App\Http\Controllers\View;
use App\Models\Category;

class CategoriesController extends Controller
{   
    public function __construct () {
    }
   
    public function showAddForm () {
        $categories = new Category();
        $categoriesList = $categories->getAllCategories();
        return view('manager.add', compact('categoriesList'));
    }
    public function showCategories() {
        $categories = new Category();
        $categoriesList = $categories->getAllCategories();
        return view('manager.categories', compact('categoriesList'));
    }
    public function showAddCategoryForm () {
        return view('manager.addCategory');
    }
    public function postAdd (Request $request) {
        $categories = new Category();
        $request->validate([
            'category_id'=>'required||unique:categories',
            'category_name' => ' required',
            'category_description' => 'required',
            
        ], [
            'category_id.required' => 'Category ID cannot be blank',
            'category_id.unique' => 'Category ID is available',
            'category_name.required' => 'Category Name cannot be blank',
            'category_description.required' => 'Category Description cannot be blank',
            
        ]);
        $dateInsert = [
            $request->category_id,
            $request->category_name,
            $request->category_description,
            
            date("Y-m-d H:i:s")
        ];
       
        $categoriesList = $categories->addCategory($dateInsert);
        return redirect()->route('admin.category.index')->with('msg', 'Added successfully');
    }
    // public function getEdit (Request $request, $id=0) {
    //     $categories = new Category();
    //     $categoriesList = $categories->getAllCategories();
    //     $products = new Product();
    //     if (!empty($id)){
    //         $productDetail = $products->getDetail($id);
    //         if (!empty($productDetail[0])){
    //             $request->session()->put('id', $id);
    //             $productDetail = $productDetail[0];
    //             // dd($productDetail);  
    //         }else{
    //             return redirect()->route('admin.index')->with('msg','The Product is not available');
    //         }
    //     }else{
    //         return redirect()->route('admin.index')->with('msg','The connection is not available');
    //     }
    //     return view('manager.edit', compact('productDetail', 'categoriesList'));
    // }
    public function getEdit (Request $request, $id=0) {
        $categories = new Category();
        if (!empty($id)){
            $categoryDetail = $categories->getDetail($id);
            if (!empty($categoryDetail[0])){
                $request->session()->put('id', $id);
                $categoryDetail = $categoryDetail[0];
            }else{
                return redirect()->route('admin.category.index')->with('msg','The category is not available');
            }
        }else{
            return redirect()->route('admin.category.index')->with('msg','The connection is not available');
        }
        return view('manager.editCategory', compact('categoryDetail'));
    }
    public function postEdit (Request $request, $id=0) {
        $blogs = new blog();
        $id = session('id');
        if (empty($id)){
            return back()->with('msg','The connection is not available');
        }
        $request->validate([
            'id'=>'required',
            'title' => ' required',
            'content' => 'required',
            'author'=>'required',
            'link'=>'required'
            
        ], [
            'id.required'=>'id can not blank',
            'title.required' => 'Title cannot be blank',
            'content.required' => 'Content cannot be blank',
            'author.required' => 'Author cannot be blank',
            'link.required' => 'Link cannot be blank'
        ]);
        $dataUpdate = [
            $request->id,
            $request->title,
            $request->content,
            $request->author,
            $request->link,
            date("Y-m-d H:i:s")
        ];
        $blogs->updateBlog($dataUpdate, $id);
        return back()->with('msg','Updated successfully');
    }
    public function delete ($id=0) {
        $blogs = new blog();
        if (!empty($id)){
            $blogDetail = $blogs->getDetail($id);
            if (!empty($blogDetail[0])){
                $deleteStatus = $blogs->deleteBlog($id);
                if ($deleteStatus) {
                    $msg = 'Deleted Successful';
                }else {
                    $msg = 'Error';
                }
            }else{
                $msg = 'The Blog is not available';
            }
        }else{
           $msg = 'The connection is not available';
        }
        return redirect()->route('admin.blog.index')->with('msg',$msg);
    }
}
