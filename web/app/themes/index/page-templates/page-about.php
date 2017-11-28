<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();

//dump($context);
Timber::render('views/pages/about.twig', $context);