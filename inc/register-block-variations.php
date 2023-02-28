<?php
function prefix_editor_assets() {
	wp_enqueue_script(
		'prefix-block-variations',
		get_template_directory_uri() . '/assets/js/block-variations.js',
        array( 'wp-blocks' )
	);
}
add_action( 'enqueue_block_editor_assets', 'prefix_editor_assets' );