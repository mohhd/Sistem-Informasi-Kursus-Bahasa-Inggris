@extends('dashboard.layouts.master')

@section('title', 'Tambah Nilai') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Tambah Nilai</h3>
                        </div>
                        <div class="box-body">
                        <form role="form" method="POST" action="/siswa/{{$siswa->id}}/addnilai">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="pelajaran">Pilih Pelajaran</label>
                                <select class="form-control" id="pelajaran" name="pelajaran">
                                @foreach($tingkat as $t)
                                <option value="{{$t->id}}">{{ $t->tingkat }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group {{$errors->has('nilai') ? 'has-error' : ''}}">
                            <label>Nilai</label>
                            <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai" value="{{ old('nilai') }}">
                            @if($errors->has('nilai'))
                                <span class="help-block">{{ $errors->first('nilai') }}</span>
                            @endif
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