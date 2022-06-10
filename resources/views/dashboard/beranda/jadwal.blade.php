@extends('dashboard.layouts.master')

@section('title', 'Jadwal')

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
                        <h3 class="panel-title">Data Kursus</h3>
                        @if(\Auth::user()->role == 1)
                        <div class="text-right">
                            <a href="/jadwal/tambah" class="btn btn-sm btn-flat btn-primary">Tambah Kursus</a>
                        </div>
                        @endif
                    </div>
                    <div class="panel-body">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kursus</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Harga</th>
                                    @if(\Auth::user()->role == 1)
                                    <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $e=>$dt)
                                <tr>
                                    <td>{{ $e+1 }}</td>
                                    <td>{{ $dt->kursus_r->nama_kursus }}</td>
                                    <td>{{ $dt->hari }}</td>
                                    <td>{{ $dt->jam }}</td>
                                    <td>{{ $dt->harga }}</td>
                                    @if(\Auth::user()->role == 1)
                                    <td>
                                        <a href="/jadwal/{{$dt->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/jadwal/{{$dt->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Hapus?')">Hapus</a>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script>
                @if(Session::has('success'))
                    toastr.success("{{ Session::get('success') }}", "Sukses");
                @endif

                @if(Session::has('error'))
                    toastr.error("{{ Session::get('error') }}", "Maaf");
                @endif
                
            </script>
 
@endsection