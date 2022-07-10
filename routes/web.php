<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return redirect('/users');
});

//USERS

Route::get('/users', [UserController::class, 'index'])->name('index');

Route::get('/users/{user}', [UserController::class, 'show'])->name('show');

Route::get('/user/create', [UserController::class, 'create'])->name('create');

Route::post('/users', [UserController::class, 'store'])->name('store');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
//Route::put('/editUserRoute/{id}', [UserController::class, 'editUser'])->name('editUser');

Route::put('/users/{user}', [UserController::class, 'update'])->name('update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy');

// POSTS

Route::post('/posts', [PostController::class, 'create'])->name('create-post');


//Route::resource('post', "App\Http\Controllers\PostController");


//Route::delete('/deleteUserRoute/{id}', function ($id){
////    \Log::info(json_encode('user deleting ', $id));
//})->name('deleteUser');


//Route::post('/createUserRoute', function () {
//    return view('welcome');
//})->name('createUser');
