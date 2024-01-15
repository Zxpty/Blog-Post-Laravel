<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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


Route::get('/', function(){
   return view('auth.login');
});

// Login
Route::get('/{url}', [UserController::class, 'loginGet'])->where(['url' => 'auth|auth/login'])->name('auth');
Route::post('/login', [UserController::class, 'login']);

// Register
Route::get('/auth/register', [UserController::class, 'registerGet']);
Route::post('/auth/register', [UserController::class, 'register']);

//Log out
Route::post('/auth/logout', [UserController::class, 'logout']);

// main
Route::middleware(['auth'])->group(function () {
   Route::controller(HomeController::class)->group(function () {
      Route::get('/home', 'index');
   });
});




//Blog post Routes
Route::get('/home', [PostController::class, 'viewPosts'])->name('home');
Route::post('/home', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
