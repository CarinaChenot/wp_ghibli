<?php

function add_custom_type_author() {

	$post_type = 'author';
	$labels = array(
		'name'               => 'Auteurs',
		'singular_name'      => 'Auteur',
		'all_items'          => 'Tous les auteurs',
		'add_new'            => 'Ajouter un auteur',
		'add_new_item'       => 'Ajouter un nouvel auteur',
		'edit_item'          => 'Modifier l\'auteur',
		'new_item'           => 'Nouvel auteur',
		'view_item'          => 'Voir l\'auteur',
		'search_items'       => 'Chercher un auteur',
		'not_found'          => 'Pas de résultat',
		'not_found_in_trash' => 'Pas de résultat',
		'parent_item_colon'  => 'Auteur parent :',
		'menu_name'          => 'Auteurs',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt', 'revisions' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => $post_type )
	);

  register_post_type( $post_type, $args );

}

add_action( 'init', 'add_custom_type_author' );
