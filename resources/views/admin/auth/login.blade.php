<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Nabun Upgrade | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

	<link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('plugins/iCheck/icheck.css') }}" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ url('home') }}"><b>Nabun</b>Upgrade</a>
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>
			{!! Form::open(array('url' => 'auth/signin')) !!}
    			<div class="form-group has-feedback {!! $errors->first('email', 'has-error') !!}">
    				{!! Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'E-mail')) !!}
    				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    				<p>{!! $errors->first('email', '<span class="help-block">:message</span>') !!}</p>
    			</div>
    			<div class="form-group has-feedback {!! $errors->first('password', 'has-error') !!}">
    				{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
    				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
    				<p>{!! $errors->first('password', '<span class="help-block">:message</span>') !!}</p>
    			</div>

    			<div class="row">
    				<div class="col-xs-8">    
    					<div class="checkbox icheck">
    						<label>
    							<input name="remember" value="1" type="checkbox"> Remember Me
    						</label>
    					</div>
    				</div>
    				<div class="col-xs-4">
    					{!! Form::button('Sign In', array('type' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat')) !!}
    				</div>
    			</div>
    			{!! Form::close() !!}

			<a href="{{ url('/password/email') }}">I forgot my password</a><br>
			<a href="{{ url('/auth/register') }}" class="text-center">Register a new membership</a>

		</div>
	</div>

	<script src="{{ asset('js/vendor/jquery.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/iCheck/icheck.js') }}"></script>
	<script type="text/javascript">
 		$(function () {
        	$('input').iCheck({
          		checkboxClass: 'icheckbox_square-blue',
          		radioClass: 'iradio_square-blue',
          		increaseArea: '20%' // optional
        	});
      	});
	</script>

</body>
</html>
