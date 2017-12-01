<?php

add_action('after_setup_theme', 'thumbnails_theme_support');

function thumbnails_theme_support() {
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'create_image_size');

function create_image_size() {
  add_image_size('hub_movie_cover', 350, 140, true);
}
