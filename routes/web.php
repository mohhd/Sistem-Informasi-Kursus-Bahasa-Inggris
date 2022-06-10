<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/join', 'WelcomeController@join');


// Route::get('create_admin', function(){
//     \DB::table('users')->insert([
//         'role'  => 1,
//         'id_registrasi' => '-',
//         'name'  => 'admin',
//         'email' => 'admin@admin.com',
//         'password'  => bcrypt('admin'),
//         'jadwal_id' => 0
//     ]);
// });

Route::post('/siswa/create', 'SiswaController@store');
Route::get('/login2', 'AuthController@login')->name('login2');
Route::get('/adminnn', 'AuthController@loginAdmin');
Route::get('/guru', 'AuthController@loginGuru');
Route::post('/postLogin', 'AuthController@postLogin');
Route::post('/postLoginAdmin', 'AuthController@postLoginAdmin');
Route::post('/postLoginGuru', 'AuthController@postLoginGuru');
Route::get('keluar', 'AuthController@keluar');
Route::get('/gantipass', 'AuthController@gantiPass');
Route::patch('/gantipass', 'AuthController@updatePass')->name('password.ganti');


Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', 'DashboardController@index');
    Route::get('pendaftaran', 'PendaftaranController@index');
    Route::post('/pendaftaran/{users}', 'PendaftaranController@store');

    Route::get('/siswa/{id}/inputnilai', 'NilaiController@nilai');
    Route::post('/siswa/{id}/addnilai', 'NilaiController@addnilai');
    Route::post('/siswa/{id}/addNilaiPretest', 'NilaiController@addNilaiPretest');
    Route::get('/siswa/{idpelajaran}/hapus', 'NilaiController@hapusnilai');

    Route::get('/siswa/{id}/profil', 'PendaftaranController@profil');
    Route::get('/siswa/{id}/{id2}/edit', 'PendaftaranController@edit');
    Route::post('/siswa/{id}/{id2}/update', 'PendaftaranController@update');
    // Route::get('/siswa/{id}/inputnilai', 'SiswaController@nilai');
    // Route::post('/siswa/{id}/addnilai', 'SiswaController@addnilai');
    // Route::post('/siswa/{id}/addNilaiPretest', 'SiswaController@addNilaiPretest');
    // Route::get('/siswa/{id}/{idbasic}/hapus', 'SiswaController@hapusnilai');
    Route::get('/profilsaya', 'SiswaController@profilsaya');

    Route::get('/verifikasi/{id}', 'VerifikasiController@verifikasi');
    Route::get('/verifikasi/{id}/batalVerifikasi', 'VerifikasiController@batalverifikasi');
    Route::get('/peserta', 'PesertaController@index');
    Route::get('/peserta/verifikasi', 'PesertaController@diverifikasi');
    Route::get('/peserta/belum-verifikasi', 'PesertaController@belumverifikasi');
    Route::get('/peserta/{id}/detail', 'PesertaController@detail');

    Route::get('/adminn', 'AdminController@index');
    Route::get('/admin/tambah', 'AdminController@tambah');
    Route::post('/postadmin', 'AdminController@postAdmin');

    Route::get('/pengajar', 'GuruController@index');
    Route::get('/pengajar/{id}/detail', 'GuruController@detail');
    Route::get('/pengajar/tambah', 'GuruController@tambah');
    Route::post('/postguru', 'GuruController@postGuru');
    Route::get('/rekapabsen', 'GuruController@rekap_absen');
    Route::post('/rekap_absen', 'GuruController@postrekap');

    Route::get('/kelasReguler', 'KelasController@reguler');
    Route::get('/kelasConv', 'KelasController@conversation');
    Route::get('/kelasSemi', 'KelasController@semi');
    Route::get('/kelasInten', 'KelasController@intensive');

    
    Route::get('/absen', 'SiswaController@absen');
    Route::post('/absen_siswa', 'SiswaController@postAbsen');
    Route::post('/absen_save', 'SiswaController@save');
    Route::get('/presensi', 'SiswaController@presensi_siswa');
    Route::get('/uang', 'SiswaController@uang');
    Route::get('/siswalulus', 'SiswaController@lulus');
    Route::get('/cetakPDF', 'SiswaController@cetakLulus');
    Route::get('/cetakSertifikat', 'SiswaController@cetakSertifikat');

    Route::get('/jadwal', 'JadwalController@index');
    Route::get('/jadwal/tambah', 'JadwalController@tambah');
    Route::post('/postjadwal', 'JadwalController@postJadwal');
    Route::get('/jadwal/{id}/edit', 'JadwalController@edit');
    Route::post('/jadwal/{id}/update', 'JadwalController@update');
    Route::get('/jadwal/{id}/hapus', 'JadwalController@hapus');
});

Auth::routes();

Route::get('/home', function(){
    return redirect('dashboard');
});
