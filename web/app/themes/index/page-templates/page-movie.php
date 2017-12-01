<?php
/*
Template Name: Page Movie
*/


$context = Timber::get_context();

$args = array(
'post_type' => 'film',
    'posts_per_page' => -1,
);

$context['films'] = Timber::get_posts( $args );
$context['post'] = new \Timber\Post();

//dump($context);
Timber::render('views/pages/archive-film.twig', $context);
