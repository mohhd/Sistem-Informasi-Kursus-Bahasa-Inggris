@extends('dashboard.layouts.master')

@section('title', 'Data Peserta') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Peserta</h3>
                    </div>
                    <div class="panel-body">
                        <!-- <a href="/peserta" class="btn btn-sm btn-flat btn-primary">All Peserta</a>
                        <a href="/peserta/verifikasi" class="btn btn-sm btn-flat btn-success">Di Verifikasi</a>
                        <a href="/peserta/belum-verifikasi" class="btn btn-sm btn-flat btn-danger">Belum Di Verifikasi</a> -->
                        <table class="table table-hover" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>Detail</th>
                                    <th>is melengkapi?</th>
                                    <th>is verifikasi?</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>{{ $dt->user_r->id_registrasi }}</td>
                                <td>{{ $dt->user_r->name }}</td>
                                <td>
                                    <a href="/peserta/{{$dt->id}}/detail">Detail</a>
                                </td>
                                @if($dt->user_r_count > 0)
                                    <td>
                                        <label class="label label-success">Sudah Melengkapi</label>
                                    </td>
                                @else
                                    <td>
                                        <label class="label label-danger">Belum Melengkapi</label>
                                    </td>
                                @endif

                                @if($dt->user_r->is_verifikasi == 1)
                                    <td>
                                        <label class="label label-success">Sudah DiVerifikasi</label>
                                    </td>
                                @else
                                    <td>
                                        <label class="label label-danger">Belum DiVerifikasi</label>
                                    </td>
                                @endif
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