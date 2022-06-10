@extends('dashboard.layouts.master')

@section('title', 'Tambah Jadwal') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Tambah Kursus</h3>
                        </div>
                        <div class="box-body">
                            <form role="form" method="POST" action="/postjadwal">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                <label>Kursus</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Masukkan Nama Kursus">
                                </div>

                                <div class="form-group">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" placeholder="Masukkan Hari">
                                </div>

                                <div class="form-group">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control" placeholder="Masukkan Jam">
                                </div>

                                <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
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

<div class="row">
    <div class="col-md-12">
        
    </div>
</div>
@endsection