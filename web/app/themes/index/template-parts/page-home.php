<?php
/*
Template Name: Page Home
*/

$timber = new \Timber\Timber();
$context = Timber::get_context();


//dump($context);
Timber::render('views/pages/home.twig', $context);
