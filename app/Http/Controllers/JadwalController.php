<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kursus;
use \App\Kelas;

class JadwalController extends Controller
{
    public function index()
    {
        // $kelas_id = Kelas::find()->id;
        // $data = Kursus::where('kelas_id', $kelas_id)->first();
        $data = Kelas::all();
        return view('dashboard.beranda.jadwal', compact('data'));
    }

    public function tambah()
    {
        return view('dashboard.beranda.tambah_jadwal');
    }

    public function postJadwal(Request $request)
    {
        $this->validate($request, [
            'kelas'  => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'harga' => 'required'
        ]);
        $data2 = new Kursus;
        $data2->nama_kursus = $request->kelas;
        $data2->save();
        
        $data = new Kelas;
        $data->kursus_id = $data2->id;
        $data->hari = $request->hari;
        $data->jam = $request->jam;
        $data->harga = $request->harga;
        $data->save();
        
        
        return redirect('/jadwal')->with('success', 'Data Kursus Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = Kelas::find($id);
        return view('dashboard.beranda.edit_jadwal', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Kelas::find($id);

        $this->validate($request, [
            'hari' => 'required',
            'jam' => 'required',
            'harga' => 'required'
        ]);

        $data->hari = $request->hari;
        $data->jam = $request->jam;
        $data->harga = $request->harga;
        
        $data->save();
        return redirect('/jadwal')->with('success', 'Data Kursus Berhasil Diupdate');
    }

    public function hapus($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect('/jadwal')->with('success', 'Data Kursus Berhasil Dihapus');
    }
}
