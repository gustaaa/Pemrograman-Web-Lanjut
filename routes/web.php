<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

//Praktikum 1
//nomor 1
//Route::get('/', function () {
//   echo "Hi, Selamat Datang yaaa!";
//});

//nomor 2
//Route::get('/about', function () {
//    echo "Nama : Gustania Nirmala Meisi<br><br>";
//    echo "Kelas : TI-2H<br><br>";
//    echo "NIM : 2041720107";
//});

//nomor 3
//Route::get('/artikel/{id}', function ($id) {
//    echo "Hi, Selamat Datang di Halaman Artikel dengan ID ".$id;
//});

//Praktikum 2

//nomor 1
//Route::get('/', [PageController::class, 'index'])->name('index');

//nomor 2
//Route::get('/about', [PageController::class, 'about'])->name('about');

//nomor 3
//Route::get('/artikel/{id}', [PageController::class, 'artikel'])->name('artikel');

//nomor 1
Route::get('/', [HomeController::class, 'index'])->name('index');

//nomor 2
Route::get('/about', [AboutController::class, 'index'])->name('index');

//nomor 3
Route::get('/artikel/{id}', [ArticleController::class, 'index'])->name('index');