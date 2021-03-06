<?php

namespace App\Models;
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
    return view('posts', [
        'allPosts' => Post::with('category')->get()

    ]);
});



Route::get('post/{post}', function (Post $post) {
    return view('post', [
        'content' => $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'allPosts' => $category->posts
    ]);
});





//Route::get('post/{post}', function ( $id) {
//    return view('post', [
//        'content' => Post::findOrFail($id)
//    ]);
//});
//
//
