@extends('dashboard.layouts.master')

@section('title', 'Tambah Guru') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Tambah Guru</h3>
                        </div>
                        <div class="box-body">
                            <form role="form" method="POST" action="/postguru">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                                </div>

                                <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                                </div>

                                <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                </div>

                                <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                                </div>

                                <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No HP">
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