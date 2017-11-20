<?php
/*
Template Name: Page Home
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();
$context['famous_movies'] = wpPostsToTimber(get_field('famous_movies'));
$context['latest_movies'] = getRecentMovies(get_field('recent_movies_number'));

dump($context);
Timber::render('views/pages/home.twig', $context);
