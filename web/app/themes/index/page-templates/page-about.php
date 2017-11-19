<?php
/*
Template Name: Page About
*/

$timber = new \Timber\Timber();
$context = Timber::get_context();


//dump($context);
Timber::render('views/pages/about.twig', $context);
