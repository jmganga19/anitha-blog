<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\FrontEndController;


// Route::get('/', function () {
//     return view('welcome');
// });

//public routes

Route::get('/',[FrontEndController::class,'index'])->name('/');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('about',[AboutController::class,'index'])->name('about');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//protected routes
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {

Route::get('dashboard',[DashboardController::class,'index']);
Route::get('post',[PostController::class,'index']);
Route::get('add-post',[PostController::class,'create']);
Route::post('add-post',[PostController::class,'store']);
Route::get('edit-post/{post_id}',[PostController::class,'edit']);
Route::put('update-post/{post_id}',[PostController::class,'update']);
//Route::get('delete-post/{post_id}',[PostController::class,'destroy']);
Route::post('delete-post',[PostController::class,'destroy']);

Route::get('users',[UserController::class,'index']);

});
