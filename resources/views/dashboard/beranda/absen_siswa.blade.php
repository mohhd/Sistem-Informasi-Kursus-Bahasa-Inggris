@extends('dashboard.layouts.master')

@section('title', 'Absensi Siswa') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            
            <div class="row">
                <form action="/absen_save" method="post">
                @csrf
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Absen Siswa</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" id="datatable">
        
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th class="text-center" style="width:100px;">Hadir</th>
                                    <th class="text-center" style="width:100px;">Tidak Hadir</th>
                                    <th class="text-center" style="width:120px;">Ijin</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($kelas as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>
                                    <input type="hidden" name="kelas_id[]" value="{{ $dt->kelas_id }}">
                                    <input type="hidden" name="users[]" value="{{ $dt->users }}">
                                    <input type="text" name="name[]" class="form-control" value="{{ $dt->user_r->name }}" readonly>
                                </td>
                                <td align="center">
                                    <label class="form-label">
                                        <input type="checkbox" class="{{ $dt->users }}" name="status_checkbox[]" value="H"><span class="label-text"> </span>
                                    </label>
                                </td>
                                <td align="center">
                                    <label class="form-label">
                                        <input type="checkbox" class="{{ $dt->users }}" name="status_checkbox[]" value="T"><span class="label-text"> </span>
                                    </label>
                                </td>
                                <td align="center">
                                    <label class="form-label">
                                        <input type="checkbox" class="{{ $dt->users }}" name="status_checkbox[]" value="I"><span class="label-text"> </span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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