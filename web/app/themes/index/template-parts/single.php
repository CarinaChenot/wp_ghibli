<?php

$timber = new \Timber\Timber();
$context = Timber::get_context();

//dump($context);
Timber::render('views/pages/movie.twig', $context);
