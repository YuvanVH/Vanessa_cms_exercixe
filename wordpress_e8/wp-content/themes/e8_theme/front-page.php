<?php
get_header(); // Laddar header.php
?>

<main>
  <section class="hero">
    <div class="container">
      <h1>Välkommen till Världsvyer</h1>
      <p>Upptäck världen med oss.</p>
      <a href="/wordpress_e8/om-oss" class="button">Lär känna oss</a>
    </div>
  </section>

  <section class="latest-news">
    <div class="container">
      <h2>Senaste Nyheter</h2>
      <div class="news-items">
        <?php
        // Hämta de senaste tre inläggen
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
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

<?php
get_footer(); // Laddar footer.php
?>
