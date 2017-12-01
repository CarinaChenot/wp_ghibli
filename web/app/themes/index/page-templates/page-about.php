<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();
$context['sections'][] = new Timber\Post($context['post']->custom['section_1']);
$context['sections'][] = new Timber\Post($context['post']->custom['section_2']);
$context['sections'][] = new Timber\Post($context['post']->custom['section_3']);
$context['sections'][] = new Timber\Post($context['post']->custom['section_4']);
//$context['sections'][] = new Timber\Post($context['post']->custom['section_1']);

$args = array(
  'post_type' => 'author',
  'posts_per_page' => -1,
);

$context['authors'] = Timber::get_posts( $args );

//dump($context);
Timber::render('views/pages/about.twig', $context);
