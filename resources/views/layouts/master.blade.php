<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Astra AHASS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	{{-- <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}"> --}}
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.ico')}}">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	@yield('custom-style');
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
            <a href="index.html"><img src="{{asset('admin/assets/img/logo.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li> --}}
						<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{ session('name') }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								{{-- <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> --}}
								<li><a href="{{ url('logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{ url('home') }}" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li>
							<a href="#database" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Database</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="database" class="collapse ">
								<ul class="nav">
									<li><a href="{{ url('database/H1') }}" class="">Database H1</a></li>
									<li><a href="{{ url('database/H2') }}" class="">Database H2</a></li>
								</ul>
							</div>
						</li>
						<li><a href="{{url('user')}}" ><i class="lnr lnr-user"></i> <span>User</span></a></li>
						<li><a href="#" ><i class="lnr lnr-checkmark-circle"></i> <span>Verifikasi CDB</span></a></li>
						<li><a href="#" ><i class="lnr lnr-users"></i> <span>Follow UP CDB</span></a></li>
						<li><a href="#" ><i class="lnr lnr-book"></i> <span>Leads Data</span></a></li>
						<li><a href="#" ><i class="lnr lnr-phone-handset"></i> <span>Call Thanks</span></a></li>
						<li><a href="#" ><i class="lnr lnr-alarm"></i> <span>Reminder Service</span></a></li>
						<li><a href="#" ><i class="lnr lnr-calendar-full"></i> <span>Booking Service</span></a></li>
						<li><a href="#" ><i class="lnr lnr-cog"></i> <span>FU. After Service</span></a></li>
						<li><a href="#" ><i class="lnr lnr-file-empty"></i> <span>Kuadran</span></a></li>
						<li><a href="#" ><i class="lnr lnr-file-empty"></i> <span>Pica</span></a></li>
						<li><a href="#" ><i class="lnr lnr-chart-bars"></i> <span>Report</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
        @yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	@yield('custom-script');
</body>

</html>
