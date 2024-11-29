<?php get_header(); ?>

<main>
  <section class="section">
    <div class="container">
      <!-- Dynamisk slogan/description -->
      <a href="<?php echo site_url('/om-oss'); ?>" class="button">Lär känna oss</a>
    </div>
  </section>

  <section class="latest-news">
    <div class="container">
      <div class="news-items">
        <h2>Senaste Nyheterna</h2>
        <hr>
        <?php
        // Dynamiskt hämtar de senaste 3 inläggen
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post(); ?>
            <article class="news-item">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><strong>Publicerad:</strong> <?php echo get_the_date(); ?></p>
              <p><strong>Kategori:</strong>
                <?php
                // Visar kategorier för det aktuella inlägget
                the_category(', ');
                ?>
              </p>
              <p><?php the_excerpt(); ?></p> <!-- Kort utdrag -->
            </article>
        <?php
          endwhile;
        else :
          echo '<p>Inga nyheter hittades.</p>';
        endif;
        wp_reset_postdata();
        ?>
        <div class="read-more-link">
          <a href="<?php echo site_url('/nyheter'); ?>" class="button">Läs mer</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
