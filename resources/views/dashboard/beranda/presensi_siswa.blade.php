@extends('dashboard.layouts.master')

@section('title', 'Presensi Siswa') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Presensi Siswa</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="datatable">
                        
                        <tr>
                            <td>Hadir</td>
                            <td>:</td>
                            <td>
                                {{ $hadir }}
                            </td>
                        </tr>
                        <tr>
                            <td>Tidak Hadir</td>
                            <td>:</td>
                            <td>
                                {{ $tidak }}
                            </td>
                        </tr>
                        <tr>
                            <td>Izin</td>
                            <td>:</td>
                            <td>
                                {{ $ijin }}
                            </td>
                        </tr>

                        <tr>
                            <td>Jumlah Kehadiran</td>
                            <td>:</td>
                            <td>
                                {{ $total }}
                            </td>
                        </tr>
                            
                        </table>
                    </div>
                </div>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-default btn-block"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
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