<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Menucontroller;
use App\Http\Controllers\Kategoricontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| TIDAK BOLEH ADA SAMA YANG DIPANGGIL DI SINI
*/

Route::get('/', [Homecontroller::class, 'index']);

Route::get('/menu', [Menucontroller::class, 'index']);
Route::get('/menu/add', [Menucontroller::class, 'add']);
Route::get('/menu/{id}/edit', [Menucontroller::class, 'edit']);
Route::get('/menu/{id}/delete', [Menucontroller::class, 'delete']);
Route::post('/menu/save', [Menucontroller::class, 'save']);


// Route::get('/kategori', [Kategoricontroller::class, 'index']); --. GANDA JADI GAK MUNCUL


// Untuk Menu kategori

Route::get('/kategori', [Kategoricontroller::class, 'index']);
Route::get('/kategori/add', [Kategoricontroller::class, 'add']);
Route::get('/kategori/{id}/edit', [Kategoricontroller::class, 'edit']);
Route::get('/kategori/{id}/delete', [Kategoricontroller::class, 'delete']);
Route::post('/kategori/save', [Kategoricontroller::class, 'save']);


