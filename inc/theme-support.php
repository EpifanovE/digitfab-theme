<?php

add_action( 'after_setup_theme', function () {

	add_theme_support( 'menus' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		'script',
		'style',
	] );

	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

    add_theme_support( 'rank-math-breadcrumbs' );

//	add_theme_support( 'starter-content', array(
//		'options'     => '',
//		'theme_mods'  => '',
//		'widgets'     => '',
//		'nav_menus'   => '',
//		'attachments' => '',
//		'posts'       => '',
//	) );
} );