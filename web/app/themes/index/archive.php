<?php

$context = Timber::get_context();
// $context['archives'] = new TimberArchives( );

dump($context);
Timber::render('views/pages/archive-film.twig', $context);
