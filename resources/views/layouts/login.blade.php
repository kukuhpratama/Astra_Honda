<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Login | Astra AHASS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login_theme/images/icons/favicon.ico')}}"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login_theme/css/main.css')}}">
	<!--===============================================================================================-->
</head>
<body>
	@yield('content')
<!--===============================================================================================-->	
<script src="{{asset('login_theme/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_theme/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('login_theme/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_theme/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('login_theme/js/main.js')}}"></script>

</body>
</html>