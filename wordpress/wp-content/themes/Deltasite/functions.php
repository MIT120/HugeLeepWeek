<?php

/**
 * Hides the custom post template for pages on WordPress 4.6 and older
 *
 * @param array $post_templates Array of page templates. Keys are filenames, values are translated names.
 * @return array Filtered array of page templates.
 */
function makewp_exclude_page_templates( $post_templates ) {
    if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
        unset( $post_templates['templates/my-full-width-post-template.php'] );
    }

    return $post_templates;
}

add_filter( 'theme_page_templates', 'makewp_exclude_page_templates' );

function Deltasite_assets()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'delta', get_template_directory_uri() . '/assets/js/delta.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script("jquery");
}
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_post_type_support( 'post', 'page-attributes' );
add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 6,
	) );
  add_theme_support('html5',array('search-form'));

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
//on setup



add_action('wp_enqueue_scripts','Deltasite_assets');
//Naviagion

register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));
