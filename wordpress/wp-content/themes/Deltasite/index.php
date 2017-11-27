
<?php
get_header();
?>

<?php if(have_posts()):while(have_posts()): the_post(); ?>

<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
 <?php the_content() ?>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<?php endwhile;
endif;
 ?>
<?php get_footer() ?>
