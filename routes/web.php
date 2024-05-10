<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
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

// Route::get('/home', function () {
//     return view('pages.home');
// });
Route::resource('subscriber', SubscriberController::class);

Route::post('/contact', [ContactController::class, 'contact'])->name('blog.contact')->middleware(AuthMiddleware::class);

Route::get('/contact/{id}', [ContactController::class, 'get'])->name('blog.contact.edit')->middleware(AuthMiddleware::class);

Route::post('/update', [ContactController::class, 'update'])->name('blog.update');

Route::get('/delete/{id}', [ContactController::class, 'delete'])->middleware(AuthMiddleware::class);

Route::get('/list', [ContactController::class, 'list'])->middleware(AuthMiddleware::class);

Route::get('/login', [LoginController::class, 'index'])->middleware(GuestMiddleware::class);

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [BandController::class, 'home'])->middleware(AuthMiddleware::class);

Route::get('/band', [BandController::class, 'band'])->name('band.page')->middleware(AuthMiddleware::class);

Route::get('/tour', [BandController::class, 'tour'])->middleware(AuthMiddleware::class);

Route::get('/contact', [BandController::class, 'contact'])->middleware(AuthMiddleware::class);
;






