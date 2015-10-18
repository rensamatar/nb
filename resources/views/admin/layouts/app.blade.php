<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nabun Upgrade | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<link href="{!! asset('css/vendor/bootstrap.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('css/fontawesome.css') !!}" rel="stylesheet">

	<link href="{!! asset('css/vendor/AdminLTE.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('css/vendor/_all-skins.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('plugins/iCheck/icheck.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('css/vendor/summernote.css') !!}" rel="stylesheet" type="text/css" />

	@include('admin.layouts.support')
</head>

<body class="skin-purple sidebar-mini">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.aside')

		<div class="content-wrapper">
			@include('vendor.notifications')
			@yield('content')
		</div>
	</div>

	<script src="{!! asset('js/vendor/jquery.js') !!}"></script>
	<script src="{!! asset('js/vendor/bootstrap.js') !!}"></script>
	<script src="{!! asset('js/vendor/summernote.js') !!}"></script>
	<script src="{!! asset('js/vendor/admin.js') !!}"></script>

	@yield('script')
</body>
</html>