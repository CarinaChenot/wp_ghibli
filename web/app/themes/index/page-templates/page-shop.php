<?php
/*
Template Name: Page Shop
*/

global $paged;

if (!isset($paged) || !$paged){
    $paged = 1;
}

$context = Timber::get_context();

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 6,
    'paged' => $paged
);

$context['post'] = new \Timber\Post();
$context['products'] = new \Timber\PostQuery($args);

//dump($context);
Timber::render('views/pages/shop.twig', $context);
