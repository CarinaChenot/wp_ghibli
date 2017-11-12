<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="main-header">
  <?php
    $menuArgs = array(
      'theme_location' => 'main_menu',
      'container'       => 'nav',
      'container_class' => 'main-menu',
      'items_wrap' => '%3$s',
    );
    wp_nav_menu( $menuArgs ); ?>
  </header>

