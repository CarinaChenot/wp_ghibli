<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

//dump($context);
Timber::render('views/pages/about.twig', $context);
