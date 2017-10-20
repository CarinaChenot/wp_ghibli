<?php

define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('CSS_URL', THEME_URL . '/dist/css');
define('IMG_URL', THEME_URL . '/dist/img');
define('JS_URL', THEME_URL . '/dist/js');

foreach (glob(THEME_PATH . '/inc/*.php') as $file) {
  include_once $file;
}
