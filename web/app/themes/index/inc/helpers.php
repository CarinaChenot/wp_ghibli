<?php

/**
 * Retrieve the number requested of movies based on their year taxonomy
 */
function getRecentMovies($numberRequested) {
  $recentMoviesArray = [];

  // We retrieve the terms of the taxonomy year
  $terms = get_terms(array(
    'taxonomy' => 'year',
    'order' => 'DESC',
    'number' => $numberRequested,
  ));

  $slotsLeft = $numberRequested;
  $i = 0;

  // We loop until the array of recent movies has the right amount of posts
  while(count($recentMoviesArray) < $numberRequested) {

    // We retrieve term by term...
    $term = new TimberTerm($terms[$i]);

    // ... the X first posts on this term
    foreach ($term->posts($slotsLeft) as $post) {
      array_push($recentMoviesArray, $post);
    }

    $slotsLeft = $numberRequested - count($recentMoviesArray);
    $i++;
  }

  return $recentMoviesArray;
}


function wpPostsToTimber($wpPosts) {
  $array = [];

  foreach ($wpPosts as $wpPost) {
    array_push($array, new Timber\Post($wpPost));
  }

  return $array;
}
