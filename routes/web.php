<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/order/pdf', [LaundryController::class, 'createPDF']);
// Route::prefix('order')->middleware('auth')->group(function() {
 

Auth::routes();    
// })
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
// Route::get('/layanan', [App\Http\Controllers\HomeController::class, 'layanan'])->name('layanan');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('order', LaundryController::class)->middleware(['auth','roleAdmin']);
Route::resource('user', UserController::class);




