<?php


use App\Http\Controllers\ContactController;
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
    return view('home');
});
Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/services', function () {
    return view('services');
});Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::post('/signUp',[UserController::class,'saveUser']);
Route::post('/contact',[ContactController::class,'saveContact']);
Route::get('/faq',[ContactController::class,'showContact']);
