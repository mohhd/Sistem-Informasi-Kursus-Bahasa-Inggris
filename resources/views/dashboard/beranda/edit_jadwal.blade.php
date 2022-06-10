@extends('dashboard.layouts.master')

@section('title', 'Edit Jadwal') 

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Edit Kursus</h3>
                        </div>
                        <div class="box-body">
                            <form role="form" method="POST" action="/jadwal/{{$data->id}}/update">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                <label>Kursus</label>
                                <input type="text" name="kelas" class="form-control" value="{{$data->kursus_r->nama_kursus}}" readonly>
                                </div>

                                <div class="form-group">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" value="{{$data->hari}}">
                                </div>

                                <div class="form-group">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control" value="{{$data->jam}}">
                                </div>

                                <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" value="{{$data->harga}}">
                                </div>

                            </div>
                                <!-- /.box-body -->
                    
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
@endsection