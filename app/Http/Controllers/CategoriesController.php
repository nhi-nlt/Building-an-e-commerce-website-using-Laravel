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

class CategoriesController extends Controller
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
        return view('manager.add');
    }
    public function postAdd (Request $request) {
        $products = new Product();
        $request->validate([
            'id'=>'required||unique:products',
            'name' => ' required ||unique:products',
            'price' => 'required',
            'description' =>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'quantity' => 'required'
        ], [
            'id.required' => 'ID can not blank',
            'id.unique' => 'ID is available',
            'name.required' => 'Name can not blank',
            'name.unique' => 'Product is available',
            'price.required' => 'Price can not blank',
            'description.required' => 'Description can not blank',
            'category.required' => 'Category can not blank',
            'quantity.required' => 'Quantity can not blank',
            'img_path.required' => 'Choose The Images, Please'
        ]);
        $file= $request->img_path;
        $filename= $file->getClientOriginalName();
        $file-> move(public_path('images'), $filename);
        $dateInsert = [
            $request->id,
            $request->name,
            $request->category,
            $request->description,
            $request->price,
            $request->quantity,
            $filename,
            date("Y-m-d H:i:s")
        ];
        $productsList = $products->addProduct($dateInsert);
        return redirect()->route('admin.index')->with('msg', 'Add successful');
    }
    public function getEdit (Request $request, $id=0) {
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
        return view('manager.edit', compact('productDetail'));
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
            'category' => 'required',
            'quantity' => 'required'
        ], [
            'id.required'=>'ID can not blank',
            'id.unique'=>'ID  is available',
            'name.required' => 'Name can not blank',
            'name.unique' => 'Product is available',
            'price.required' => 'Price can not blank',
            'description.required' => 'Description can not blank',
            'category.required' => 'Category can not blank',
            'quantity.required' => 'Quantity can not blank',
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
            $request->category,
            $request->description,
            $request->price,
            $request->quantity,
            $filename,
            date("Y-m-d H:i:s")
        ];
        $products->updateProduct($dataUpdate, $id);
        return back()->with('msg','Update Success');
    }
    public function delete ($id=0) {
        $products = new Product();
        $productDetail = $products->getDetail($id);
        if (!empty($id)){
            $productDetail = $products->getDetail($id);
            if (!empty($productDetail[0])){
                $path = $productDetail[0]->img_path;
                File::delete("images/$path");
                $deleteStatus = $products->deleteProduct($id);
                if ($deleteStatus) {
                    $msg = 'Deleted Successful';
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
