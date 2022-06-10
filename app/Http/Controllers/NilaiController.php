<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\User;
use \App\Pelajaran;
use \App\kelas;
use \App\Absensi;
use \App\Nilai;

class NilaiController extends Controller
{
    public function nilai($id)
    {
        $siswa = Siswa::find($id);
        $tingkat = Pelajaran::all();
        return view('dashboard.beranda.inputNilai', compact('siswa', 'tingkat'));
    }

    public function addNilaiPretest(Request $request, $id){

        $nilai = Nilai::where('siswa_id', $id)->get();
        if($siswa->nilai_r()->where('pelajaran_id', $request->pelajaran)->exists()){
            return redirect('siswa/'.$id.'/profil')->with('error', 'Data Pelajaran sudah ada');
        }

        if($request->nilai < 35){
            $pelajaran = 1;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "is taking";
            $nilai->save();

            // $nilai['pelajaran_id'] = $pelajaran;
            // $nilai['nilai'] = $request->nilai;
            // $nilai['status'] = "is taking";

            // Nilai::insert($nilai);

        }else if($request->nilai >= 35 && $request->nilai < 53 ){
            $pelajaran = 2;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "is taking";
            $nilai->save();

        }else if($request->nilai >= 53 && $request->nilai < 70){
            $pelajaran = 3;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "is taking";
            $nilai->save();
        
        }else if($request->nilai >= 70 && $request->nilai <= 100){
            $pelajaran = 4;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "is taking";
            $nilai->save();

        }else {
            return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
        }

        return redirect('siswa/'.$id.'/profil')->with('success', 'Data nilai berhasil ditambahkan');
    }

    public function addnilai(Request $request, $id)
    {
        $nilai = Nilai::where('siswa_id', $id)->get();
        $siswa = Siswa::find($id);
        if($siswa->nilai_r()->where('pelajaran_id', $request->pelajaran)->exists()){
            return redirect('siswa/'.$id.'/profil')->with('error', 'Data pelajaran sudah ada');
        }

        if($request->pelajaran == "9"){
            $pelajaran = $request->pelajaran;
            if ($request->nilai < 450){
                $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "Belum Lulus TOEFL";
            $nilai->save();

            }else if($request->nilai >= 450 && $request->nilai <= 900){
                $pelajaran = $request->pelajaran;
                $this->validate($request, [
                    'nilai' => 'required'
                ]);
    
                $nilai = new Nilai;
                $nilai->siswa_id = $id;
                $nilai->pelajaran_id = $pelajaran;
                $nilai->nilai = $request->nilai;
                $nilai->status = "Lulus TOEFL";
                $nilai->save();

            }else {
                return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
            }
        }else if($request->nilai >= 70){
            $pelajaran = $request->pelajaran;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "Lulus";
            $nilai->save();

        }else if($request->nilai < 70){
            $pelajaran = $request->pelajaran;
            $this->validate($request, [
                'nilai' => 'required'
            ]);

            $nilai = new Nilai;
            $nilai->siswa_id = $id;
            $nilai->pelajaran_id = $pelajaran;
            $nilai->nilai = $request->nilai;
            $nilai->status = "Belum Lulus";
            $nilai->save();

        }else {
            return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
        }

        return redirect('siswa/'.$id.'/profil')->with('success', 'Data nilai berhasil ditambahkan');
    }

    public function hapusnilai($idpelajaran)
    {
        // $nilai = Nilai::where('siswa_id', $id)->get();
        $nilai = Nilai::find($idpelajaran);
        $nilai->delete();
        
        // $siswa = Siswa::find($id);
        // $siswa->pelajaran_r()->detach($idpelajaran);

        return redirect()->back()->with('success', 'Data nilai berhasil dihapus');
    }
}
