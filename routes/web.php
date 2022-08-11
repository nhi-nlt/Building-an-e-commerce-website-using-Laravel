<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/login', [ProductController::class, 'loginForUser'])->name('login');
Route::get('/register', [ProductController::class, 'registerForUser'])->name('register');
Route::get('/forgotPassword', [ProductController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/myCart', [ProductController::class, 'showMyCart'])->name('myCart');
Route::get('/contact', [ProductController::class, 'showContact'])->name('contact');
Route::get('/blog', [BlogController::class, 'showAllBlogForUser'])->name('blog');
Route::get('/products', [ProductController::class, 'showProductList'])->name('products');
Route::get('/products/{category}', [ProductController::class, 'searchProducts'])->name('search-products');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/login', [ProductController::class, 'loginForAdmin'])->name('login');
    Route::get('', [ProductController::class, 'admin'])->name('index');
    // Route::get('/categories', [ProductController::class, 'showCategories'])->name('categories');
    // Route::get('/addCategory', [ProductController::class, 'showAddCategoryForm'])->name('addCategory');
    Route::get('/add', [ProductController::class, 'showAddForm'])->name('add');
    Route::post('/add', [ProductController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [ProductController::class, 'getEdit'])->name('edit');
    Route::post('/update', [ProductController::class, 'postEdit'])->name('post-edit');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    Route::prefix('blog')->name('blog.')->group(function(){
        Route::get('/', [BlogController::class, 'showAllBlog'])->name('index');
        Route::get('/add', [BlogController::class, 'showAddForm'])->name('add');
        Route::post('/add', [BlogController::class, 'postAdd'])->name('post-add');
        Route::get('/edit/{id}', [BlogController::class, 'getEdit'])->name('edit');
        Route::post('/update', [BlogController::class, 'postEdit'])->name('post-edit');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    });
    Route::prefix('category')->name('category.')->group(function(){
        // Route::get('/', [ProductController::class, 'showCategories'])->name('categories');
        Route::get('/', [CategoriesController::class, 'showCategories'])->name('index');
        Route::get('/add', [CategoriesController::class, 'showAddCategoryForm'])->name('add');
        Route::post('/add', [CategoriesController::class, 'postAdd'])->name('post-add');
        // Route::get('/edit/{id}', [CategoriesController::class, 'getEdit'])->name('edit');
        // Route::post('/update', [CategoriesController::class, 'postEdit'])->name('post-edit');
        // Route::get('/delete/{id}', [CategoriesController::class, 'delete'])->name('delete');
    });
    
});
