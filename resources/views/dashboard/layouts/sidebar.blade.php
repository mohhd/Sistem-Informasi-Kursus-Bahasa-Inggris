<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
            <li><a href="{{ url('/home') }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            @if(\Auth::user()->role == NULL)
            <li><a href="{{ url('/pendaftaran') }}" class=""><i class="fa fa-id-card"></i> <span>Pendaftaran Siswa</span></a></li>
			<li><a href="/profilsaya"><i class="lnr lnr-user"></i> <span> Profil Siswa</span></a></li>
			<li><a href="/presensi"><i class="lnr lnr-list"></i> <span> Presensi</span></a></li>
			
            @endif
            <li><a href="{{ url('/jadwal') }}" class=""><i class="fa fa-calendar"></i> <span>Jadwal</span></a></li>
            @if(\Auth::user()->role == 1)
			<li><a href="{{ url('/adminn') }}"><i class="fa fa-user-circle-o"></i> <span> Data Admin</span></a></li>
            <li><a href="{{ url('/peserta') }}"><i class="fa fa-user-circle-o"></i> <span> Data Peserta</span></a></li>
			<li><a href="{{ url('/pengajar') }}"><i class="fa fa-user-circle-o"></i> <span> Data Pengajar</span></a></li>
			<li>
				<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages" class="collapse ">
					<ul class="nav">
						<!-- <li><a href="{{ url('/uang') }}" class="">Keuangan</a></li> -->
						<li><a href="{{ url('/siswalulus') }}" class="" >Daftar Lulus</a></li>
					</ul>
				</div>
			</li>
			@endif
			@if(\Auth::user()->role == 2)
			<li>
				<a href="#"><i class="lnr lnr-file-empty"></i> <span> Daftar Kelas</span></a>
				<div>
					<ul class="nav">
						<li><a href="{{ url('/kelasReguler') }}" class="">Reguler</a></li>
						<li><a href="{{ url('/kelasConv') }}" class="">Conversation</a></li>
						<li><a href="{{ url('/kelasSemi') }}" class="">Semi Intensive</a></li>
						<li><a href="{{ url('/kelasInten') }}" class="">Intensive</a></li>
					</ul>
				</div>
			</li>

			<li><a href="{{ url('/absen') }}"><i class="fa fa-user-circle-o"></i> <span> Absensi Siswa</span></a></li>

			<li>
				<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages" class="collapse ">
					<ul class="nav">
						<!-- <li><a href="{{ url('/uang') }}" class="">Keuangan</a></li> -->
						<li><a href="{{ url('/rekapabsen') }}" class="" >Rekap Absen</a></li>
						<li><a href="{{ url('/siswalulus') }}" class="" >Daftar Lulus</a></li>
					</ul>
				</div>
			</li>
            @endif
			
				</nav>
			</div>
		</div>