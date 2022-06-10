@extends('dashboard.layouts.master')

@section('title', 'Pendaftaran Siswa') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Pendaftaran</h3>
                        </div>
                        <div class="box-body">
                            @if($cek < 1)
                            <form role="form" method="POST" action="{{ url('/pendaftaran/'.\Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group {{$errors->has('no_hp') ? 'has-error' : ''}}">
                                <label>Nomor Telepon</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ old('no_hp') }}">
                                @if($errors->has('no_hp'))
                                    <span class="help-block">{{ $errors->first('no_hp') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label>Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                                @if($errors->has('alamat'))
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat lahir" value="{{ old('tempat_lahir') }}">
                                @if($errors->has('tempat_lahir'))
                                    <span class="help-block">{{ $errors->first('tempat_lahir') }}</span>
                                @endif
                                </div>

                                <div class="form-group" {{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
                                <label>Tanggal lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control datepicker" placeholder="Masukkan Tanggal lahir" autocomplete="off" value="{{ old('tanggal_lahir') }}">
                                @if($errors->has('tanggal_lahir'))
                                    <span class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
                                @endif
                                </div>

                                <div class="from-group {{$errors->has('kelas') ? 'has-error' : ''}}">
                                    <label>Kelas</label>
                                    <select name="kelas" class="form-control">
                                    <option value="" holder>--Pilih Kelas--</option>
                                    @foreach($kursus as $jd)
                                    <option value="{{ $jd->id }}">{{ $jd->kursus_r->nama_kursus }}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('kelas'))
                                        <span class="help-block">{{ $errors->first('kelas') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('foto') ? 'has-error' : ''}}">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
                                @if($errors->has('foto'))
                                    <span class="help-block">{{ $errors->first('foto') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('pembayaran') ? 'has-error' : ''}}">
                                <label>Bukti Pembayaran</label>
                                <input type="file" name="pembayaran" class="form-control" value="{{ old('pembayaran') }}">
                                @if($errors->has('pembayaran'))
                                    <span class="help-block">{{ $errors->first('pembayaran') }}</span>
                                @endif
                                </div>

                            </div>
                                <!-- /.box-body -->
                    
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                            @else
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <h2><label class="label label-success">Anda Sudah Melakukan Pendaftaran</label></h2>
                                </div>

                            </div>

                            @endif
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