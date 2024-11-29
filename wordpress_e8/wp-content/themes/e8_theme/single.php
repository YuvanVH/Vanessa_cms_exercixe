<?php get_header(); ?>

<main>
  <article>
    <section class="single-news-title">
      <div class="single-news-info-category">
        <h2><?php the_title(); ?></h2>
        <p><strong>Publicerad:</strong> <?php the_date(); ?></p>
        <p><strong>Kategori:</strong>
          <?php
          // Visar kategorier för det aktuella inlägget
          the_category(', ');
          ?>
        </p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-content">
          <div class="single-news-item">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>

<?php get_footer(); ?>
