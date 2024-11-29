<?php
/* Template Name: Nyhetssida */
get_header(); ?>

<main>
  <section class="category-list">
    <div class="container">
      <h2>Kategorier</h2>
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
      <h2>Nyheter</h2>
      <div class="news-items">
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
