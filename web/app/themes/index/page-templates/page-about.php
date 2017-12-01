<?php
/*
Template Name: Page About
*/

$context = Timber::get_context();

$context['post'] = new Timber\Post();
$context['sections'][] = new Timber\Post($context['post']->custom['section_1']);
$context['sections'][] = new Timber\Post($context['post']->custom['section_2']);
//$context['sections'][] = new Timber\Post($context['post']->custom['section_1']);

//dump($context);
Timber::render('views/pages/about.twig', $context);