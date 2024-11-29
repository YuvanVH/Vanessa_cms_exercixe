<?php
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

  <section class="category-archive">
    <div class="container">
      <h2>Nyheter i kategorin: <?php single_cat_title(); ?></h2>

      <?php if (have_posts()) : ?>
        <div class="category-news-items">
          <?php while (have_posts()) : the_post(); ?>
            <article class="news-item">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Navigering mellan sidor om det finns fler inlägg -->
        <div class="pagination">
          <?php
          // Navigering om det finns flera sidor av inlägg
          echo paginate_links();
          ?>
        </div>

      <?php else : ?>
        <p>Inga inlägg hittades i denna kategori.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
