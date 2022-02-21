<?php

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

//nomor 1
Route::get('/', function () {
    echo "Hi, Selamat Datang yaaa!";
});

//nomor 2
Route::get('/about', function () {
    echo "Nama : Gustania Nirmala Meisi<br><br>";
    echo "Kelas : TI-2H<br><br>";
    echo "NIM : 2041720107";
});

//nomor 3
Route::get('/artikel/{id}', function ($id) {
    echo "Hi, Selamat Datang di Halaman Artikel dengan ID ".$id;
});