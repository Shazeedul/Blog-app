<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontEndController;

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


// Front End Routes
Route::get('/', [FrontEndController::class,'home'])->name('website');
Route::get('/about', [FrontEndController::class,'about'])->name('website.about');
Route::get('/category/{slug}', [FrontEndController::class,'category'])->name('website.category');
Route::get('/tag/{slug}', [FrontEndController::class,'tag'])->name('website.tag');
Route::get('/contact', [FrontEndController::class,'contact'])->name('website.contact');
Route::get('/post/{slug}', [FrontEndController::class,'post'])->name('website.post');

Route::post('/contact', [FrontEndController::class,'send_message'])->name('website.contact');



Route::get('/dashboard', function () {
    return view('website.dashboard');
});





//Admin Panel Route
Route::prefix('admin')->middleware(['auth', 'role'])->group(function(){
    Route::get('/admin_dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/users', UserController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'profile_update'])->name('user.profile.update');
});




//Authentication Route
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('addRegister');
Route::post('login', [AuthController::class, 'check'])->name('checkLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
