@extends('dashboard.layouts.master')

@section('title', 'Absensi Siswa') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
        @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Absensi Siswa</h3>
                        </div>
                        <div class="box-body">
                        <form role="form" method="POST" action="/absen_siswa">
                        @csrf
                        <div class="box-body">
                            
                            <div class="from-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control">
                                <option value="" holder>--Pilih Kelas--</option>
                                @foreach($kursus as $jd)
                                <option value="{{ $jd->id }}">{{ $jd->kursus_r->nama_kursus }}</option>
                                @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        
    </div>
</div>
@endsection