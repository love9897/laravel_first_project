<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;

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

Route::get('/', [BandController::class, 'index']);

Route::get('/home', function () {
    return view('pages.home');
});
Route::resource('subscriber', SubscriberController::class);

Route::post('/contact', [ContactController::class, 'contact'])->name('blog.contact');

Route::get('/delete/{id}', [ContactController::class, 'delete']);

Route::get('/list', [ContactController::class, 'list']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/home', [BandController::class, 'index']);

Route::get('/band', [BandController::class, 'band'])->name('band.page');

Route::get('/tour', [BandController::class, 'tour']);

Route::get('/contact', [BandController::class, 'contact']);






