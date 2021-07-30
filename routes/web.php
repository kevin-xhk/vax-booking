<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/public', [PagesController::class, 'publicPage']);


Route::middleware(['auth'])->group(function(){
    Route::get('/user', [PagesController::class, 'userPage'])->middleware('roles:user,moderator,admin');
    Route::get('/moderator', [PagesController::class, 'moderatorPage'])->middleware('roles:moderator,admin');
    Route::get('/admin', [PagesController::class, 'adminPage'])->middleware('roles:admin');
});

require __DIR__.'/auth.php';
