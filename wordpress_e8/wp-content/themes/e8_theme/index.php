<?php get_header(); ?>
<section class="section">
  <div class="container">
    <div class="section-content">
      <div>
        <h3><?php the_title(); ?></h3>
        <hr>
        <p class="slogan"><?php echo get_bloginfo('description'); ?></p>
        <div><?php the_content(); ?></div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
