<?php

use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('/visit', function () {
    return view('visit', [
        "title" => "Know More",
    ]);
});

Route::get('/catalog', function () {
    return view('catalog', [
        "title" => "Catalog",
    ]);


});

Route::get('/login', function () {
    return view('login');


});

Route::get('/register', function () {
    return view('register');

});

Route::post('/register', [UserController::class,'registerAction']);
Route::post('/login', [UserController::class,'loginAction']);
Route::get('/logout', [UserController::class,'destroy']);