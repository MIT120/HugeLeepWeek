<?php
 /*
 Template Name: Main_2016
 Template Post Type: post, page, product
 Class
 */
?>
<?php
get_header();
?>

      <div class="container">
        <div class="content">
            <div class="hidden-md-up">
            <?php
            echo do_shortcode('[smartslider3 slider=2]');
            ?>
          </div>
      </div>
    </div>

      <div class="content">
          <div class="hidden-sm-down">
            <?php
            echo do_shortcode('[soliloquy id="263"]');
            ?>
          </div>
      </div>

<?php get_footer() ?>
