<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>
<body>
 
	<h1>Register</h1>
 
	{{-- Form start comment --}}
 
		{!! Form::open(array('url' => 'user/createUser')) !!}
		    <p>			
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, array("placeholder" => "Enter your name")) !!}
			</p>
 
		    <p>			
				{!! Form::label('email', 'Email Address') !!}
                {!! Form::text('email', null, array("placeholder" => "Enter your email address")) !!}
			</p>

			<p>
                {!! Form::label('', 'Password Address') !!}
                {!! Form::text('password', null, array("placeholder" => "Enter your password")) !!}
            </p>
 
		    <p>
				{!! Form::submit('Sign Up') !!}
			</p>
 
		{!! Form::close() !!}
 
	{{-- Form end comment --}}
 
</body>
</html>