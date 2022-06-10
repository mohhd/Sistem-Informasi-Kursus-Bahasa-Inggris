@extends('dashboard.layouts.master')

@section('title', 'Detail Peserta') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1><center>Data Pendaftar</center></h1>
                </div>

                <div class="col-12">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID Registrasi : </th>
                        <td>{{ $peserta->user_r->id_registrasi }}</td>
                    </tr>
                    <tr>
                        <th>Nama : </th>
                        <td>{{ $peserta->user_r->name }}</td>
                    </tr>
                    <tr>
                        <th>Email : </th>
                        <td>{{ $peserta->user_r->email }}</td>
                    </tr>
                    <tr>
                        <th>Alamat : </th>
                        <td>{{ $peserta->alamat }}</td>
                    </tr>
                    <tr>
                        <th>No. HP : </th>
                        <td>{{ $peserta->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Tempat lahir : </th>
                        <td>{{ $peserta->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal lahir : </th>
                        <td>{{ $peserta->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <th>Kursus : </th>
                        <td>{{ $peserta->kelas_r->kursus_r->nama_kursus }}</td>
                    </tr>
                    <tr>
                        <th>Hari : </th>
                        <td>{{ $peserta->kelas_r->hari }}</td>
                    </tr>
                    <tr>
                        <th>Jam : </th>
                        <td>{{ $peserta->kelas_r->jam }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Pendaftaran : </th>
                        <td>{{ $peserta->user_r->tgl_pendaftaran }}</td>
                    </tr>

                    <tr>
                        <th>Foto : </th>
                        <td>
                            <img width="100" height="100" src="{{ $peserta->getFoto() }}" alt="Foto">
                        </td>
                    </tr>

                    <tr>
                        <th>Bukti Pembayaran : </th>
                        <td>
                            <p>
                                <a href="{{ asset($peserta->getBukti()) }}" class="btn btn-xs btn-success" download="">Download Bukti</a>
                            </p>
                        </td>
                    </tr>
                </table>

                <a href="/peserta" class="btn btn-primary">Kembali</a>
                @if($peserta->user_r->is_verifikasi == 1)
                    <a href="/verifikasi/{{$peserta->user_r->id_registrasi}}/batalVerifikasi" class="btn btn-danger" onclick="return confirm('Yakin ingin Batal Verifikasi?')">Batal Verifikasi</a>
                @else
                    <a href="/verifikasi/{{$peserta->user_r->id_registrasi}}" class="btn btn-success" onclick="return confirm('Yakin ingin Verifikasi?')">Verifikasi</a>
                @endif
                
            </div>
            </div>
        </div>
    </div>
</div>

@endsection