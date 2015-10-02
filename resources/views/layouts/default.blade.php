<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nabun Upgrade International Co.,Ltd.">
	<meta name="author" content="Sarawut Popadcha">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="หางาน,นาบุญ,ชลบุรี,ฝ่ายผลิต,ซับคอนแทรก, sub contract">
	<title>Nabun Upgrade International</title>

    <link href="{{ asset('css/vendor/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/animate-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/eleganticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/fancybox.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    <script src="{{ asset('js/vendor/pace.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>
    @include('layouts.pageloader')
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
    <script src="{{ asset('js/vendor/fancybox.js') }}"></script>
    <script src="{{ asset('js/vendor/fitvids.js') }}"></script>
    <script src="{{ asset('js/vendor/parallax.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('script')

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68370589-1', 'auto');
      ga('send', 'pageview');

  </script>

</body>
</html>
