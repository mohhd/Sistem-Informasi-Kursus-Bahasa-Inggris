<!doctype html>
<html lang="en">

<head>
	@include('dashboard.layouts.head')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('dashboard.layouts.header')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('dashboard.layouts.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright"> &copy; Copyright <span>{{ date("Y") }}</span></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	@include('dashboard.layouts.script')
</body>

</html>
