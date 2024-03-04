<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/suplayer', [App\Http\Controllers\SuplayerController::class, 'index']);
Route::get('/tambahsuplayer', [App\Http\Controllers\SuplayerController::class, 'create']);
Route::post('/savesuplayer', [App\Http\Controllers\SuplayerController::class, 'store']);
Route::get('/edit/{id}', [App\Http\Controllers\SuplayerController::class, 'edit']);
Route::put('/updatesuplayer/{id}', [App\Http\Controllers\SuplayerController::class, 'update']);
Route::get('/delete/{id}', [App\Http\Controllers\SuplayerController::class, 'destroy']);