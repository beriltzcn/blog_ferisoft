<?php
namespace App\Http\Middleware;

use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();




Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('', [FrontendController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [Dashboard::class, 'index']);

    Route::get('category', [CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'create']);
    Route::post('add-category', [CategoryController::class, 'store'])->name('add-category');
    Route::get('edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [CategoryController::class, 'destroy']);

    Route::get('posts', [PostController::class, 'index']);
    Route::get('add-post', [PostController::class, 'create']);
    Route::post('add-post', [PostController::class, 'store']);
    Route::get('post/{post_id}', [PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [PostController::class, 'destroy']);

});
