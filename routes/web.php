<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OurworkController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', function () {
    return view('Home.index');
});
Route::get('/about', function () {
    return view('Home.about');
});
Route::get('/contact', function () {
    return view('Home.contact');
});

Route::get('/berita', function () {
    return view('Home.beritablog');
});

Route::get('/dapur', function () {
    return view('Home.rmdapur');
});


Route::get('/adminhome', function () {
    return view('Admin.adminhome');
})->middleware('auth');
// Route::get('/post_page', function () {
//     return view('Admin.post_page');
// });
// Route::get('/show_post', function () {
//     return view('Admin.show_post');
// });
Route::get('/login-page', function () {
    return view('Home.login-page');
});


Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::resource('/admin-blog', BlogController::class);
Route::get('admin-blog', [BlogController::class, 'index']);
Route::post('admin-blog-tampilkan', [BlogController::class, 'store'])->name('admin-blog.store');
Route::get('admin-blog-tampilkan', [BlogController::class, 'tampilkan']);
Route::get('admin-blog/{id}', [BlogController::class, 'edit']);
Route::put('admin-blog/{id}', [BlogController::class, 'update']);
Route::delete('admin-blog/{id}', [BlogController::class, 'destroy']);

Route::get('/blog', [BeritaController::class, 'index']);
Route::get('/ourwork', [OurworkController::class, 'index']);

