<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', function () {
    return view('loginpage');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello',[IndexController::class,'sayhello']);

Route::get('/hello2',[IndexController::class,'sayhello2']);

Route::get('/hello3',[IndexController::class,'sayHello3']);

Route::get('/loginpage',[IndexController::class,'login']);

Route::get('/form', function () {
    return view('user');
});
//Route::post('welcome/login',[LoginController::class,'checklogin'])->name('welcome.login');
Route::post('/login',[LoginController::class,'checklogin']);
Route::get('/logout',[LoginController::class,'logout']);


?>

