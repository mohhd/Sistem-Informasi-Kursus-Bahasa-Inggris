<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Kelas;
use \App\User;
use \App\Pelajaran;
use \App\Nilai;

class PendaftaranController extends Controller
{
    public function index()
    {
        $user_id = \Auth::user()->id;
        $data = Siswa::where('users', $user_id)->first();
        $cek = Siswa::where('users', $user_id)->count();
        $kursus = Kelas::all();

        return view('dashboard.beranda.pendaftaran', compact('data', 'cek', 'kursus'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'no_hp' => 'required',
            'alamat'    => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg',
            'pembayaran' => 'required|mimes:pdf'
        ]);

        $data['users'] = $id;
        $data['no_hp'] = $request->no_hp;
        $data['alamat'] = $request->alamat;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        $data['kelas_id'] = $request->kelas;

        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $data['foto'] = $request->file('foto')->getClientOriginalName();
        }

        if($request->hasFile('pembayaran')){
            $request->file('pembayaran')->move('pembayaran/', $request->file('pembayaran')->getClientOriginalName());
            $data['pembayaran'] = $request->file('pembayaran')->getClientOriginalName();
        }

        // $file = $request->file('foto');
        // if($file){
        //     $nama_file = date('Y-m-d H:i:s').$file->getClientOriginalName();
        //     $file->move('foto', $nama_file);
        //     $data['foto'] = 'foto/'.$nama_file;
        // }
        
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        

        Siswa::insert($data);

        return redirect('/home')->with('sukses', 'Biodata Berhasil Ditambah!');

    }

    public function profil($id)
    {
        $id2 = $id;
        $nilai = Nilai::whereHas('siswa_r', function($q) use (&$id2){
            $q->where('id', $id2);
        })->get();
        $siswa = Siswa::find($id);
        $tingkat = Pelajaran::all();
        return view('dashboard.beranda.profil', compact('siswa', 'tingkat', 'nilai'));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('dashboard.beranda.edit_siswa', compact('siswa'));
    }

    public function update(Request $request, $id, $id2)
    {
        $siswa = Siswa::find($id);
        $user = User::find($id2);

        $this->validate($request, [
            'name' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
            'alamat'    => 'required',
            'email' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_hp = $request->no_hp;
        $siswa->alamat = $request->alamat;

        if($request->hasFile('foto')){
            $gbr = $request->file('foto');
            $ext = $gbr->getClientOriginalName();
            $nama_gbr = time().'.'.$ext;
            $gbr->move('images/', $nama_gbr);
            $siswa->foto = $nama_gbr;
        }

        $siswa->save();

        return redirect('/profilsaya')->with('success', 'Data siswa berhasil diubah');
    }
}
