<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id){
        return "Hi, Selamat Datang di Halaman Artikel dengan ID ".$id;
    }
}
