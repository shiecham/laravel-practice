<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('/hello',function(){
    return "hello world";
});


Route::get('/user/{user_id}', function($user_id){
    return "this is user $user_id";
});

Route::get('/{username}/post/{post_id}',function($post_id,$username){
    return "Post: $post_id, This is the post of $username";
});

#controlloer

Route::get('/index',[PostController::class,'index']);
// in oeder for you to use your method inside your controller , you need to create a route;
// if you have 7 methods, you need 7 routes

Route::get('/post/{post_id}',[PostController::class,'viewPost']);

Route::get('/show/{name}',[PostController::class,'show']);

Route::get('/echo/{post_id}/{post_born}',[PostController::class,'echoPost']);

Route::get('/view-all',[PostController::class,'viewAll']);



Route::get('/view-post/{username}/{post_id}',[PostController::class,'viewPost']);


//eloquenst
Route::get('/save',[PostController::class,'save']);

Route::get('/create',[PostController::class,'create']);

Route::get('/display',[PostController::class,'display']);

Route::get('/delete/{id}',[PostController::class,'delete']);

Route::get('/deleteMultiple/{id1}/{id2}',[PostController::class,'deleteMultiple']);

Route::get('/destroy/{post_id}',[PostController::class,'destroy']);

// Read
Route::get('/read/{post_id}',[PostController::class,'read']);

Route::get('/read-where/{post_id}',[POstController::class,'readwhere']);
