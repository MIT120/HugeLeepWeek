<?php
 /*
 Template Name: DesktopHomePage
 Template Post Type: post, page, product
 Class
 */
?>
<!DOCTYPE html>
<html>

<head>

	<title></title>
</head>
<body>
<?php get_header(); ?>
<div class="container">
	<?php 
	echo do_shortcode('[smartslider3 slider=3]');
	?>
</div>
</body>
<?php get_footer() ?>
</html>