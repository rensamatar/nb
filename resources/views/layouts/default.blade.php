<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nabun Upgrade International Co.,Ltd.">
	<meta name="author" content="Sarawut Popadcha">
	<title>Nabun Upgrade International</title>

	<link href="{{ asset('css/vendor/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendor/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/vendor/animate-custom.css') }}" rel="stylesheet">

	<script src="{{ asset('js/vendor/modernizr.js') }}"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

    	@include('layouts.menu')

    	<main id="main">
    		@yield('content')
    		@include('layouts.footer')
    	</main>

    	<script src="{{ asset('js/vendor/jquery.js') }}"></script>
    	<script src="{{ asset('js/vendor/bootstrap.js') }}"></script>
    	<script src="{{ asset('js/vendor/wow.js') }}"></script>
    	<script src="{{ asset('js/vendor/retina.js') }}"></script>
        <script src="{{ asset('js/vendor/countTo.js') }}"></script>
    	<script src="{{ asset('js/main.js') }}"></script>

    	@yield('script')

    </body>
    </html>
