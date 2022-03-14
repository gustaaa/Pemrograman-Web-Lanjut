<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PrefixController;
use App\Http\Controllers\HomeController as BerandaController;



//Praktikum 1
Route::get('/home', [BerandaController::class, 'home']);
//nomor 1
// Route::get('/home', function () {
//    return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
//  });
//  Route::get('/blog', function () {
//    return view('blog');
// });
// Route::get('/product', function () {
//    return view('product');
// });
// Route::get('/contact', function () {
//    return view('contact');
// });

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
//Route::get('/', [HomeController::class, 'index'])->name('index');

//nomor 2
//Route::get('/about', [AboutController::class, 'index'])->name('index');

//nomor 3
//Route::get('/artikel/{id}', [ArticleController::class, 'index'])->name('index');

//Praktikum 3

// //nomor 1
// Route::get('/', [HomeController::class, 'index']);

// //nomor 2
// Route::prefix('jeniswisata')->group(function(){
//     Route::get('/gunung', [PrefixController::class, 'gunung']);
//     Route::get('/pantai', [PrefixController::class, 'pantai']);
//     Route::get('/air-terjun', [PrefixController::class, 'airterjun']);
// });

// //nomor 3
// Route::prefix('news')->group(function(){
//     Route::get('/', [PrefixController::class, 'news']);
//     Route::get('/virus-corona', [PrefixController::class, 'corona']);
// });

// //nomor 4
// Route::prefix('provinsi')->group(function(){
//     Route::get('/jawa-timur', [PrefixController::class, 'jawatimur']);
//     Route::get('/jawa-barat', [PrefixController::class, 'jawabarat']);
//     Route::get('/jawa-tengah', [PrefixController::class, 'jawatengah']);
// });

// //nomor 5
// Route::get('/about-us', [AboutController::class, 'index']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
