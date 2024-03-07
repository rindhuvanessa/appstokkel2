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

Route::get('/stok', [App\Http\Controllers\StokController::class, 'index']);
Route::get('/tambahstok', [App\Http\Controllers\StokController::class, 'create']);
<<<<<<< HEAD
Route::post('/savestok', [App\Http\Controllers\StokController::class, 'store']);
Route::get('/editstok/{id}', [App\Http\Controllers\StokController::class, 'edit']);
Route::put('/updatestok/{id}', [App\Http\Controllers\StokController::class, 'update']);
Route::get('/deletestok/{id}', [App\Http\Controllers\StokController::class, 'destroy']);
=======
Route::post('/savestokr', [App\Http\Controllers\StokController::class, 'store']);
Route::get('/editstok/{id}', [App\Http\Controllers\StokController::class, 'edit']);
Route::put('/updatestok/{id}', [App\Http\Controllers\StokController::class, 'update']);
Route::get('/deletestok/{id}', [App\Http\Controllers\StokController::class, 'destroy']);

Route::get('/bmasukk', [App\Http\Controllers\BmasukController::class, 'index']);
Route::get('/tambahbmasukk', [App\Http\Controllers\BmasukController::class, 'create']);
Route::post('/savebmasukkr', [App\Http\Controllers\BmasukController::class, 'store']);
Route::get('/editbmasukk/{id}', [App\Http\Controllers\BmasukController::class, 'edit']);
Route::put('/updatebmasukk/{id}', [App\Http\Controllers\BmasukController::class, 'update']);
Route::get('/deletebmasukk/{id}', [App\Http\Controllers\BmasukController::class, 'destroy']);
>>>>>>> e4e7a8ff25ab8fa16fb5e498a9305a845700f72c
