<?php
/**
 * Created by PhpStorm.
 * User: paulmaire
 * Date: 01/12/2017
 * Time: 01:36
 */

$context = Timber::get_context();
Timber::render('views/pages/404.twig', $context);