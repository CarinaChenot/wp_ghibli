<?php
/*
Template Name: Page Shop
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();

//dump($context);
Timber::render('views/pages/shop.twig', $context);
