<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nabun Upgrade International</title>

	<link href="{{ elixir('css/styles.css') }}" rel="stylesheet">
	<script src="{{ asset('js/vendor/modernizr.js') }}"></script>
	</head>
	<body>
		<main>
			@yield('content')
		</main>

		@include('layouts.nav')
		<script src="{{ asset('js/vendor/jquery.js') }}"></script>
		<script src="{{ asset('js/vendor/onepage-scroll.js') }}"></script>
		<script src="{{ elixir('js/main.js') }}"></script>

		@yield('script')
	</body>
</html>
