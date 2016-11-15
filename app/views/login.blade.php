<html>
<head>
  <title>Login Form</title>
</head>
<body>
  {{ Form::open(['url' => 'login']) }}
  <p>
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username') }}
    {{ $errors->first('username') }}
  </p>

  <p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{ $errors->first('password') }}
  </p>

  {{ Form::submit('Login') }}

  {{ Form::close() }}
</body>
</html>