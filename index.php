<!DOCTYPE html>
<html lang="en">
<head>
	<title>Badger - Create custom badge images for use with Mozilla Open Badges</title>
	
	<!-- Style -->
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="/css/jquery-ui-1.10.3.custom.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	
	<!-- Javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	<script type="text/javascript" src="/js/jscolor/jscolor.js"></script>
	
	<!-- jQuery UI tabs -->
	<script>
	  $(function() {
		$( "#generator" ).tabs();
	  });
	</script>
	
</head>
<body>
	<div class="container">
		<header>
			<h1>Badger the Badge Maker<img src="/images/logo.png"></h1>
			<p id="desc">Create badge images perfectly sized for Mozilla Open Badges<p>
		</header>
		<div class="row">
			<div class="col-md-8">
				<div id="generator">
					<ul>
						<li><a href="#images">Images</a></li>
						<li><a href="#text">Text</a></li>
						<li><a href="#colors">Colors</a></li>
					</ul>
					<div id="images">
						<div class="col-sm-12">
						<label>Badge</label><br>
							<?php foreach(glob('./images/badges/*.*')as $filename): ?>
								<img class="thumb" src="<?php echo $filename; ?>">
							<?php endforeach; ?>
						</div>
						<div class="col-sm-12">
							<label>Icon</label>
							<?php foreach(glob('./images/icons/*.*')as $filename): ?>
								<img class="thumb" src="<?php echo $filename; ?>">
							<?php endforeach; ?>
						</div>
					</div>
					<div id="text">
						<label for="toptext" class="col-sm-3 control-label">Top</label>
						<div class="col-sm-7">
							<input id="toptext" class="form-control"><br>
						</div>
						<label for="midtext" class="col-sm-3 control-label">Middle</label>
						<div class="col-sm-7">
							<input id="midtext" class="form-control"><br>
						</div>
						<label for="bottomtext" class="col-sm-3 control-label">Bottom</label>
						<div class="col-sm-7">
							<input id="bottomtext" class="form-control"><br>
						</div>
					</div>
					<div id="colors">
						<label for="bbgcolor" class="col-sm-3 control-label">Background</label>
						<div class="col-sm-7">
							<input id="bbgcolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
						<label for="badgecolor" class="col-sm-3 control-label">Badge</label>
						<div class="col-sm-7">
							<input id="badgecolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
						<label for="iconcolor" class="col-sm-3 control-label">Icon</label>
						<div class="col-sm-7">
							<input id="iconcolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="preview" class="ui-widget ui-widget-content ui-corner-all">
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
			</div>
		</div>
	</div>
</body>
</html>