<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();

$args = array(
  'post_type' => 'author',
  'posts_per_page' => -1,
);

$context['authors'] = Timber::get_posts( $args );

dump($context);

Timber::render('views/pages/about.twig', $context);
