<?php

// Main menu //
function register_menus() {
  register_nav_menus(array(
	'theme_location' => 'main_menu',
  ));
}

add_action( 'init', 'register_menus' );

add_filter( 'timber/context', 'init_timber_menu' );

function init_timber_menu($context) {
	$context['mainMenu'] = new TimberMenu( 'mainMenu' );
	return $context;
}
