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

Route::get('/', [UserController::class, 'index']);

Route::post('/createUserRoute', [UserController::class, 'createUser'])->name('createUser');

Route::delete('/deleteUserRoute/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

//Route::delete('/deleteUserRoute/{id}', function ($id){
////    \Log::info(json_encode('user deleting ', $id));
//})->name('deleteUser');


//Route::post('/createUserRoute', function () {
//    return view('welcome');
//})->name('createUser');
