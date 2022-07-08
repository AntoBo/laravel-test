<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{userToShow}', [UserController::class, 'show'])->name('show');

Route::get('/user/create', [UserController::class, 'create'])->name('create');

Route::post('/store', [UserController::class, 'store'])->name('store');

Route::put('/users/{userToEdit}/edit', [UserController::class, 'edit'])->name('edit');
//Route::put('/editUserRoute/{id}', [UserController::class, 'editUser'])->name('editUser');

Route::put('/users/{userToEdit}', [UserController::class, 'update'])->name('update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('destroy');

Route::resource('post', "App\Http\Controllers\PostController");

//Route::delete('/deleteUserRoute/{id}', function ($id){
////    \Log::info(json_encode('user deleting ', $id));
//})->name('deleteUser');


//Route::post('/createUserRoute', function () {
//    return view('welcome');
//})->name('createUser');
