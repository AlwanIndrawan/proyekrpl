<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OurworkController;
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
    return view('Home.index');
});
Route::get('/about', function () {
    return view('Home.about');
});
Route::get('/contact', function () {
    return view('Home.contact');
});
Route::get('/adminhome', function () {
    return view('Admin.adminhome');
});
Route::get('/post_page', function () {
    return view('Admin.post_page');
});
Route::get('/show_post', function () {
    return view('Admin.show_post');
});
Route::get('/login-page', function () {
    return view('Home.login-page');
});


Route::get('/blog', [NewsController::class, 'index']);
Route::get('/ourwork', [OurworkController::class, 'index']);

