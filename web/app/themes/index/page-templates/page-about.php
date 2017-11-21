<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();

Timber::render('views/pages/about.twig', $context);
