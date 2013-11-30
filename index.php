<!DOCTYPE html>
<html lang="en">
<head>
	<title>Badger - Create custom badge images for use with Mozilla Open Badges</title>
	
	<!-- Style -->
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	
	<!-- Javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.als-1.2.min.js"></script>
	<script type="text/javascript" src="/js/jscolor/jscolor.js"></script>
	
	<!-- jQuery UI tabs -->
	<script>
	  $(function() {
		$( "#generator" ).tabs({active:0});
	  });
	</script>


	
</head>
<body>
	<div class="container">
		<header>
			<h1>Badger the Badge Maker<img id="logo" src="/images/logo.png"></h1>
			<p id="desc">Create badge images perfectly sized for Mozilla Open Badges<p>
		</header>
		<div class="row">
			<div class="col-md-8">
				<div id="generator" class="panel">
					<ul class="nav nav-tabs">
						<li><a href="#images">Images</a></li>
						<li><a href="#text">Text</a></li>
						<li><a href="#colors">Colors</a></li>
					</ul>

                    <!-- Image Selector-->
					<div id="images" class="tab-content">
						<label>Badge</label><br>
                        <div id="badges" class="als-container">
                            <span class="als-prev glyphicon glyphicon-chevron-left"></span>
                            <div class="als-viewport" id="badge_shapes">
                                <ul class="als-wrapper">
                                    <?php foreach(glob('./images/badges/*.*')as $filename): ?>
                                            <li class="als-item"><img class="thumb" src="<?php echo $filename; ?>"></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <span class="als-next glyphicon glyphicon-chevron-right"></span>
                        </div>
				    </div>
						<br>
						<label class="left">Icon</label><br>
						<div id="icons" class="als-container">
                            <span class="als-prev glyphicon glyphicon-chevron-left"></span>
                            <div class="als-viewport" id="icon_shapes">
                                <ul class="als-wrapper">
                                    <?php foreach(glob('./images/icons/*.*')as $filename): ?>
                                        <li class="als-item"><img class="thumb" src="<?php echo $filename; ?>"></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <span class="als-next glyphicon glyphicon-chevron-right"></span>
						</div>

                    <!-- Text Selector-->
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

                    <!-- Color Selector-->
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
				<div id="preview" class="well">
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
    <script src="/js/scripts.js"></script>
</body>
</html>
