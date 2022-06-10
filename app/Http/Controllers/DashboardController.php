<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kelas;
use \App\Siswa;
use \App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = \Auth::user()->id;
        $total = Siswa::all()->count();
        $reguler = Siswa::where('kelas_id',1)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->count();
        $conv = Siswa::where('kelas_id',2)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->count();
        $semi = Siswa::where('kelas_id',0)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->count();
        $inten = Siswa::where('kelas_id',3)->whereHas('user_r', function($q){
            $q->where('is_verifikasi',1);
        })->count();
        
        $cek = Siswa::where('users', $user_id)->count();

        if($cek < 1){
            $pesan = 'Harap Melengkapi Pendaftaran Terlebih Dahulu';
        }else {
            $pesan = 'Pendaftaran Anda Sudah Dilengkapi...Terimakasih';
        }

        $cek_verifikasi = User::find($user_id);
        if($cek_verifikasi->is_verifikasi == 1){
            $status = 'Sudah Di Verifikasi';
        }else {
            $status = 'Belum Di Verifikasi';
        }
        return view('dashboard.beranda.index', compact('pesan','total','reguler','conv','semi','inten','status'));
    }
}
