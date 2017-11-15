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

<section class="about">
  <div class="about-image">
    <img src="<?= THEME_URL . '/dist/img/miyasaki.jpeg' ?>">
  </div>
  <div class="about-text">
    <h3 class="about-title">Découvrez toute l’histoire du studio et de ses grands fondateurs.</h3>
    <p class="about-paragraph">
      Le studio Ghibli est un studio d'animation japonais, il a été officiellement fondé, par Hayao Miyazaki et Isao Takahata. Il produit des films d'animation japonais, longs-métrages et courts-métrages, ainsi que des téléfilms, des séries d'animation et des jeux vidéo, dans une moindre mesure.
    </p>
  </div>
  <a href="#" class="btn-scale about-cta">
    <span class="about-cta-text">À propos de nous</span>
    <?php include THEME_PATH . '/dist/img/right-arrow.svg' ?>
  </a>
</section>

<?php

endwhile;
get_footer();

