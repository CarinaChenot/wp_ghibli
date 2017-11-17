<?php
// Example //

// add_action('init', 'create_custom_post_type_patrick_bio');
//
// function create_custom_post_type_patrick_bio() {
//
//   $labels = array(
//     'name'               => 'Patrick C. Curiel',
//     'singular_name'      => 'patrick',
//     'all_items'          => 'Toutes la bio',
//     'add_new'            => 'Ajouter un evenement',
//     'add_new_item'       => 'Ajouter un evenement',
//     'edit_item'          => "Modifier l'evenement",
//     'new_item'           => 'Nouvelle evenement',
//     'view_item'          => "Voir l'evenement",
//     'search_items'       => 'Trouver un evenement',
//     'not_found'          => 'Pas de résultat',
//     'not_found_in_trash' => 'Pas de résultat',
//     'parent_item_colon'  => 'Evenement parentes:',
//     'menu_name'          => 'Patrick C. Curiel',
//   );
//
//   $args = array(
//     'labels'              => $labels,
//     'hierarchical'        => false,
//     'supports'            => array( 'title','thumbnail' ),
//     'public'              => true,
//     'show_ui'             => true,
//     'show_in_menu'        => true,
//     'menu_position'       => 4,
//     'menu_icon'           => 'dashicons-calendar-alt',
//     'show_in_nav_menus'   => true,
//     'publicly_queryable'  => true,
//     'exclude_from_search' => false,
//     'has_archive'         => false,
//     'query_var'           => true,
//     'can_export'          => true,
//     'rewrite'             => array(
//       'slug'                => 'patrick_bio'
//     ),
//   );
//   register_post_type('patrick_bio', $args );
// }
