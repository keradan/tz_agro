<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ url('css/site.css?no_cache=' . time()) }}">
	<script src=""></script>

    <title>TZ agro</title>
</head>
<body>
	@include ('partials.nav')
	<div>
		map
	</div>
	<div class="content">
		@yield ('content')
	</div>

    <script src="{{ url('js/site.js?no_cache=' . time()) }}"></script>
</body>
</html>