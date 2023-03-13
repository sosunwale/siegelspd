<?php
/**
 * This file contains custom post types, custom taxonomy and custom fields for Siegel Portrait Design theme.
 */
/**
 * Portfolio CPT. 
 */
add_action( 'init', 'sgpd_register_post_type' );
function sgpd_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Portfolios', 'hody-sgpd' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Portfolios', 'hody-sgpd' ),
			'name_admin_bar'     => esc_html__( 'Portfolio', 'hody-sgpd' ),
			'add_new'            => esc_html__( 'Add Portfolio', 'hody-sgpd' ),
			'add_new_item'       => esc_html__( 'Add new Portfolio', 'hody-sgpd' ),
			'new_item'           => esc_html__( 'New Portfolio', 'hody-sgpd' ),
			'edit_item'          => esc_html__( 'Edit Portfolio', 'hody-sgpd' ),
			'view_item'          => esc_html__( 'View Portfolio', 'hody-sgpd' ),
			'update_item'        => esc_html__( 'View Portfolio', 'hody-sgpd' ),
			'all_items'          => esc_html__( 'All Portfolios', 'hody-sgpd' ),
			'search_items'       => esc_html__( 'Search Portfolios', 'hody-sgpd' ),
			'parent_item_colon'  => esc_html__( 'Parent Portfolio', 'hody-sgpd' ),
			'not_found'          => esc_html__( 'No Portfolios found', 'hody-sgpd' ),
			'not_found_in_trash' => esc_html__( 'No Portfolios found in Trash', 'hody-sgpd' ),
			'name'               => esc_html__( 'Portfolios', 'hody-sgpd' ),
			'singular_name'      => esc_html__( 'Portfolio', 'hody-sgpd' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-gallery',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
		],
		'taxonomies' => [
			'category',
		],
		'rewrite' => true
	];

	register_post_type( 'portfolio', $args );
}

/**
 * Add block pattern
 */
register_block_pattern(
    'hody-sgpd/portfolio-v1-pattern',
    array(
        'title'       => __( 'Portfolio V1', 'hody-sgpdn' ),
        'description' => _x( 'Adds A text and image gallery to portfolio page.', 'Block pattern description', 'hody-sgpd' ),
        'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'wpdocs-my-plugin' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'wpdocs-my-plugin' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
    )
);
