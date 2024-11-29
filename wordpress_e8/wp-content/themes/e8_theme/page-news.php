<?php
/* Template Name: Nyhetssida */
get_header(); ?>

<main>
  <section class="category-list">
    <div class="section">
      <h2>Kategorier</h2>
      <hr>
      <ul>
        <?php
        // Visar alla kategorier
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC'
        );
        $categories = get_categories($args);
        foreach ($categories as $category) :
        ?>
          <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="news-list">
    <div class="container">
      <div class="news-items">
        <h2>Senaste Nyheterna</h2>
        <hr>
        <?php
        // Start WordPress loop, hämta de senaste inläggen
        $args = array(
          'post_type' => 'post', // Hämtar vanliga inlägg
          'posts_per_page' => 5,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="news-item">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <p><strong>Publicerad:</strong> <?php echo get_the_date(); ?></p>
              <p><strong>Kategori:</strong>
                <?php
                // Visar kategorier för det aktuella inlägget
                the_category(', ');
                ?>
              </p>

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
