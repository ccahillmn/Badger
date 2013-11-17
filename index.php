<!DOCTYPE html>
<html lang="en">
<head>
	<title>Badger - Create custom badge images for use with Mozilla Open Badges</title>
	
	<!-- Style -->
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	
</head>
<body>
	<head>
		<h1>Badger the Badge Maker<img src="/images/logo.png"></h1>
		<p id="desc">Create badge images perfectly sized for Mozilla Open Badges<p>
	</head>
	<div id="tabs">
		<ul>
			<li><a href="#images">Images</a></li>
			<li><a href="#text">Text</a></li>
			<li><a href="#colors">Colors</a></li>
		</ul>
		<div id="images">

		</div>
		<div id="text">

		</div>
		<div id="colors">

		</div>
	</div>
	<div id="preview">
		<div id="badge" class="layer">
		</div>
		<div id="icon" class="layer">
		</div>
		<div id="ribbon" class="layer">
		</div>
		<div id="text" class="layer">
			<p id="top"></p>
			<p id="mid"></p>
			<p id="bottom"></p>
		</div>
	</div>

	<!-- Javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="/js/scripts.js"></script>
	
	<!-- jQuery UI tabs -->
	<script>
	  $(function() {
		$( "#tabs" ).tabs();
	  });
	</script>
</body>
</html>