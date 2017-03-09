<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ url('css/admin.css?no_cache=' . time()) }}">
    <title>TZ agro admin page</title>
</head>
<body>
	<div>
		This is admin header
	</div>

	<div>
		@include ('partials.admin_nav')
	</div>

	<div class="content">
		@yield ('content')
	</div>
		
	<div class="footer">
		@include ('partials.admin_footer')
	</div>

    <script src="{{ url('js/admin.js?no_cache=' . time()) }}"></script>
</body>
</html>