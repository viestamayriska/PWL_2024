<?php

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


 Route::get('/articles/{id}', function
    ($id) {
     return 'Halaman Artikel dengan ID' .$id;
    });

 Route::get('/user/{name?}', function ($name=null) {
        return 'Nama saya Rizka '.$name;
});


Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
    
