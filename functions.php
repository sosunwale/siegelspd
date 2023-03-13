<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hody-sgpd
 * @since 1.0.1
 */

/**
 * The theme version.
 *
 * @since 2.0.1
 */
define( 'HODY_SGPD_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 2.0.1
 *
 * @return void
 */
function hody_sgpd_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/style-shared.min.css' );
	//add_editor_style( './assets/css/style-shared.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "hody-sgpd-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'hody_sgpd_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hody_sgpd_styles() {
	wp_enqueue_style(
		'hody-sgpd-style',
		get_stylesheet_uri(),
		[],
		HODY_SGPD_VERSION
	);
	wp_enqueue_style(
		'hody-sgpd-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		HODY_SGPD_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'hody_sgpd_styles' );

// Filters.
//require_once get_theme_file_path( 'inc/filters.php' );

//CPT
require_once get_theme_file_path( 'inc/sgpd-cpt.php' );

// Block variation .
require_once get_theme_file_path( 'inc/register-block-variations.php' );

 //Block style .
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category.
//require_once get_theme_file_path( 'inc/register-block-patterns.php' );

/**
 * Register Breadcrumb
 */

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
