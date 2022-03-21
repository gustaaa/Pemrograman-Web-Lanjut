<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'tittle'=>'Beranda',
            'homes'=>home::all()
        ]);
    }
    public function index(){
        return view('beranda');
    }
}
