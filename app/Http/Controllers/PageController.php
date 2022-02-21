<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi, Selamat Datang yaaa!";
    }
    public function about(){
        return "Nama : Gustania Nirmala Meisi<br><br> 
        Kelas : TI-2H<br><br> 
        NIM : 2041720107";
    }
    public function artikel($id){
        return "Hi, Selamat Datang di Halaman Artikel dengan ID ".$id;
    }
}
