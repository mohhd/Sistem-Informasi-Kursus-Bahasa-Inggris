@extends('dashboard.layouts.master')

@section('title', 'Tambah Admin') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Tambah Admin</h3>
                        </div>
                        <div class="box-body">
                            <form role="form" method="POST" action="/postadmin">
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