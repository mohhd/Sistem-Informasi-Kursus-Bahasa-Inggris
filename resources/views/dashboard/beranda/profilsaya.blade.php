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
            @if($cek == 1)
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                        
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img width="100" src="{{ auth()->user()->siswa_r->getFoto() }}" class="img-circle" alt="Avatar">
                                <h3 class="name">{{ auth()->user()->name }}</h3>
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
                                    <li>Birthdate <span>{{ auth()->user()->siswa_r->tanggal_lahir }}</span></li>
                                    <li>Mobile <span>{{ auth()->user()->siswa_r->no_hp }}</span></li>
                                    <li>Address <span>{{ auth()->user()->siswa_r->alamat }}</span></li>
                                    <li>Email <span>{{ auth()->user()->email }}</span></li>
                                    <li>Kelas <span>{{ auth()->user()->siswa_r->kelas_r->kursus_r->nama_kursus }}</span></li>
                                </ul>
                            </div>
                            
                            <div class="text-center"><a href="/siswa/{{auth()->user()->siswa_r->id}}/{{auth()->user()->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
                        </div>
                        
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nilai as $b)
                                        <tr>
                                            <td>{{ $b->pelajaran_r->nama }}</td>
                                            <td>{{ $b->pelajaran_r->tingkat }}</td>
                                            <td>{{ $b->status }}</td>
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
            @else
            <div class="box-body">
            <div class="form-group">
                <h2><label class="label label-success">Harap Melakukan Pendaftaran</label></h2>
            </div>
            @endif
            </div>
            
            
            
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>


@endsection