<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Nabun Upgrade | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

	<link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/_all-skins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('plugins/iCheck/icheck.css') }}" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="skin-purple sidebar-mini">
    	<div class="wrapper">
    		@include('vendor.notifications')
    		@include('admin.layouts.header')
    		@include('admin.layouts.aside')
			@yield('content')
		</div>

		<script src="{{ asset('js/vendor/jquery.js') }}"></script>
		<script src="{{ asset('js/vendor/bootstrap.js') }}"></script>
		<script src="{{ asset('js/vendor/admin.js') }}"></script>
		
		@yield('script')
	</body>
</html>