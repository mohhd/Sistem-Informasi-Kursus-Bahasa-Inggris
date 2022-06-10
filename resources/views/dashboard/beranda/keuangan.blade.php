@extends('dashboard.layouts.master')

@section('title', 'Laporan Keuangan') 

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Laporan Keuangan</h3>
                    </div>
                    <div class="panel-body">
                        
                        <table class="table table-hover" id="datatable">
                            
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