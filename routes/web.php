<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ProfileController;

// Front End Routes
Route::get('/', [FrontEndController::class,'home'])->name('website');
Route::get('/about', [FrontEndController::class,'about'])->name('website.about');
Route::get('/category/{slug}', [FrontEndController::class,'category'])->name('website.category');
Route::get('/tag/{slug}', [FrontEndController::class,'tag'])->name('website.tag');
Route::get('/contact', [FrontEndController::class,'contact'])->name('website.contact');
Route::get('/post/{slug}', [FrontEndController::class,'post'])->name('website.post');

Route::post('/contact', [FrontEndController::class,'send_message'])->name('website.contact');

Route::post('/comment/store', [FrontEndController::class,'comment'])->name('website.comment');
Route::post('/reply/store', [FrontEndController::class,'replyComment'])->name('website.reply');



Route::get('/profile', [ProfileController::class, 'index'])->name('website.profile');


//Password Reset Route
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');





//Admin Panel Route
Route::prefix('admin')->middleware(['auth', 'role'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/users', UserController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile', [UserController::class, 'profile_update'])->name('user.profile.update');

    // setting
    Route::get('setting', [SettingController::class,'edit'])->name('setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('setting.update');

    // Contact message
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});




//Authentication Route
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('addRegister');
Route::post('login', [AuthController::class, 'check'])->name('checkLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Google Login Route
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback']);

//Facebook Login Route
Route::get('login/facebook', [AuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [AuthController::class, 'handleFacebookCallback']);


//Github Login Route
Route::get('login/github', [AuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [AuthController::class, 'handleGithubCallback']);
