<?php
/* Template Name: Nyhetssida */
get_header(); ?>

<main>
  <section class="news-list">
    <div class="container">
      <h2>Nyheter</h2>
      <div class="news-items">
        <?php
        // Start WordPress loop för att hämta de senaste inläggen
        $args = array(
          'post_type' => 'post',  // Hämtar vanliga inlägg
          'posts_per_page' => 5,  // Antalet nyheter att visa
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="news-item">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </article>
        <?php
          endwhile;
        else :
          echo '<p>Inga nyheter hittades.</p>';
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
