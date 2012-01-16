<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title>{Title}</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="The 1st Movement">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<?php if($show_tumblr_posts): ?>
		<link rel="stylesheet" href="<?php echo $styles_server; ?>css/styles.min.css">
	<?php else: ?>
		<!-- styles concatenated and minified via ant build script-->
		<link rel="stylesheet" href="css/010_base.css">
		<link rel="stylesheet" href="css/900_style.css">
		<link rel="stylesheet" href="css/901_custom.css">
		<link rel="stylesheet" href="css/ie.css">
		<link rel="stylesheet" href="css/999_print.css">
	<?php endif; ?>
	<!-- end styles-->	
	
	<!-- All JavaScript atlo the bottom, except this Modernizr build incl. Respond.js
		Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
		for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
	<?php if($show_tumblr_posts): ?>
		<script src="<?php echo $styles_server; ?>js/libs/modernizr-2.0.6.min.js"></script>
	<?php else: ?>
		<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<?php endif; ?>
</head>

<body>
	<!-- This is incase a user doesn't have JS enabled on their browser -->
	<noscript>
		<div class="js-disabled">
			Javascript is disabled in your web browser. For full functionality of 
			this site it is necessary to enable JavaScript. Here are the 
			<a href="http://www.enable-javascript.com/" target="_blank">
			instructions how to enable JavaScript in your web browser
			</a>.
		</div>
	</noscript>
			
	<header>
	</header>
	<body>
