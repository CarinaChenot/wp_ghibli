<?php

$context = Timber::get_context();

$context['post'] = new Timber\Post();
// $context['acf'] = get_field_objects($context['post']->ID);

Timber::render('views/pages/single-author.twig', $context);
