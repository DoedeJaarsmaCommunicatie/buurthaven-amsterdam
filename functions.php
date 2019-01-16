<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2019-01-14
 * Time: 15:30
 */

/**
 * Require the helper files.
 */
array_map(
	function ( $file ) {
		$file = get_stylesheet_directory() . "/app/{$file}.php";
		load_template( $file, true );
	},
	[
		'timber/init'
	]
);