<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/koleksi', [MainController::class, 'koleksi']);

Route::get('/artikel', [MainController::class, 'artikel']);

Route::get('/detail_blog-{id}', [MainController::class, 'detail_blog']);

Route::get('/testimoni', [MainController::class, 'testimoni']);

Route::get('/k', [MainController::class, 'k']);
Route::post('/kritik_saran', [MainController::class, 'kritik_saran']);

Route::post('/insertdata', [MainController::class, 'kritik_saran']);

Route::get('/pemesanan', [MainController::class, 'pemesanan']);

Route::get('/kontak', [MainController::class, 'kontak']);




