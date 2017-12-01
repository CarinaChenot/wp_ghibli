<?php
/*
Template Name: Page Movie
*/

global $paged;

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

Timber::render('views/pages/archive-film.twig', $context);
