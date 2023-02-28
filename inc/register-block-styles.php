<?php
/**
 * Block styles.
 *
 * @package hody-sgpd
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */

function hody_sgpd_core_register_block_styles() {

    register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'hody-sgpd-sticky-part',
			'label' => __( 'Sticky', 'hody-sgpd' ),
		)
	);

    register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'hody-sgpd-transparent-part',
			'label' => __( 'Transparent', 'hody-sgpd' ),
		)
	);

    register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'hody-sgpd-flat-button-with-icon',
			'label' => __( '→ Icon', 'hody-sgpd' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'hodyaddon-text-button-link',
			'label' => __( 'Text Link', 'hody-sgpd' ),
		)
	);


	register_block_style(
		'core/group',
		array(
			'name' => 'hody-sgpd-group-box-shadow',
			'label' => __('Has Box Shadow', 'hody-sgpd')
		)
	);

    register_block_style(
		'core/group',
		array(
			'name' => 'hody-sgpd-group-relative',
			'label' => __('P: Relative', 'hody-sgpd')
		)
	);

    register_block_style(
		'core/heading',
		array(
			'name' => 'hody-sgpd-yestyear-bg-heading',
			'label' => __('Background Heading', 'hody-sgpd')
		)
	);


}
add_action( 'init', 'hody_sgpd_core_register_block_styles' );


function hody_sgpd_register_block_styles() {

    register_block_style(
		'jet-forms/submit-field',
		array(
			'name' => 'hody-sgpd-jetforms-button',
			'label' => __('Theme Button', 'hody-sgpd')
		)
	);

}
add_action( 'init', 'hody_sgpd_register_block_styles' );