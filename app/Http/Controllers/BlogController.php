<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function showAllBlog () {
        $blogs = new blog();
        $blogList = $blogs->getAllBlog();
        return view ('manager.blog', compact('blogList'));
    }
    public function showAllBlogForUser () {
        $blogs = new blog();
        $blogList = $blogs->getAllBlog();
        return view ('user.blog', compact('blogList'));
    }
    public function showAddForm () {
        return view('manager.addBlog');
    }
    
    public function postAdd (Request $request) {
        $blogs = new blog();
        $request->validate([
            'blog_code'=>'required||unique:blogs',
            'title' => ' required',
            'content' => 'required',
            'author'=>'required',
            
            
        ], [
            'blog_code.required' => 'ID cannot be blank',
            'blog_code.unique' => 'ID is available',
            'title.required' => 'Title cannot be blank',
            'content.required' => 'Content cannot be blank',
            'author.required' => 'Author cannot be blank',
            
        ]);
        $dateInsert = [
            $request->blog_code,
            $request->title,
            $request->content,
            $request->author,
            
            date("Y-m-d H:i:s")
        ];
       
        $blogsList = $blogs->addBlog($dateInsert);
        return redirect()->route('admin.blog.index')->with('msg', 'Added successfully');
    }
    public function getEdit (Request $request, $id=0) {
        $blogs = new blog();
        if (!empty($id)){
            $blogDetail = $blogs->getDetail($id);
            if (!empty($blogDetail[0])){
                $request->session()->put('id', $id);
                $blogDetail = $blogDetail[0];
            }else{
                return redirect()->route('admin.blog.index')->with('msg','The Blog is not available');
            }
        }else{
            return redirect()->route('admin.blog.index')->with('msg','The connection is not available');
        }
        return view('manager.editBlog', compact('blogDetail'));
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
