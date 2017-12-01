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
$context['famous_products_1'] = $context['products'][0]->terms('famous');
$context['famous_products_2'] = $context['products'][1]->terms('famous');

//dump($context);
Timber::render('views/pages/shop.twig', $context);
