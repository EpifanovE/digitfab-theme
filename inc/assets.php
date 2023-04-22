<?php

add_action( 'wp_enqueue_scripts', function () {

	$asset_file = include( plugin_dir_path( dirname( __FILE__ ) ) . 'assets/front.min.asset.php' );

	wp_enqueue_style(
		'digitfab-theme',
        get_template_directory_uri() . '/assets/style-front.css',
		[],
		$asset_file["version"]
	);

	wp_enqueue_script(
		'digitfab-theme',
        get_template_directory_uri() . '/assets/front.min.js',
		$asset_file["dependencies"],
		$asset_file["version"],
		true
	);

	digitfab_localize_theme_scripts();
} );

function digitfab_localize_theme_scripts(): void {
	$data = [
		'nonce' => wp_create_nonce( 'wp_rest' ),
	];

	wp_localize_script( 'digitfab-theme', '__DIGITFAB_THEME__', $data );
}

add_action( 'after_setup_theme', function () {
	add_editor_style( get_template_directory_uri() . '/assets/editor.css' );
});
