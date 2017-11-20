<?php

$timber = new \Timber\Timber();

// Load autoload
require_once(__DIR__ . '/../../../../vendor/autoload.php');

// Load all file in inc directory
foreach (glob(__DIR__ . '/inc/*.php') as $filename)
{
  require_once $filename;
}

// flush_rewrite_rules();
