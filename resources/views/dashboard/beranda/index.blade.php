@extends('dashboard.layouts.master')
 
@section('title', 'Dashboard')

@section('content')
 
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(\Auth::user()->role == NULL)
                    <div class="box box-warning">
                        <div class="box-header">
                            <h4>Status Pendaftaran</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><label class="label label-success">{{ $pesan }}</label></h3>
                                </div>
                        </div>

                        </div>
                        
                    </div>

                    <div class="box box-warning">
                        <div class="box-header">
                            <h4>Status Verifikasi</h4>

                            <div class="row">
                                <div class="col-md-12">
                                <h3><label class="label label-success">{{ $status }}</label></h3>
                                </div>
                        </div>

                        </div>
                        
                    </div>
                    @else

                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daily Overview</h3>
							<p class="panel-subtitle">{{ date("d-m-Y") }}</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>
											<span class="number">{{ $total }}</span>
											<span class="title">Total Siswa</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-home"></i></span>
										<p>
											<span class="number">{{ $reguler }}</span>
											<span class="title">Siswa Reguler</span>
										</p>
									</div>
								</div>
                                <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-home"></i></span>
										<p>
											<span class="number">{{ $conv }}</span>
											<span class="title">Siswa Conversation</span>
										</p>
									</div>
								</div>
                                <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-home"></i></span>
										<p>
											<span class="number">{{ $semi }}</span>
											<span class="title">Siswa Semi-Intensive</span>
										</p>
									</div>
								</div>
                                <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-home"></i></span>
										<p>
											<span class="number">{{ $inten }}</span>
											<span class="title">Siswa Intensive</span>
										</p>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
                    @endif
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