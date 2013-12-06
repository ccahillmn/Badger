<!DOCTYPE html>
<html lang="en">
<head>
	<title>Badger - Create custom badge images for use with Mozilla Open Badges</title>
	
	<!-- Style -->
	<link rel="stylesheet" href="/css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	
	<!-- Javascript Libraries-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jscolor/jscolor.js"></script>
	<script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script> 
	
</head>
<body>
	<div class="container">
		<header>
			<h1>Badger the Badge Maker<img id="logo" src="/images/logo.png"></h1>
			<p id="desc">Create badge images perfectly sized for Mozilla Open Badges<p>
		</header>
		<div class="row">
			<div class="col-md-8">
				<div id="generator">
					<ul class="nav nav-tabs">
						<li><a href="#images">Images</a></li>
						<li><a href="#text">Text</a></li>
						<li><a href="#colors">Colors</a></li>
					</ul>

					<!-- Image Selector-->
					<div id="images">
						<div class="wrapper">
							<label>Badge</label><br>
							<span class="prev glyphicon glyphicon-chevron-left"></span>
							<div id="BadgePicker" class="picker">
								<?php foreach(glob('./images/badges/*.*')as $filename): ?>
										<div id="<?php echo($filename); ?>" class="thumb badges"><?php include($filename); ?></div>
								<?php endforeach; ?>
							</div>
							<span class="next glyphicon glyphicon-chevron-right"></span>
						</div>
						<div class="wrapper clear">
							<label>Icon</label><br>
							<span class="prev glyphicon glyphicon-chevron-left"></span>
							<div id="IconPicker" class="picker">
								<?php foreach(glob('./images/icons/*.*')as $filename): ?>
										<div id="<?php echo($filename); ?>" class="thumb icons"><?php include($filename); ?></div>
								<?php endforeach; ?>
							</div>
							<span class="next glyphicon glyphicon-chevron-right"></span>
							<div class="col-md-6">
								<label>Resize Icon</label>
								<div id="resize" class="slider"></div>
							</div>
							<div class="col-md-6">
								<label>Rotate Icon</label>
								<div id="rotate" class="slider"></div>
							</div>
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
								<label>Rotate Top Text</label>
								<div class="slider rotate"></div>
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
                                <label>Rotate Middle Text</label>
								<div class="slider rotate"></div>
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
                                <label>Rotate Bottom Text</label>
								<div class="slider rotate"></div>
                            </span>
                        </div>
                        <span id="bottom_error">24 characters left</span>
					</div>
					
					<!-- Color Selector-->
					<div id="colors">
						<label for="bbgcolor" class="col-sm-3 control-label">Background</label>
						<div id="preview_bg" class="col-sm-7" >
							<input id="bbgcolor" class="form-control color {hash:true}" value="ffffff"><br>
						</div>
						<label for="badgecolor" class="col-sm-3 control-label">Badge</label>
						<div id="badge_bg" class="col-sm-7">
							<input id="badgecolor" class="form-control color {hash:true}" value="c32b40"><br>
						</div>
						<label for="iconcolor" class="col-sm-3 control-label">Icon</label>
						<div id="icon_bg" class="col-sm-7">
							<input id="iconcolor" class="form-control color {hash:true}" value="000000"><br>
						</div>
						<label for="topcolor" class="col-sm-3 control-label">Top Text</label>
						<div id="top" class="col-sm-7">
							<input id="topcolor" class="form-control color {hash:true}" value="2c3e50"><br>
						</div>
						<label for="midcolor" class="col-sm-3 control-label">Middle Text</label>
						<div id="mid" class="col-sm-7">
							<input id="midcolor" class="form-control color {hash:true}" value="2c3e50"><br>
						</div>
						<label for="bottomcolor" class="col-sm-3 control-label">Bottom Text</label>
						<div id="bottom" class="col-sm-7">
							<input id="bottomcolor" class="form-control color {hash:true}" value="2c3e50"><br>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Badge Preview-->
			<div class="col-md-4 ">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">Preview</h2>
					</div>
					<div id="preview">
						<div id="badge" class="layer"></div>
						<div id="icon" class="layer"></div>
						<p id="top_text"></p>
						<p id="mid_text"></p>
						<p id="bottom_text"></p>
					</div>
				</div>
				<button id="preview_save" class="btn btn-primary">Save Badge</button>
				<button id="reset" class="btn btn-danger">Reset</button>
			</div>
			
		</div>
	</div>
	
	<!-- My Javascript -->
    <script src="/js/scripts.js"></script>
</body>
</html>
