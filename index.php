<?php $vertical_nav_items = array(
'Ask Anything' => '/ask',
'Partner Blog' => '/ask',
'Ask Anything1' => '/ask',
'Partner Blog1' => '/ask',
'Ask Anything2' => '/ask',
'Partner Blog2' => '/ask',
'Ask Anything3' => '/ask',
'Partner Blog3' => '/ask',
'Ask Anything4' => '/ask',
'Partner Blog4' => '/ask',
'Ask Anything5' => '/ask',
'Partner Blog5' => '/ask'
); 
$show_tumblr_posts = false; //set to true to use tumblr-friendly css/html
$styles_server = 'http://t1mdev.com/eric/css/tum_styles/'; //needs changing in SASS too
?>
<?php include('layouts/header.php'); ?>
<div id="main-wrapper" >
<div id="header">
	<h1 style="display:none">Life Confessions</h1>
	<img src="" class="ad" />
</div>
<?php $passed = 'test'; ?>


	<div id="center_content">
	<?php include('layouts/main_column.php'); ?>
	</div>
	
	<div id="sidebar-first">
	<?php include('layouts/left_column.php'); ?>
	</div>
	
	<div id="sidebar-second">
	<?php include('layouts/right_column.php'); ?>
	</div>
</div>
<div id="right_ad" class="ad">
	<img src="" class="ad" />
</div>

<?php include('layouts/footer.php'); ?>
