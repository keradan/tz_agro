<!DOCTYPE html>
<html lang="ru">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		
		<title>TZ agro admin page</title>

		<link rel="stylesheet" href="{{ url('css/admin.css?no_cache=' . time()) }}">

        <!-- 
        <link href="css/bootstrap.css" rel="stylesheet">

        <link href="css/styles.css" rel="stylesheet">
		
        <link href="css/fullcalendar.css" rel="stylesheet">
		<link href="css/easypiechart.css" rel="stylesheet">
		<link href="css/wysihtml5.css" rel="stylesheet">
        <link href="css/jgrowl.css" rel="stylesheet"> -->
    </head>
    <body>
        @include ('admin.partials.top')
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    @include ('admin.partials.nav')
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Success</h4>
                        	The operation completed successfully
                        </div>
                    	<div class="navbar">
                        	<div class="navbar-inner">
                                <ul class="breadcrumb">
                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                    <li>
                                        <a href="#">Dashboard</a> <span class="divider">/</span>	
                                    </li>
                                    <li>
                                        <a href="#">Settings</a> <span class="divider">/</span>	
                                    </li>
                                    <li class="active">Tools</li>
                                </ul>
                        	</div>
                    	</div>
                	</div>
                	@yield ('content')
                </div>
            </div>
            <hr>
            <footer>
	            @include ('admin.partials.footer')
            </footer>
        </div>

        <script src="{{ url('js/admin.js?no_cache=' . time()) }}"></script>
    </body>
</html>