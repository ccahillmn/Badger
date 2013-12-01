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
    <script src="/js/jquery.alsEN-1.2.js"></script>
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
					<div id="images">
						<label>Badge</label><br>
                        <div id="badge_shapes" class="als-container">
                            <span class="als-prev glyphicon glyphicon-chevron-left"></span>
                            <div class="als-viewport" >
                                <ul class="als-wrapper">
                                    <?php foreach(glob('./images/badges/*.*')as $filename): ?>
                                            <li class="als-item"><div class="thumb badges"><?php include($filename); ?></div></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <span class="als-next glyphicon glyphicon-chevron-right"></span>
                        </div>
						<br>
						<label class="left">Icon</label><br>
						<div id="icons" class="als-container">
                            <span class="als-prev glyphicon glyphicon-chevron-left"></span>
                            <div class="als-viewport" id="icon_shapes">
                                <ul class="als-wrapper">
                                    <?php foreach(glob('./images/icons/*.*')as $filename): ?>
                                        <li class="als-item"><div class="thumb icons"><?php include($filename); ?></div></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <span class="als-next glyphicon glyphicon-chevron-right"></span>
						</div>
                    </div>
                    
                    <!-- Text Selector-->
					<div id="text">
                        <label class="control-label">Top Text</label>
                        <div id="top" class="row">
                            <span class="col-md-5">
                                <input class="form-control text" placeholder="Type your text here...">
                            </span>
                            <span class="col-md-7">
                                <input class="color {hash:true,caps:false}">
                            </span>
                        </div>
                        <span id="top_error">24 characters left</span>
                        <hr>
						<label class="control-label">Middle Text</label>
                        <div id="mid" class="row">
                            <span class="col-md-5">
                                <input class="form-control text" placeholder="Type your text here...">
                            </span>
                            <span class="col-md-7">
                                <input class="color {hash:true,caps:false}">
                            </span>
                        </div>
                        <span id="mid_error">24 characters left</span>
                        <hr>
						<label class="control-label">Bottom Text</label>
                        <div id="bottom" class="row">
                            <span class="col-md-5">
                                <input class="form-control text" placeholder="Type your text here...">
                            </span>
                            <span class="col-md-7">
                                <input class="color {hash:true,caps:false}">
                            </span>
                        </div>
                        <span id="bottom_error">24 characters left</span>
					</div>

                    <!-- Color Selector-->
					<div id="colors">
						<label for="bbgcolor" class="col-sm-3 control-label">Background</label>
						<div id="preview_bg" class="col-sm-7" >
							<input id="bbgcolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
						<label for="badgecolor" class="col-sm-3 control-label">Badge</label>
						<div id="badge_bg" class="col-sm-7">
							<input id="badgecolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
						<label for="iconcolor" class="col-sm-3 control-label">Icon</label>
						<div class="col-sm-7">
							<input id="iconcolor" class="form-control color {hash:true,caps:false}"><br>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Badge Preview-->
			<div class="col-md-4">
				<div id="preview" class="well">
					<div id="badge" class="layer"></div>
					<div id="icon" class="layer"></div>
					<div id="texts" class="layer">
						<p id="top_text"></p>
						<p id="mid_text"></p>
						<p id="bottom_text"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="/js/scripts.js"></script>
</body>
</html>
