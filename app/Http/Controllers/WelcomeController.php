<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Kursus;

class WelcomeController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all()->count();
        $total = Siswa::all()->count();
        $data = Siswa::whereHas('nilai_r', function($q){
            $q->where('status', 'Lulus TOEFL');
        })->count();
        return view('welcome', compact('kursus', 'total', 'data'));
    }

    public function join()
    {
        return view('join');
    }
}
