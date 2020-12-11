<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/test',function(){
    return view('test');
});
Route::get('/example',function(){
    $user="Mg Mg";
    return view('example',compact('user'));
});
Route::get('/customers/customeradd',[CustomerController::class,'add'])->middleware('auth');
Route::post('/customers/customeradd',[CustomerController::class,'insert']);
Route::get('/customers/customerlist',[CustomerController::class,'list']);
Route::get('/customers/customerdetail/{id}',[CustomerController::class,'detail']);
Route::get('/customers/customerupdate/{id}',[CustomerController::class,'modify']);
Route::post('/customers/customerupdate',[CustomerController::class,'update']);
Route::get('/customers/customerdelete/{id}',[CustomerController::class,'delete']);

// Route::get('/posts',[PostController::class,'index']);
// Route::get('/posts/create',[PostController::class,'create']);
// Route::post('/posts',[PostController::class,'store']);
// Route::get('/posts/{id}',[PostController::class,'show']);
// Route::get('/posts/{id}/edit',[PostController::class,'edit']);
// Route::patch('posts/{id}',[PostController::class,'update']);
// Route::delete('posts/{id}',[PostController::class,'destroy']);

Route::resource('/posts',PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
