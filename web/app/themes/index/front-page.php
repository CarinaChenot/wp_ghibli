<?php
/*
Template Name: Page Home
*/

$pages = get_posts(array(
  'post_type' => 'page',
  'fields' => 'ids',
  'nopaging' => true,
  'meta_key' => '_wp_page_template',
  'meta_value' => 'page-templates/page-about.php'
));

$context = Timber::get_context();

$context['post'] = new Timber\Post();
$context['page_about'] = new Timber\Post($pages[0]);
$context['famous_movies'] = wpPostsToTimber(get_field('famous_movies'));
$context['latest_movies'] = getRecentMovies(get_field('recent_movies_number'));

dump($context);
Timber::render('views/pages/home.twig', $context);
