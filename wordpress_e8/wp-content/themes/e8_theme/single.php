<?php get_header(); ?>

<main>
  <article>
    <h2><?php the_title(); ?></h2>
    <p><strong>Publicerad:</strong> <?php the_date(); ?></p>
    <div>
      <?php the_content(); ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>
