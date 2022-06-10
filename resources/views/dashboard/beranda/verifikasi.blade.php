@extends('dashboard.layouts.master')

@section('title', 'Verifikasi Siswa') 

@section('content')
 
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3>Verifikasi Siswa</h3>
            </div>
            <div class="box-body">
                <form role="form" method="POST" action="/verifikasi">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                    <label>ID Pendaftaran</label>
                    <input type="text" name="id_registrasi" class="form-control" placeholder="Masukkan ID Pendaftaran">
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