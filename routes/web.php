<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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
Route::get('/', [CategoriesController::class, 'index'])->name('home');
Route::get('/contact', [CategoriesController::class, 'showContact'])->name('contact');
Route::get('/blog', [BlogController::class, 'showAllBlogForUser'])->name('blog');
Route::get('/products', [CategoriesController::class, 'showProductList'])->name('products');
Route::get('/products/{category}', [CategoriesController::class, 'searchProducts'])->name('search-products');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('', [CategoriesController::class, 'admin'])->name('index');
    Route::get('/add', [CategoriesController::class, 'showAddForm'])->name('add');
    Route::post('/add', [CategoriesController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [CategoriesController::class, 'getEdit'])->name('edit');
    Route::post('/update', [CategoriesController::class, 'postEdit'])->name('post-edit');
    Route::get('/delete/{id}', [CategoriesController::class, 'delete'])->name('delete');
    Route::prefix('blog')->name('blog.')->group(function(){
        Route::get('/', [BlogController::class, 'showAllBlog'])->name('index');
        Route::get('/add', [BlogController::class, 'showAddForm'])->name('add');
        Route::post('/add', [BlogController::class, 'postAdd'])->name('post-add');
        Route::get('/edit/{id}', [BlogController::class, 'getEdit'])->name('edit');
        Route::post('/update', [BlogController::class, 'postEdit'])->name('post-edit');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    });
    
});