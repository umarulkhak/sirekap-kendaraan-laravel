<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [KendaraanController::class, 'home'])->name('home')->middleware('auth');

Route::get('/form-tambah', function () {
    return view('form-tambah');
})->middleware('auth');

Route::post('/tambah', [KendaraanController::class, 'tambah'])->middleware('auth');
Route::get('/hapus-kendaraan/{id}', [KendaraanController::class, 'hapus'])->middleware('auth');
Route::get('/ubah-kendaraan/{id}', [KendaraanController::class, 'formUbah'])->middleware('auth');
Route::post('/ubah-kendaraan', [KendaraanController::class, 'ubah'])->middleware('auth');
Route::get('/download-pdf', [KendaraanController::class, 'downloadPDF']);
