@extends('dashboard.layouts.master')

@section('title', 'Data Admin') 

@section('content')

<div class="main">
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
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Admin</h3>
                        <div class="text-right">
                            <a href="/admin/tambah" class="btn btn-sm btn-flat btn-primary">Tambah Admin</a>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        
                        <table class="table table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->email }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
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