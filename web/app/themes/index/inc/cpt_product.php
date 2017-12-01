<?php

function add_custom_type_product() {

	$post_type = 'product';
	$labels = array(
		'name'               => 'Produit',
		'singular_name'      => 'Produit',
		'all_items'          => 'Tous les produits',
		'add_new'            => 'Ajouter un produit',
		'add_new_item'       => 'Ajouter un nouveau produit',
		'edit_item'          => 'Modifier le produit',
		'new_item'           => 'Nouveau produit',
		'view_item'          => 'Voir le produit',
		'search_items'       => 'Chercher un produit',
		'not_found'          => 'Pas de résultat',
		'not_found_in_trash' => 'Pas de résultat',
		'parent_item_colon'  => 'Produit parent :',
		'menu_name'          => 'Produits',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
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

add_action( 'init', 'add_custom_type_product' );
