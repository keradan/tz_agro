<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ url('css/site.css?no_cache=' . time()) }}">
    
    <!-- <script src="js/site/helpers.js"></script>
    <script src="js/site/map.js"></script> -->

    <title>TZ agro</title>
</head>
<body>

	@yield ('map')

	<div class="content">
		@yield ('content')
	</div>

 <!--    <script src="{{ url('js/site.js?no_cache=' . time()) }}"></script> -->


<!--
	<script type="text/javascript">
		function loadFile(path) {
		    var xhr = new XMLHttpRequest();
		    xhr.onreadystatechange = function() {
		        if (xhr.readyState === XMLHttpRequest.DONE) {
		            if (xhr.status === 200) {
						tmp_state += xhr.responseText;
		            } else {
						tmp_state = false;
		            }
		        }
		    };
		    xhr.open("GET", path, true);
		    xhr.send();
		}

		loadFile('css/site.css');
		loadFile('js/site.js');

		var tmp_state = '';
		var start_state;

		setTimeout(function() {
			start_state = tmp_state;
			tmp_state = '';
			setInterval(function() {

				loadFile('css/site.css');
				loadFile('js/site.js');

				setTimeout(function() {
					if (start_state != tmp_state) location.reload(true);
					else tmp_state = '';
				}, 1900);
			}, 2000);
		}, 0);
	</script>
-->

	<script>
		var map;
		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 50.44028798, lng: 30.52993298},
				zoom: 12,
			});
		}
	</script>
</body>
</html>