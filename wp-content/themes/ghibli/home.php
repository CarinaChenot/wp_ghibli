<?php
/*
Template Name: Accueil
*/

get_header();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>


<?php while ( have_posts() ) : the_post(); ?>

<section class="hero" style="background-image: url('<?= $url ?>')">
  <img src="<?php the_field('hero_logo'); ?>">
  <a class="hero-cta" href="<?= THEME_URL . '/a-propos' ?>">Découvrir l'univers</a>
</section>

<section class="quote">
  <p class="quote-text">
    <?php the_field('quote') ?>
  </p>
  <span class="quote-author"><?php the_field('quote_author') ?></span>

</section>

<?php

endwhile;
get_footer();

