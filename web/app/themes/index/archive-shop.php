<?php

$pages = get_posts(array(
  'post_type' => 'page',
  'fields' => 'ids',
  'nopaging' => true,
  'meta_key' => '_wp_page_template',
  'meta_value' => 'page-templates/archive-shop.php'
));

$context = Timber::get_context();

$context['post'] = new Timber\Post();

//dump($context);
Timber::render('views/pages/shop.twig', $context);
