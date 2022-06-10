@extends('dashboard.layouts.master')

@section('title', 'Edit Siswa') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Edit Siswa</h3>
                        </div>
                        <div class="box-body">
                            
                            <form role="form" method="POST" action="/siswa/{{$siswa->id}}/{{$siswa->user_r->id}}/update" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">

                                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label>Nama Siswa</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{$siswa->user_r->name}}">
                                @if($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                                </div>

                                <div class="form-group" {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
                                <label>Tanggal lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control datepicker" placeholder="Masukkan Tanggal lahir" autocomplete="off" value="{{$siswa->tanggal_lahir}}">
                                @if($errors->has('tanggal_lahir'))
                                    <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
                                @endif
                                </div>
                                
                                <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                                <label>Nomor Telepon</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{$siswa->no_hp}}">
                                @if($errors->has('no_hp'))
                                    <span class="help-block">{{ $errors->first('no_hp') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label>Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukkan Alamat">{{$siswa->alamat}}</textarea>
                                @if($errors->has('alamat'))
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{$siswa->user_r->email}}">
                                @if($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                                
                                <div class="form-group {{$errors->has('foto') ? 'has-error' : ''}}">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control">
                                @if($errors->has('foto'))
                                    <span class="help-block">{{ $errors->first('foto') }}</span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset('images/'.$siswa->foto) }}" height="5%" width="25%">
                                </div>

                            </div>
                                <!-- /.box-body -->
                    
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- <div>
                <a href="" class="btn btn-warning" onclick="return confirm('Yakin ingin Ubah Form?')">Ubah Form</a>
            </div> -->
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection