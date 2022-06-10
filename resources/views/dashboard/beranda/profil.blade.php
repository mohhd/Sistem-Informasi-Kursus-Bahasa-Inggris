@extends('dashboard.layouts.master')

@section('title', 'Profil Siswa') 

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
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
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img width="100" src="{{ $siswa->getFoto() }}" class="img-circle" alt="Avatar">
                                <h3 class="name">{{ $siswa->user_r->name }}</h3>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Birthdate <span>{{ $siswa->tanggal_lahir }}</span></li>
                                    <li>Mobile <span>{{ $siswa->no_hp }}</span></li>
                                    <li>Address <span>{{ $siswa->alamat }}</span></li>
                                    <li>Email <span>{{ $siswa->user_r->email }}</span></li>
                                    <li>Kelas <span>{{ $siswa->kelas_r->kursus_r->nama_kursus }}</span></li>
                                </ul>
                            </div>

                            
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <a href="/siswa/{{$siswa->id}}/inputnilai" class="btn btn-primary">Tambah Nilai</a>
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Input Pretest
                        </button>
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Nilai Siswa</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tingkat</th>
                                            <th>Nilai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai as $b)
                                        <tr>
                                            <td>{{ $b->pelajaran_r->nama }}</td>
                                            <td>{{ $b->pelajaran_r->tingkat }}</td>
                                            <td>
                                                <a href="#" class="nilai" data-type="text" data-pk="{{$b->siswa_r->id}}" data-url="/api/siswa/{{$siswa->id}}/editnilai" data-title="Masukkan Nilai">{{ $b->nilai }}</a>
                                            </td>
                                            <td>
                                                <a href="/siswa/{{$b->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Hapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Pretest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
      <form role="form" method="POST" action="/siswa/{{$siswa->id}}/addNilaiPretest">
        @csrf
        <div class="box-body">
            
            <div class="form-group {{$errors->has('nilai') ? 'has-error' : ''}}">
            <label>Nilai</label>
            <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai" value="{{ old('nilai') }}">
            @if($errors->has('nilai'))
                <span class="help-block">{{ $errors->first('nilai') }}</span>
            @endif
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection