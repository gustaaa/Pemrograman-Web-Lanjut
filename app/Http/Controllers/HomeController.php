<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {
        $user = Auth::user();
        return view('beranda',['user'=> $user]);
    }
}
