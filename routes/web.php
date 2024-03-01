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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/tambahsuplayer', [App\Http\Controllers\SuplayerController::class, 'create']);
Route::post('/savesuplayer', [App\Http\Controllers\SuplayerController::class, 'store']);
Route::get('/edit', [App\Http\Controllers\SuplayerController::class, 'edit']);
Route::get('/updatesuplayer', [App\Http\Controllers\SuplayerController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\SuplayerController::class, 'destroy']);



