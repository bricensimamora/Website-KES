<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function istanaPintar(){
        $siswa = Student::all();
        $pengajar = Teacher::all();
        return view('istanaPintar', ['siswa' => $siswa], ['pengajar' => $pengajar]);
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
