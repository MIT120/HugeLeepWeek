<?php
 /*
 Template Name: Main_2015
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
                  echo do_shortcode('[smartslider3 slider=4]');

              ?>
              <div class="m-t-180-m">

                <?php   echo do_shortcode('[smartslider3 slider=6]');   ?>

              </div>
          </div>
      </div>

<?php get_footer() ?>
