<?php
/*
Template Name: Page Shop
*/

$timber = new \Timber\Timber();
$context = Timber::get_context();


//dump($context);
Timber::render('views/pages/shop.twig', $context);
