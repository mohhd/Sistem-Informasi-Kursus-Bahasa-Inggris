@extends('dashboard.layouts.master')

@section('title', 'Ganti Password') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3>Form Edit Password</h3>
                        </div>
                        <div class="box-body">

                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form role="form" method="POST" action="{{ route('password.ganti') }}">
                            @csrf
                            @method('PATCH')
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" name="old_password" id="old_password" class="form-control">
                                    @error('old_password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control">
                                    @error('new_password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Ganti Password</button>
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