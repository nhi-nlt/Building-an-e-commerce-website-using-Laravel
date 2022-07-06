<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
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
Route::get('/contact', [ProductController::class, 'showContact'])->name('contact');
Route::get('/blog', [BlogController::class, 'showAllBlogForUser'])->name('blog');
Route::get('/products', [ProductController::class, 'showProductList'])->name('products');
Route::get('/products/{category}', [ProductController::class, 'searchProducts'])->name('search-products');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('', [ProductController::class, 'admin'])->name('index');
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
    
});
