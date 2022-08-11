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

class ProductController extends Controller
{   
    public function __construct () {
    }
    public function index () {
        $products = new Product();
        $blogs = new blog();
        $blogList = $blogs->getAllBlog();
        $iphoneList = $products->getProductByCategory('iphone');
        $macList = $products->getProductByCategory('mac');
        $ipadList = $products->getProductByCategory('ipad');
        return view('user.index')
        ->with (compact('iphoneList'))
        ->with(compact('macList'))
        ->with (compact('ipadList'))
        ->with(compact('blogList'));
    }
    public function loginForUser(){
        return view('user.loginUser');
    }
    public function loginForAdmin(){
        return view('manager.loginAdmin');
    }
    public function registerForUser(){
        return view('user.registerUser');
    }
    public function forgotPassword(){
        return view('user.forgotPassword');
    }
    public function showMyCart(){
        return view('user.myCart');
    }
    public function showProductList () {
        $products = new Product();
        $productsList = $products->getAllProduct();
        return view ('user.productList', compact('productsList'));
    }

    public function searchProducts ($category) {
        $products = new Product();
        $productsList = $products->getProductByCategory($category);
        return view ('user.search', compact('productsList', 'category'));
    }
    public function showContact () {
        return view('user.contact');
    }
    public function admin () {
        $products = new Product();
        $productsList = $products->getAllProduct();
        return view ('manager.product', compact('productsList'));
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
    
    public function postAdd (Request $request) {
        $products = new Product();
        $request->validate([
            'id'=>'required||unique:products',
            'name' => ' required ||unique:products',
            'price' => 'required',
            'description' =>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'quantity' => 'required'
        ], [
            'id.required' => 'ID cannot be blank',
            'id.unique' => 'ID is available',
            'name.required' => 'Name cannot be blank',
            'name.unique' => 'Product is available',
            'price.required' => 'Price cannot be blank',
            'description.required' => 'Description cannot be blank',
            'category_id.required' => 'Category cannot be blank',
            'quantity.required' => 'Quantity cannot be blank',
            'img_path.required' => 'Choose The Images, Please'
        ]);
        $file= $request->img_path;
        $filename= $file->getClientOriginalName();
        $file-> move(public_path('images'), $filename);
        $dateInsert = [
            $request->id,
            $request->name,
            $request->category_id,
            $request->description,
            $request->price,
            $request->quantity,
            $filename,
            date("Y-m-d H:i:s")
        ];
        $productsList = $products->addProduct($dateInsert);
        return redirect()->route('admin.index')->with('msg', 'Added successfully');
    }
    public function getEdit (Request $request, $id=0) {
        $categories = new Category();
        $categoriesList = $categories->getAllCategories();
        $products = new Product();
        if (!empty($id)){
            $productDetail = $products->getDetail($id);
            if (!empty($productDetail[0])){
                $request->session()->put('id', $id);
                $productDetail = $productDetail[0];
                // dd($productDetail);  
            }else{
                return redirect()->route('admin.index')->with('msg','The Product is not available');
            }
        }else{
            return redirect()->route('admin.index')->with('msg','The connection is not available');
        }
        return view('manager.edit', compact('productDetail', 'categoriesList'));
    }
    public function postEdit (Request $request, $id=0) {
        $products = new Product();
        $id = session('id');
        $productDetail = $products->getDetail($id);
        if (empty($id)){
            return back()->with('msg','The connection is not available');
        }
        $request->validate([
            'id' =>[
                ' required',
                Rule::unique('products')->ignore($id)
            ],
            'name' =>[
                ' required',
                Rule::unique('products')->ignore($id)
            ],
            'price' => 'required',
            'description' =>'required',
            // 'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'quantity' => 'required'
        ], [
            'id.required'=>'ID cannot be blank',
            'id.unique'=>'ID  is available',
            'name.required' => 'Name cannot be blank',
            'name.unique' => 'Product is available',
            'price.required' => 'Price cannot be blank',
            'description.required' => 'Description cannot be blank',
            'category_id.required' => 'Category cannot be blank',
            'quantity.required' => 'Quantity cannot be blank',
            // 'img_path.required' => 'Choose The Images, Please'
        ]);
        $tempFile = $request->filename;
        $file= $request->img_path;
        $oldFile = $productDetail[0]->img_path;
        if(empty($file)){
            $filename = $tempFile;
        }else{
            if(File::exists("images/$oldFile")){
                File::delete("images/$oldFile");
            }
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
        }
        $dataUpdate = [
            $request->id,
            $request->name,
            $request->category_id,
            $request->description,
            $request->price,
            $request->quantity,
            $filename,
            date("Y-m-d H:i:s")
        ];
        $products->updateProduct($dataUpdate, $id);
        return back()->with('msg','Updated successfully');
    }
    public function delete ($product_id=0) {
        $products = new Product();
        $productDetail = $products->getDetail($product_id);
        if (!empty($product_id)){
            $productDetail = $products->getDetail($product_id);
            if (!empty($productDetail[0])){
                $path = $productDetail[0]->img_path;
                File::delete("images/$path");
                $deleteStatus = $products->deleteProduct($product_id);
                if ($deleteStatus) {
                    $msg = 'Deleted Successfully';
                }else {
                    $msg = 'Error';
                }
            }else{
                $msg = 'The Product is not available';
            }
        }else{
           $msg = 'The connection is not available';
        }
        return redirect()->route('admin.index')->with('msg',$msg);
    }
   
}
