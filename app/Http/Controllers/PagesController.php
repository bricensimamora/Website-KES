<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function istanaPintar(){
        return view('istanaPintar');
    }
    public function kegiatanSosial(){
        return view('kegiatanSosial');
    }
    public function pengurus(){
        return view('pengurus');
    }
    public function buletin(){
        return view('buletin');
    }
    public function volunteer(){
        return view('volunteer');
    }
}
