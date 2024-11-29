<?php get_header(); ?>

<main>
  <article>
    <section class="section">
      <div class="container">
        <div class="read-more-link">
          <a href="<?php echo site_url('/nyheter'); ?>" class="button"> ← Tillbaks till Senaste Nyheterna</a>
        </div>
        <div class="section-content">
          <div class="single-news-item">
            <hr>
            <?php the_content(); ?>
          </div>
        </div>
        <hr>
      </div>

      <section class="single-news">
        <div class="single-news-info-category">
          <p><strong>Publicerad:</strong> <?php echo get_the_date(); ?></p>
          <p><strong>Kategori:</strong>
            <?php
            // Visar kategorier för det aktuella inlägget
            the_category(', ');
            ?>
          </p>
        </div>
      </section>
    </section>
  </article>

  <section class="category-list">
    <div class="section">
      <h2>Andra Nyhets-Kategorier</h2>
      <span></span>
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

</main>

<?php get_footer(); ?>
