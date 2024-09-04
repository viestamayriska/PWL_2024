<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;



// Praktikum 2
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
   
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [WelcomeController::class,'index']);
Route::get('/about', [WelcomeController::class,'about']);
Route::get('/articles/{Id}', [WelcomeController::class,'articles']);

Route::get('/hello', [HomeController::class,'hello']);
Route::get('/', [AboutController::class,'index']);
Route::get('/about', [ArticleController::class,'about']);
Route::get('/articles/{Id}', [WelcomeController::class,'articles']);

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

// Praktikum 1
Route::get('/welcome', function () {
    return 'Selamat Datang Viesta';
});


Route::get('/NIM', function () {
 return '2241760134 Viesta';
});

Route::get('/user/{viesta}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });


// Route::get('/articles/{id}', function
   // ($id) {
     //return 'Halaman Artikel dengan ID' .$id;
    //});

 Route::get('/user/{name?}', function ($name=null) {
        return 'Nama saya Rizka '.$name;
});


Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
    
