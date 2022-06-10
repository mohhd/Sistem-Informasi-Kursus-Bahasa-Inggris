<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use \App\Siswa;
use \App\User;
use \App\Pelajaran;
use \App\kelas;
use \App\Absensi;
use \App\Nilai;

class SiswaController extends Controller
{
    public function store(StoreUser $request)
    {
        // $this->validate($request, [
        //     'nama'  => 'required|min:3',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|confirmed',
        // ]);

        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['id_registrasi'] = 'REG-'.date('YmdHis');
        $data['tgl_Siswa'] = date('Y-m-d');

        User::insert($data);

        $validated = $request->validated();
        if($validated){
            return redirect('/')->with('success', 'Terima Kasih Sudah Mendaftar');
        }
    }

    public function absen()
    {
        $kursus = Kelas::all();
        return view('dashboard.beranda.absensi', compact('kursus'));
    }

    public function postAbsen(Request $request)
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

        return view('dashboard.beranda.absen_siswa', compact('kelas'));
    }

    public function save(Request $request)
    {
        $users = $request->users;
        $kelas_id = $request->kelas_id;
        $status_checkbox = $request->status_checkbox;

        for($i = 0; $i < count($users); $i++){
            $datasave = [
                'users' => $users[$i],
                'kelas_id'  => $kelas_id[$i],
                'keterangan'  => $status_checkbox[$i]
            ];
            Absensi::insert($datasave);
        }
        
        return redirect('/absen')->with('success', 'Data Absensi Berhasil Ditambahkan');
    }

    public function presensi_siswa()
    {
        $user_id = \Auth::user()->id;
        $hadir = Absensi::where('users', $user_id)->where('keterangan','H')->count();
        $tidak = Absensi::where('users', $user_id)->where('keterangan','T')->count();
        $ijin = Absensi::where('users', $user_id)->where('keterangan','I')->count();
        $total = $hadir + $tidak + $ijin;
        
        return view('dashboard.beranda.presensi_siswa', compact('hadir', 'tidak', 'ijin', 'total'));
    }

    // public function nilai($id)
    // {
    //     $siswa = Siswa::find($id);
    //     $tingkat = Pelajaran::all();
    //     return view('dashboard.beranda.inputNilai', compact('siswa', 'tingkat'));
    // }

    // public function addNilaiPretest(Request $request, $id){

    //     $siswa = Siswa::find($id);
    //     if($siswa->pelajaran_r()->where('pelajaran_id', $request->pelajaran)->exists()){
    //         return redirect('siswa/'.$id.'/profil')->with('error', 'Data Pelajaran sudah ada');
    //     }

    //     if($request->nilai < 35){
    //         $pelajaran = 1;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "is taking"
    //             ]);
    //     }else if($request->nilai >= 35 && $request->nilai < 53 ){
    //         $pelajaran = 2;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "is taking"
    //             ]);
    //     }else if($request->nilai >= 53 && $request->nilai < 70){
    //         $pelajaran = 3;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "is taking"
    //             ]);
        
    //     }else if($request->nilai >= 70 && $request->nilai <= 100){
    //         $pelajaran = 4;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "is taking"
    //             ]);
    //     }else {
    //         return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
    //     }

    //     return redirect('siswa/'.$id.'/profil')->with('success', 'Data nilai berhasil ditambahkan');
    // }

    // public function addnilai(Request $request, $id)
    // {
    //     $siswa = Siswa::find($id);
    //     if($siswa->pelajaran_r()->where('pelajaran_id', $request->pelajaran)->exists()){
    //         return redirect('siswa/'.$id.'/profil')->with('error', 'Data pelajaran sudah ada');
    //     }

    //     if($request->pelajaran == "9"){
    //         if ($request->nilai < 450){
    //             $siswa->pelajaran_r()->attach($request->pelajaran, [
    //                 'nilai' => $request->nilai,
    //                 'status' => "Belum Lulus TOEFL"
    //                 ]);
    //         }else if($request->nilai >= 450 && $request->nilai <= 900){
    //             $siswa->pelajaran_r()->attach($request->pelajaran, [
    //                 'nilai' => $request->nilai,
    //                 'status' => "Lulus TOEFL"
    //                 ]);
    //         }else {
    //             return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
    //         }
    //     }else if($request->nilai >= 70){
    //         $pelajaran = $request->pelajaran;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "Lulus"
    //             ]);
    //     }else if($request->nilai < 70){
    //         $pelajaran = $request->pelajaran;
    //         $siswa->pelajaran_r()->attach($pelajaran, [
    //             'nilai' => $request->nilai,
    //             'status' => "Belum Lulus"
    //             ]);
    //     }else {
    //         return redirect('siswa/'.$id.'/profil')->with('error', 'Data Nilai tidak cocok');
    //     }

    //     return redirect('siswa/'.$id.'/profil')->with('success', 'Data nilai berhasil ditambahkan');
    // }

    // public function hapusnilai($id, $idpelajaran)
    // {
    //     $siswa = Siswa::find($id);
    //     $siswa->pelajaran_r()->detach($idpelajaran);

    //     return redirect()->back()->with('success', 'Data nilai berhasil dihapus');
    // }

    public function profilsaya()
    {
        $user_id = \Auth::user()->id;
        $siswa = Siswa::where('users', $user_id)->get('id');
        // $nilai = Nilai::where('siswa_id', $user_id)->get();
        $cek = Siswa::where('users', $user_id)->count();
        $id2 = $user_id;
        $nilai = Nilai::whereHas('siswa_r', function($q) use (&$id2){
            $q->where('users', $id2);
        })->get();
        return view('dashboard.beranda.profilsaya', compact('cek', 'nilai'));
    }

    public function lulus()
    {
        // $data = User::whereHas('siswa_r', function($q){
        //     $q->whereHas('pelajaran_r', function($q){
        //         $q->where('status', 'Lulus TOEFL');
        //     });
        // })->with('Siswa_r.pelajaran_r')->get();

        $data = Siswa::whereHas('nilai_r', function($q){
                $q->where('status', 'Lulus TOEFL');
            })->get();
        
        return view('dashboard.beranda.siswa_lulus', compact('data'));
    }

    public function cetakLulus()
    {
        $data = Siswa::whereHas('nilai_r', function($q){
            $q->where('status', 'Lulus TOEFL');
        })->get();

        $pdf = \PDF::loadView('dashboard.beranda.daftarLulusPDF', compact('data'));
        return $pdf->download('Daftar Lulus.pdf');
    }

    public function cetakSertifikat()
    {
        $pdf = \PDF::loadView('dashboard.beranda.cetakSertifikat')->setPaper([0, 0, 595.27, 850.39], 'landscape');
        return $pdf->download('Sertifikat Siswa.pdf');
    }

}
