<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Siswa;

class PesertaController extends Controller
{
    public function index()
    {
        $data = Siswa::withCount('user_r')->get();
        return view('dashboard.beranda.peserta', compact('data'));
    }

    public function detail($id)
    {
        $peserta = Siswa::find($id);
        return view('dashboard.beranda.detail', compact('peserta'));
    }

    public function diverifikasi()
    {
        $data = User::withCount('siswa_r')->where('is_verifikasi',1)->orderBy('name', 'asc')->get();
        return view('dashboard.beranda.peserta', compact('data'));
    }

    public function belumverifikasi()
    {
        $data = User::withCount('siswa_r')->whereNull('is_verifikasi')->orderBy('name', 'asc')->get();
        return view('dashboard.beranda.peserta', compact('data'));
    }

    
}
