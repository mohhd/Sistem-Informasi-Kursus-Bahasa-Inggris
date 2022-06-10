<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class VerifikasiController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('dashboard.beranda.verifikasi', compact('data'));
    }

    public function verifikasi($id)
    {
        $data = User::find($id);
        User::where('id_registrasi', $id)->update([
            'is_verifikasi' => 1
        ]);

        return redirect('/peserta');

    }

    public function batalverifikasi($id)
    {
        $data = User::find($id);
        User::where('id_registrasi', $id)->update([
            'is_verifikasi' => 0
        ]);

        return redirect('/peserta');

    }

    // public function verifikasi(Request $request)
    // {
    //     $this->validate($request, [
    //         'id_registrasi' => 'required'
    //     ]);

    //     $id = $request->id_registrasi;
    //     $cek = User::where('id_registrasi', $id)->count();

    //     if($cek > 0){
    //         User::where('id_registrasi', $id)->update([
    //             'is_verifikasi' => 1
    //         ]);
    //         \Session::flash('sukses', 'Peserta Berhasil Di Verifikasi');
    //     }else {
    //         \Session::flash('gagal', 'ID Pendaftaran tidak ditemukan!');
    //     }

    //     return redirect()->back();
    // }
}
