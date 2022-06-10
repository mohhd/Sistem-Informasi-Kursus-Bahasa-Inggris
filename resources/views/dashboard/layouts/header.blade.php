<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img style="width: 70px;" src="{{asset('admin/assets/img/ailcc.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ auth()->user()->siswa_r->getFoto() }}" class="img-circle" alt="Avatar"> <span>{{ auth()->user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/gantipass"><i class="lnr lnr-user"></i> <span>Ganti Passwod</span></a></li>
								<li><a href="{{ url('/keluar') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>