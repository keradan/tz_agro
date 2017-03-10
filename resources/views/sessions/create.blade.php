<!DOCTYPE html>
<html>
<head>
	<title>Login tz agro</title>
</head>
<body>

<h1>Login</h1>

	<form method="POST" action="{{ url('login') }}">
		{{ csrf_field() }}
		@include ('sessions.errors')
		<label for="login">Login:</label>
		<input type="text" name="login" id="login"><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password"><br>
		<button type="submit">Log in</button>
	</form>

</body>
</html>