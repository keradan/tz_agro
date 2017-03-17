<!DOCTYPE html>
<html>
	<head>
		<title>TZ agro Login</title>
		<link rel="stylesheet" href="{{ url('css/admin.css?no_cache=' . time()) }}">
	</head>
	<body id="login">
		<div class="container">
			<form class="form-signin" method="POST" action="{{ url('login') }}">
				{{ csrf_field() }}
				@include ('sessions.errors')
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" name="login" id="login" class="input-block-level" placeholder="Введи логин...">
				<input type="password" name="password" id="password" class="input-block-level" placeholder="Введи пароль...">
				<button class="btn btn-large btn-primary" type="submit">Sign in</button>
			</form>
		</div>
	</body>
</html>