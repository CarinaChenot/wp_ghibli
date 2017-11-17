<?php
/*
Template Name: Page Home
*/

$timber = new \Timber\Timber();
$context = Timber::get_context();

$context['acf'] = get_fields();
Timber::render('views/pages/home.twig', $context);
