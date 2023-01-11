<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LihatBukuController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\sessionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('landing-login');
});
// Route::get('/coba', function () {
//     return view('landing');
// })->middleware('user_login');


Route::resource('/add', BukuController::class);

Route::get('/login', [sessionController::class, 'formlogin']);
Route::post('/login', [sessionController::class, 'login']);

Route::get('/register', [sessionController::class, 'formregister']);
Route::post('/register', [sessionController::class, 'register']);
// Route::post('/post', [sessionController::class, 'index']);
// Route::post('/sesi/login', [sessionController::class, 'login']);

// Route::post()

Route::get('/tampil', [LihatBukuController::class, 'index']);

// Route::post('/tampil', [LihatBukuController::class, 'login']);
// Route::post('/tampil', [sessionController::class, 'login']);

//pinjaman

Route::get('/pinjaman', [PinjamController::class, 'index']);
Route::get('/pinjam/{id}/{nama_buku}/{gambar_buku}/{penerbit_buku}/{pengarang_buku}/{isbn}/tambah', [PinjamController::class, 'pinjam']);
Route::get('/pinjaman/{id}', [PinjamController::class, 'delete']);
Route::get('/pinjaman/{id}/{nama_buku}/{gambar_buku}/{penerbit_buku}/{pengarang_buku}/{isbn}/baca', [PinjamController::class, 'baca']);

//baca
Route::get('/baca', [PinjamController::class, 'baca']);
Route::get('/pura-baca', [PinjamController::class, 'purabaca']);
