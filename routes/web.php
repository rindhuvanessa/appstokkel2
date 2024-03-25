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
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/suplayer', [App\Http\Controllers\SuplayerController::class, 'index']);
Route::get('/tambahsuplayer', [App\Http\Controllers\SuplayerController::class, 'create']);
Route::post('/savesuplayer', [App\Http\Controllers\SuplayerController::class, 'store']);
Route::get('/edit/{id}', [App\Http\Controllers\SuplayerController::class, 'edit']);
Route::put('/updatesuplayer/{id}', [App\Http\Controllers\SuplayerController::class, 'update']);
Route::get('/hapus/{id}', [App\Http\Controllers\SuplayerController::class, 'destroy']);

Route::get('/stok', [App\Http\Controllers\StokController::class, 'index']);
Route::get('/tambahstok', [App\Http\Controllers\StokController::class, 'create']);
Route::post('/savestok', [App\Http\Controllers\StokController::class, 'store']);
Route::get('/editstok/{id}', [App\Http\Controllers\StokController::class, 'edit']);
Route::put('/updatestok/{id}', [App\Http\Controllers\StokController::class, 'update']);
Route::get('/hapusstok/{id}', [App\Http\Controllers\StokController::class, 'destroy']);

Route::get('/bmasuk', [App\Http\Controllers\BmasukController::class, 'index']);
Route::get('/tambahbmasuk', [App\Http\Controllers\BmasukController::class, 'create']);
Route::post('/savebmasuk', [App\Http\Controllers\BmasukController::class, 'store']);
Route::get('/editbmasuk/{id}', [App\Http\Controllers\BmasukController::class, 'edit']);
Route::put('/updatebmasuk/{id}', [App\Http\Controllers\BmasukController::class, 'update']);
Route::get('/hapusbmasuk/{id}', [App\Http\Controllers\BmasukController::class, 'destroy']);

Route::get('/bkeluar', [App\Http\Controllers\BkeluarController::class, 'index']);
Route::get('/tambahbkeluar', [App\Http\Controllers\BkeluarController::class, 'create']);
Route::post('/savebkeluar', [App\Http\Controllers\BkeluarController::class, 'store']);
Route::get('/editbkeluar/{id}', [App\Http\Controllers\BkeluarController::class, 'edit']);
Route::put('/updatebkeluar/{id}', [App\Http\Controllers\BkeluarController::class, 'update']);
Route::get('/hapusbkeluar/{id}', [App\Http\Controllers\BkeluarController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/tambahpelanggan', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/savepelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/editpelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::put('/updatepelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::get('/hapuspelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

Route::get('/recap', [App\Http\Controllers\RecapController::class, 'index']);
Route::get('/tambahrecap', [App\Http\Controllers\RecapController::class, 'create']);
Route::post('/saverecap', [App\Http\Controllers\RecapController::class, 'store']);
Route::get('/editrecap/{id}', [App\Http\Controllers\RecapController::class, 'edit']);
Route::put('/updaterecap/{id}', [App\Http\Controllers\RecapController::class, 'update']);
Route::get('/hapusrecap/{id}', [App\Http\Controllers\RecapController::class, 'destroy']);