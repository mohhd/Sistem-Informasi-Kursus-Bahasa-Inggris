<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class KelasController extends Controller
{
    public function reguler()
    {
        $reguler = Siswa::where('kelas_id',1)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->get();
        
        return view('dashboard.beranda.kelasReguler', compact('reguler'));
    }

    public function conversation()
    {
        $conv = Siswa::where('kelas_id',2)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->get();
        return view('dashboard.beranda.kelasConv', compact('conv'));
    }

    public function semi()
    {
        $semi = Siswa::where('kelas_id',0)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->get();
        return view('dashboard.beranda.kelasSemi', compact('semi'));
    }

    public function intensive()
    {
        $inten = Siswa::where('kelas_id',3)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->get();
        return view('dashboard.beranda.kelasInten', compact('inten'));
    }
}
