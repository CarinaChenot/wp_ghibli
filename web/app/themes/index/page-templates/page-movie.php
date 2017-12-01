<?php
/*
Template Name: Page Movie
*/

if (!isset($paged) || !$paged){
    $paged = 1;
}

$context = Timber::get_context();

$args = array(
    'post_type' => 'film',
    'posts_per_page' => 6,
    'paged' => $paged
);

$context['post'] = new \Timber\Post();
$context['films'] = new \Timber\PostQuery($args);

dump($context);
Timber::render('views/pages/archive-film.twig', $context);
