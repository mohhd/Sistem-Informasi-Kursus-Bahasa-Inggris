@extends('dashboard.layouts.master')

@section('title', 'Data Kelas Semi-Intensive') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Kelas Semi-Intensive</h3>
                    </div>
                    <div class="panel-body">
                    <table class="table table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Profil</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($semi as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>{{ $dt->user_r->name }}</td>
                                <td>
                                    <a href="/siswa/{{$dt->id}}/profil" class="btn btn-primary btn-sm">Profil</a>
                                </td>
                                
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