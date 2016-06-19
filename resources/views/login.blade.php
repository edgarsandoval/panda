<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Panda</title>

	<!-- CSS's -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	{{ Html::style( asset('css/login.css') ) }}

	<!-- JS's  -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="form-container">
			<br>
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {!! Session::get('error') !!}
                </div>
            @endif
            <div class="form-header">
            	<h3>Inicia sesión para continuar.</h3>
            </div>
			{!! Form::open(array('url' => 'login')) !!}
				<div class="form-image-header">
					<img src="{{ asset('images/panda-icon.png') }}">
				</div>
				<div class="alert alert-info" role="alert">
					<i class="fa fa-pencil" aria-hidden="true"></i> Escribe tu correo electrónico y tu contraseña
				</div>
	            <div class="form-group">
	                {!! Form::email('email', '', array('class'=>'form-control','placeholder' => 'Correo electrónico')) !!}
	            <p class="errors">{!!$errors->first('email')!!}</p>
	            </div>
	            <div class="form-group">
	                {!! Form::password('password', array('class'=>'form-control', 'placeholder' => 'Contraseña')) !!}
	            <p class="errors">{!!$errors->first('password')!!}</p>
	            </div>
	            <p>{!! Form::submit('Iniciar sesión', array('class'=>'btn btn-primary btn-lg send-btn')) !!}</p>
			{!! Form::close() !!}
		</div>
    </div>
</body>
</html>