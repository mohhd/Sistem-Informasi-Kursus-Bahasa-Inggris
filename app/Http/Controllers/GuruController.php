<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Guru;
use \App\Siswa;
use \App\Kelas;
use \App\Absensi;

class GuruController extends Controller
{
    public function index()
    {
        $data = User::where('role',2)->get();
        return view('dashboard.beranda.guru', compact('data'));
    }

    public function tambah()
    {
        return view('dashboard.beranda.tambah_guru');
    }

    public function postGuru(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        $data2 = new User;
        $data2->role = '2';
        $data2->name = $request->nama;
        $data2->email = $request->email;
        $data2->password = bcrypt($request->password);
        $data2->save();

        $data = new Guru;
        $data->users = $data2->id;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();

        return redirect('/pengajar')->with('success', 'Data Guru Berhasil Ditambahkan');

    }

    public function rekap_absen()
    {
        $kursus = Kelas::all();

        return view('dashboard.beranda.rekap_absen', compact('kursus'));
    }

    public function postrekap(Request $request)
    {   
        if($request->kelas == '1'){
            $kelas = Siswa::where('kelas_id',1)->whereHas('user_r', function($q){
                $q->where('is_verifikasi',1);
            })->get();
        }else if($request->kelas == '2'){
            $kelas = Siswa::where('kelas_id',2)->whereHas('user_r', function($q){
                $q->where('is_verifikasi',1);
            })->get();
        }else if($request->kelas == '0'){
            $kelas = Siswa::where('kelas_id',0)->whereHas('user_r', function($q){
                $q->where('is_verifikasi',1);
            })->get();
        }else if($request->kelas == '3'){
            $kelas = Siswa::where('kelas_id',3)->whereHas('user_r', function($q){
                $q->where('is_verifikasi',1);
            })->get();
        }        

        return view('dashboard.beranda.cetak_absen', compact('kelas'));
    }
}
